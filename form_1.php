

<!DOCTYPE html>
<html>
<head>
<title>Upload</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body style="background-color: blue; color: white">

<form action="up.php" method="post" enctype="multipart/form-data">
    Wybierz plik do wgrania na server:<br />
    <input type="file" name="fileToUpload" id="fileToUpload"><br />
    <input type="submit" value="Uploaduj" name="submit">
</form>

</body>
</html>
