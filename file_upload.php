<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="file_upload.php" method="POST" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload File">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "uploads/"; // Folder to store uploaded files
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    ?>
</body>
</html>
<!-- Explanation: The HTML form allows file selection, 
 and the PHP script processes and saves the file in the uploads/ folder. 
 A message confirms success or failure. -->