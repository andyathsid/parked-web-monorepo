from logging import error
from pydub import AudioSegment
from pydub.silence import split_on_silence
import glob
import os.path
from scripts.feature_extraction import Feature_Extraction  # Updated import
import pandas as pd


# Split the wav files into chunks

f = Feature_Extraction()

def split_into_chunks():
    folder_paths = [
        r"../data/raw/MDVR-KCL/ReadText/HC/*.wav",  # Updated path
        r"../data/raw/MDVR-KCL/ReadText/PD/*.wav"   # Updated path
    ]
    parent_dirs = [
        r"../data/raw/MDVR-KCL/MDVR/HC",  # Updated path
        r"../data/raw/MDVR-KCL/MDVR/PD"   # Updated path
    ]

    for i in range(len(folder_paths)):
        for file in glob.glob(folder_paths[i]):
            try:
                print(file)
                path2, filename2 = os.path.split(file)
                root, ext = os.path.splitext(filename2)
                x = root.split('_')[0]

                directory = x
                parent_dir = parent_dirs[i]

                path = os.path.join(parent_dir, directory)
                print(path)
                os.makedirs(path, exist_ok=True)

                sound_file = AudioSegment.from_wav(file)
                audio_chunks = split_on_silence(sound_file, 
                    min_silence_len=1000,
                    silence_thresh=-40)
                for j, chunk in enumerate(audio_chunks):
                    out_file = os.path.join(path, f"chunk{j}.wav")
                    print("exporting", out_file)
                    chunk.export(out_file, format="wav")
            except Exception as e:
                print(e)
                print("error while handling file:", file)


def extract_features_from_chunks(folder_path, label):
    df_all = []
    for root, dirs, _ in os.walk(folder_path):
        for dir in dirs:
            folder_path = os.path.join(root, dir)
            folder_path = os.path.join(folder_path, "*.wav")
            print(folder_path)
            df_hc = f.extract_features_from_folder(folder_path)
            df_all.append(df_hc)

    df_all = pd.concat(df_all)
    df_all['label'] = label
    return df_all


def extract_mfccfeatures_from_chunks(folder_path, label):
    df_all = []
    for root, dirs, _ in os.walk(folder_path):
        for dir in dirs:
            folder_path = os.path.join(root, dir)
            folder_path = os.path.join(folder_path, "*.wav")
            print(folder_path)
            df_hc = f.extract_mfcc_from_folder(folder_path)
            df_all.append(df_hc)

    df_all = pd.concat(df_all)
    df_all['label'] = label
    return df_all

# Extract the features
def acoustic_features():
    hc = extract_features_from_chunks(r"../data/raw/MDVR-KCL/MDVR/HC", 0)  # Updated path
    pd_1 = extract_features_from_chunks(r"../data/raw/MDVR-KCL/MDVR/PD", 1)  # Updated path
    df_acoustic_features = pd.concat([hc, pd_1])
    f.convert_to_csv(df_acoustic_features, "../data/interim/MDVR_acoustic_features_chunks")
    return df_acoustic_features

def mfcc_features():
    print("Start")
    hc = extract_mfccfeatures_from_chunks(r"../data/raw/MDVR-KCL/MDVR/HC", 0)  # Updated path
    pd_1 = extract_mfccfeatures_from_chunks(r"../data/raw/MDVR-KCL/MDVR/PD", 1)  # Updated path
    df_mfcc_features = pd.concat([hc, pd_1])
    f.convert_to_csv(df_mfcc_features, "../data/interim/MDVR_mfcc_features_chunks")
    print("End")
    return df_mfcc_features

