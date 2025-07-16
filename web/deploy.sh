#!/bin/bash

set -e

if [[ -z "$PROJECT_ID" || -z "$REGION" || -z "$REPO_NAME" || -z "$SERVICE_NAME" ]]; then
  echo "Please export PROJECT_ID, REGION, REPO_NAME, and SERVICE_NAME before running this script."
  exit 1
fi

IMAGE="$REGION-docker.pkg.dev/$PROJECT_ID/$REPO_NAME/$SERVICE_NAME:latest"

ENV_VARS=$(./env-to-gcloud-envs.sh)
echo "Environment variables to be set:"
echo "$ENV_VARS"

echo "Building Docker image..."
docker build -t "$IMAGE" .

echo "Pushing Docker image to Artifact Registry..."
docker push "$IMAGE"

echo "Deploying to Cloud Run..."
gcloud run deploy "$SERVICE_NAME" \
  --image "$IMAGE" \
  --region "$REGION" \
  --platform managed \
  --allow-unauthenticated \
  --set-env-vars "$ENV_VARS"

echo "Deployment complete."