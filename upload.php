<?php
include "config.php";
if (isset($_REQUEST["submit"]) && $_REQUEST["submit"] == "true") {
    $target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
    $username = $_SESSION['login_name'];
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $result = $connection->query("INSERT INTO uploads (username, file_path, title, description) values ('$username', '$target_file', '" . $_REQUEST['title'] . "', '" . $_REQUEST['description'] . "')");
        header("Location: youtube.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    header("Location: youtube.php");
}
?>
<html>
     <style>
    body {
      background-color: #f0f2f5;
      color: black;
      font-family: "Segoe UI", sans-serif;
    }
        .upload-card {
      max-width: 600px;
      margin: 40px auto;
    }
        .btn-primary {
      background: #43ac5aff;
      border: none;
      transition: 0.3s;
      font-weight: 900;
      padding:8px;
      border-radius: 23px;
    }
    .btn-primary:hover {
      background: #116003ff;
    }
    .select{
        margin-top: 20px;
    }
    h1{
        margin-left: 150px;
        color:darkred;
    }

    
    </style>
<div class="upload-card bg-dark text-white shadow-lg">
<body>
    <h1 style="margin-bottom:40px;">Upload a video</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="mb-3"><input name="title" placeholder="Title" required></div>
        <div class="mb-3 select"><textarea name="description" rows="15" cols="60" placeholder="Description" required></textarea></div>
       <h3 class="select"> Select video to upload : </h3>
        <div class="mb-3 select"><input type="file" name="fileToUpload" id="fileToUpload"></div>
        <div class="select"><button type = "submit" class="btn btn-primary w-100 py-2 fw-semibold" name = "submit" value = "true">Upload Video</button></div>
    </form>
</body>
</div>

</html>