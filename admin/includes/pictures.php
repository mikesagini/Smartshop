<?php


  $pathpic = "../productsimg/";
  $filepic = $pathpic . basename($_FILES["picture1"]["name"]);
  $uploadOki = 1;
  $typepic = pathinfo($filepic,PATHINFO_EXTENSION);

  // Check if image file is a actual image or fake image
$img3=$_FILES["picture3"]["name"];

$img_pathpic3 = "../productsimg/".$_FILES["picture3"]["name"];

// 3 pictures
CreateThumbs($img_pathpic3, $img_pathpic3, 602, 600, 1);

//pictues
$picture3 = $_FILES["picture3"]["name"];


//adding pictures
$querypic = "INSERT INTO pictures(picture, id_produit)
VALUES ('$picture3', '$idproduct')";
mysqli_query($connection, $querypic);


 ?>
