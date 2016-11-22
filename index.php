<?php
$currentDay = date("w");
$currentHour = date("G");

if ($currentDay == 0 || $currentDay == 6) {
  $text = "Ben oui c'est le week end!";
} elseif ($currentHour < 16) {
  $text = "Hum, c'est un peu tôt";
  $image = "http://cdn.quotesgram.com/small/81/69/566568378-3sj0qk.jpg";
} elseif ($currentHour <= 16) {
  $text = "Presque, mais pas encore.";
  $image = "https://e.lvme.me/tlkwnk1.jpg";
}elseif ($currentHour <= 17) {
  $text = "Yep, c'est le moment";
  $image = "http://thelibertarianrepublic.com/wp-content/uploads/2014/03/obama-beer-1.jpg";
} elseif ($currentHour >= 20) {
  $text = "Ben c'est un peu tard, l'happy hour est terminée";
  $image=  "http://m.memegen.com/cn1jfl.jpg";
} elseif ($currentHour >= 18) {
  $text = "OUI GO GO GO GO";
  $image=  "http://m.memegen.com/cn1jfl.jpg";

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>Est ce que on peut aller au general maintenant ?</title>
  <style>
body {
  background: #fff;
  color: #000;
  font-family: 'Open Sans', 'Times', sans-serif;
}

h1{
text-align: center;
font-size:500%;
}
.mb0 {
 margin-bottom: 0;
}
.aligncenter {
text-align: center;
}
  </style>
</head>
<body>
<h1><?php echo $text; ?></h1>
<h1><img src="<?php echo $image; ?>" width=300 height=244 /></h1>
</body>
</html>
