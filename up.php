<!DOCTYPE html>
<html>
<head>
<title>Upload</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body style="background-color: blue; color: white">
<?php

$target_dir = "uploads/"; // najwazniejsze rzeczy
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1; 

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Sprawdzenie czy plik jest grafika
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]); //czy to grafika
    if($check !== false) {
        echo "Plik jest grafika - " . $check["mime"] . "."; //mimi - sprawdza strukturę
        //skorelowanie sposobu
        // wyswietlania zawartosci do roszerzenia. Mozemy nie miec 
        // rozszerzenia.jpg a i tak go odczyta
        $uploadOk = 1;
        ////////////
        
    } else {
        echo "Plik nie jest grafika.";
        $uploadOk = 0;
    }
    //tutaj wrzucic dwa ify 
    //wielkosc pliku
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Plik jest za duży.";
$uploadOk = 0;}
//tylko jpg i png
}
// Format
/*if( $imageFileType != "png"  ) {
    echo "Plik musi mieć rozszerzenie .png.";
    $uploadOk = 0;
}*

//cw5
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

//4.php wklejamy
// Sprawdzenie czy $uploadOk ustawione na 0 (czyli blad) w przeciwnym wypadku zaladunek na serwer
if ($uploadOk == 0) {
    echo "Plik nie zostal zaladowany.";
// jesli OK to probujemy uploadowac na server
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Plik ". basename( $_FILES["fileToUpload"]["name"]). " zostal uploadowany na serwer.";
    } else {
        echo "Wystapil blad przy uploadowaniu pliku.";
    }
}

?>
</body>
</html>

