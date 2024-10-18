let chunks = [];
let mediaRecorder;

const recordBtn = document.getElementById("recordBtn");
const stopBtn = document.getElementById("stopBtn");
const audioPlayback = document.getElementById("audioPlayback");
const uploadOption = document.getElementById("uploadOption");
const recordOption = document.getElementById("recordOption");
const chooseUpload = document.getElementById("chooseUpload");
const chooseRecord = document.getElementById("chooseRecord");

document.querySelectorAll(".btn-ripple").forEach((button) => {
    button.addEventListener("click", function (e) {
        let x = e.clientX - e.target.offsetLeft;
        let y = e.clientY - e.target.offsetTop;

        let ripples = document.createElement("span");
        ripples.style.left = x + "px";
        ripples.style.top = y + "px";
        ripples.classList.add("ripple");
        this.appendChild(ripples);

        setTimeout(() => {
            ripples.remove();
        }, 600);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const animatedElements = document.querySelectorAll(".animate-on-scroll");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animated");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    animatedElements.forEach((element) => {
        observer.observe(element);
    });
});

chooseUpload.addEventListener("click", () => {
    uploadOption.classList.remove("d-none");
    recordOption.classList.add("d-none");
    audioPlayback.style.display = "none";
});

chooseRecord.addEventListener("click", () => {
    recordOption.classList.remove("d-none");
    uploadOption.classList.add("d-none");
    audioPlayback.style.display = "none";
});

recordBtn.addEventListener("click", async () => {
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({
                audio: true,
            });
            mediaRecorder = new MediaRecorder(stream);

            mediaRecorder.ondataavailable = (e) => {
                chunks.push(e.data);
            };

            mediaRecorder.onstop = () => {
                const blob = new Blob(chunks, {
                    type: "audio/ogg; codecs=opus",
                });
                chunks = [];
                const audioURL = window.URL.createObjectURL(blob);
                audioPlayback.src = audioURL;
                audioPlayback.style.display = "block";
            };

            mediaRecorder.start();
            recordBtn.classList.add("d-none");
            stopBtn.classList.remove("d-none");
        } catch (err) {
            console.error("Recording failed", err);
        }
    }
});

stopBtn.addEventListener("click", () => {
    mediaRecorder.stop();
    recordBtn.classList.remove("d-none");
    stopBtn.classList.add("d-none");
});

let dropArea = document.getElementById("drop-area");

["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
    dropArea.addEventListener(eventName, preventDefaults, false);
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

["dragenter", "dragover"].forEach((eventName) => {
    dropArea.addEventListener(eventName, highlight, false);
});

["dragleave", "drop"].forEach((eventName) => {
    dropArea.addEventListener(eventName, unhighlight, false);
});

function highlight(e) {
    dropArea.classList.add("highlight");
}

function unhighlight(e) {
    dropArea.classList.remove("highlight");
}

dropArea.addEventListener("drop", handleDrop, false);

function handleDrop(e) {
    let dt = e.dataTransfer;
    let files = dt.files;
    handleFiles(files);
}

// Fungsi untuk menangani file yang diunggah
function handleImageUpload(files) {
    const previewArea = document.getElementById("preview-area");
    previewArea.innerHTML = ""; // Clear previous content

    if (files.length > 0) {
        const file = files[0];
        const fileSizeMB = file.size / (1024 * 1024); // Convert size to MB
        const fileType = file.type;

        // Batasi ukuran file menjadi 60MB
        if (fileSizeMB > 60) {
            previewArea.innerHTML =
                '<p class="text-danger">File size exceeds 60 MB. Please upload a smaller image file.</p>';
            return;
        }

        // Cek apakah file adalah gambar
        if (fileType.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = function (e) {
                // Create an image element to display the uploaded image
                const img = document.createElement("img");
                img.src = e.target.result; // Set image source to the uploaded file
                img.classList.add("img-fluid", "mt-3"); // Add Bootstrap classes for styling
                previewArea.appendChild(img); // Append the image to the preview area
            };
            reader.readAsDataURL(file);
        } else {
            previewArea.innerHTML =
                '<p class="text-danger">Please upload a valid image file.</p>';
        }
    }
}
function handleAudioUpload(files) {
    const audioPlayback = document.getElementById("audioUploadPlay");
    const previewArea = document.getElementById("preview-area");
    previewArea.innerHTML = ""; // Clear previous content
    audioPlayback.style.display = "none"; // Hide audio playback initially

    if (files.length > 0) {
        const file = files[0];
        const fileSizeMB = file.size / (1024 * 1024); // Convert size to MB
        const fileType = file.type;

        // Batasi ukuran file menjadi 60MB
        if (fileSizeMB > 60) {
            previewArea.innerHTML =
                '<p class="text-danger">File size exceeds 60 MB. Please upload a smaller audio file.</p>';
            return;
        }

        // Cek apakah file adalah audio
        if (fileType.startsWith("audio/")) {
            const reader = new FileReader();
            reader.onload = function (e) {
                audioPlayback.src = e.target.result; // Set audio source to the uploaded file
                audioPlayback.style.display = "block"; // Display audio controls
            };
            reader.readAsDataURL(file);
        } else {
            previewArea.innerHTML =
                '<p class="text-danger">Please upload a valid audio file.</p>';
        }
    }
}
function uploadFile(file) {
    // Implementasi upload file ke server Anda di sini
    console.log("Uploading file:", file.name);
    // Contoh: bisa menggunakan FormData dan fetch untuk mengirim file ke server
}

document.addEventListener("DOMContentLoaded", function () {
    // Seleksi semua input fields
    const inputs = document.querySelectorAll(".form-control");

    // Fungsi untuk mengecek apakah ada input yang terisi
    function checkInputs() {
        let isAnyFilled = false;

        // Cek apakah ada input yang memiliki nilai
        inputs.forEach((input) => {
            if (input.value.trim() !== "") {
                isAnyFilled = true;
            }
        });

        // Jika salah satu terisi, semua menjadi required
        inputs.forEach((input) => {
            if (isAnyFilled) {
                input.setAttribute("required", true);
            } else {
                input.removeAttribute("required");
            }
        });
    }

    // Event listener untuk setiap perubahan input
    inputs.forEach((input) => {
        input.addEventListener("input", checkInputs);
    });
});
