function createFolder() {
    var sliderName = document.getElementById("sliderName").value;
    var resultDiv = document.getElementById("makeslider_result");

    if (sliderName.trim() !== "") {
        var formData = new FormData();
        formData.append("slider_name", sliderName);

        fetch("makeslider.php", {
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