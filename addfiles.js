function uploadFile() {
    var sliderName = document.getElementById("sliderName").value;
    var resultDiv = document.getElementById("addFileResult");

    if (sliderName.trim() !== "") {
        var formData = new FormData(document.getElementById("addFileForm"));

        fetch("upload.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            resultDiv.innerHTML = data;
        })
        .catch(error => {
            console.error("Произошла ошибка:", error);
        });
    } else {
        resultDiv.innerHTML = "Пожалуйста, введите имя папки.";
    }
}