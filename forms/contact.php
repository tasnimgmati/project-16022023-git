<?php

$bdd = new PDO("mysql: host=localhost; dbname-formulaire; charset=utf8", "root", "");

if(isset($_POST['الإسم_اللقب '], $_POST['العنوان_الإلكتروني'], $_POST['الموضوع'], $_POST['الموضوع'], $_POST['المحتوى'])){
  
if(!empty($_POST['الإسم_اللقب']) AND !empty($_POST['العنوان_الإلكتروني']) AND !empty($_POST['الموضوع']) AND !empty($_POST['المحتوى'])){

  $الإسم_اللقب =htmlspecialchars($_POST[' الإسم_اللقب']);
  $العنوان_الإلكتروني = htmlspecialchars($_POST['العنوان_الإلكتروني']);
  $الموضوع = htmlspecialchars ($_POST['الموضوع']);
  $المحتوى = htmlspecialchars ($_POST['المحتوى']);

         $العنوان_الإلكترونيdb = $bdd->prepare("SELECT * FROM formulaire WHERE العنوان_الإلكتروني=?"
         $العنوان_الإلكترونيdb->execute(array($العنوان_الإلكتروني));
         $العنوان_الإلكترونيExist-$العنوان_الإلكترونيdb->rowCount();


         if($العنوان_الإلكترونيExist == 0) {
            $insert-$bdd->prepare("INSERT INTO formulaire ( الإسم_اللقب,العنوان_الإلكتروني, الموضوع, المحتوى) VALUES (?, ?, ?, ?)");
            $insert->execute(array($الإسم_اللقب, $العنوان_الإلكتروني, $الموضوع, $المحتوى));
         }else{
                $error="L'adresse mail existe déjà"
              }
         } 
else{
        $error = "Veuillez remplir tous les champs"
    }
}
