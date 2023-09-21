<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="makeslider" id="sliderForm">
    <label>Name of slider</label>
    <input type="text" name="slider_name" id="sliderName">
    <input type="button" value="Create Folder" onclick="createFolder()">
</form>
<div id="makeslider_result"></div>

<form name="addFileForm" id="addFileForm" enctype="multipart/form-data">
    <label>Name of slider</label>
    <input type="text" name="slider_name" id="sliderName">
    
    <label>Select file to upload:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    
    <input type="button" value="Upload File" onclick="uploadFile()">
</form>

<div id="addFileResult"></div>


</body>
<script src="./addfiles.js"></script>
<script src="./addslider.js"></script>
</html>