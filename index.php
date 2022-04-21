<!DOCTYPE html>
<html>
    <head>
        <title>Upload File</title>
    </head>
    <body>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="file" name="file"/>
            <input type="submit" name="upload" value="Upload"/>
        </form>
    </body>
</html>