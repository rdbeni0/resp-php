<?php   require("konfig.php");
    if(!empty($_POST)) 
    { 
        if(empty($_POST['uzer'])) 
	{ die("Niepoprawna nazwa użytkownika, proszę odpowiednio uzupełnić."); } 
        if(empty($_POST['haslo1'])) 
	{ die("Nieprawidłowo uzupełnione hasło, proszę odpowiednio uzupełnić."); } 
        if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) 
	{ die("Zły lub nieuzupełniony adres e-mail. Podaj jakiś inny."); } 
        $selectdb = " 
            SELECT 
                1 
            FROM users
            WHERE 
                uzer = :uzer 
        "; 
        $selectdb_parametry = array( ':uzer' => $_POST['uzer'] ); 
        try { $oswiadczenie = $bede->prepare($selectdb); 
            $rezultat = $oswiadczenie->execute($selectdb_parametry); 
        }  catch(PDOException $error){ die("Nie udalo sie uruchomic bazy danych. Blad: " . $error->getMessage()); } 
        $wiersz = $oswiadczenie->fetch(); 
	if($wiersz){ die("Użytkownik o tej nazwie już jest zajęty. Proszę wybrać inną."); } 
        $selectdb = " 
            SELECT 
                1 
            FROM users
            WHERE 
                mail = :mail 
        "; 
        $selectdb_parametry = array( 
            ':mail' => $_POST['mail'] 
        );         try { 
            $oswiadczenie = $bede->prepare($selectdb); 
            $rezultat = $oswiadczenie->execute($selectdb_parametry); 
  } catch(PDOException $error){ die("Nie udalo się uruchomic bazy danych. Blad: " . $error->getMessage());} 
        $wiersz = $oswiadczenie->fetch(); 
if($wiersz){ die("Adres pocztowy jest już zajęty, proszę wpisać inny."); } 
        $selectdb = " 
            INSERT INTO users ( 
		uzer, 
                haslo1, 
                variab, 
                mail 
            ) VALUES ( 
                :uzer, 
                :haslo1, 
                :variab, 
                :mail 
            ) 
        ";
        $variab = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $haslo1 = hash('sha256', $_POST['haslo1'] . $variab); 
	for($okrag = 0; $okrag < 65536; $okrag++){ $haslo1 = hash('sha256', $haslo1 . $variab); } 
        $selectdb_parametry = array( 
            ':uzer' => $_POST['uzer'], 
            ':haslo1' => $haslo1, 
            ':variab' => $variab, 
            ':mail' => $_POST['mail'] 
        ); try {  
            $oswiadczenie = $bede->prepare($selectdb); 
            $rezultat = $oswiadczenie->execute($selectdb_parametry); 
        } 
        catch(PDOException $error){ die("Nie udalo sie uruchomic bazy danych. Blad " . $error->getMessage()); } 
        header("Location: index.php"); die("Redirecting to index.php"); }?>



<html lang="pl">
<head>
<meta charset="utf-8"> 
<title>APLIKACJA RESPONSYWNA</title>
<meta name="description" content="Formularz rejestracyjny">

<style type="text/css">
.hero-unit { background-color: #E854A3; }
.center { display: block; margin: 0 auto; }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="libs/bootstrap.min.js"></script>
<link href="libs/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body> 
<div class="container hero-unit">
<div class="container-fluid">
<center> <h2>REJESTRACJA:</h2> </center><br>
<form action="rejestracja.php" method="post" data-ajax="false"> 
<div class="row" style="background-color:#FF96CE;">
<div class="col-xs-12 col-md-4"><label><b>Nazwa użytkownika:</b></label> 
<input type="text" name="uzer" value="" /> </div>
<div class="col-xs-12 col-md-4"><label><b>Poczta e-mail:</b> 
<strong style="color:#3A13D6;">*</strong></label> 
<input type="text" name="mail" value="" /> </div>
<div class="col-xs-12 col-md-4"><label><b>Podaj hasło:</b></label> 
<input type="password" name="haslo1" value="" /> <br /> </div>
<p style="color:#3A13D6;">* można podać nieprawdziwy adres. E-mail nie jest sprawdzany.</p><br>
</div> <div class="row" style="background-color:#BAFF9E;">

<div class="col-xs-12 col-lg-6"><input type="submit" class="btn btn-info" value="DALEJ" rel="external"/></div></form>

<form action="index.php" method="post" data-ajax="false"> 
<div class="col-xs-12 col-lg-6"><a href="index.php" rel="external">
<input type="submit" class="btn btn-info" value="POWRÓT" rel="external"/></a></div>


</form></div>  </div></div> 
</body></html>
