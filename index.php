<?php require("konfig.php"); 
    $wiadomyUserek = ''; 
    if(!empty($_POST)){ 
        $selectdatabase = " 
            SELECT 
                ident1, 
                uzer, 
                haslo1, 
                variab, 
                mail 
            FROM users 
            WHERE 
                uzer = :uzer 
"; 
$sectbede_dane = array( 
            ':uzer' => $_POST['uzer'] 
        );  try{ 
            $status = $bede->prepare($selectdatabase); 
            $wynik = $status->execute($sectbede_dane); } 
 catch(PDOException $error){ die("Nie mozna bylo uruchomic bazydanych. Błąd: " . $error->getMessage()); } 
        $loginjestok = false; 
        $linia = $status->fetch(); 
        if($linia){ 
            $checkhaslo1 = hash('sha256', $_POST['haslo1'] . $linia['variab']); 
            for($liczba = 0; $liczba < 65536; $liczba++){
                $checkhaslo1 = hash('sha256', $checkhaslo1 . $linia['variab']);
	    } if($checkhaslo1 === $linia['haslo1'])
		{
		$loginjestok = true; 
		}} 
	if($loginjestok)
	{ 
            unset($linia['variab']); 
            unset($linia['haslo1']); 
            $_SESSION['uzer'] = $linia;  
            header("Location: secret.php"); 
            die("Redirecting to: secret.php"); 
	}
	else
	{ print("Proces logowania się nie powiódł."); 
	$wiadomyUserek = htmlentities($_POST['uzer'], ENT_QUOTES, 'UTF-8'); 
	}
    }?> 

	    
<html lang="pl"> 
<head>
<meta name="description" content="Raf. Ben.">
	<meta name="author" content="Rafal Ben.">
	
<title>index.php</title>
<meta charset="utf-8">
<script src="libs/jquery.min.js"></script>
<script src="libs/bootstrap.min.js"></script>
<link href="libs/bootstrap.min.css" rel="stylesheet" media="screen">
<LINK href="libs/podstawowy.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="navbar navbar-fixed-top navbar-inverse">
<div class="navbar-inner">  <div class="container">

<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

	<span class="icon-bar"></span> <span style="color: #E80747;">MENU</span> 
	<span class="icon-bar"></span>  </a> 

<a class="brand" style="background: #D5DCDE; font-family: monospace; color: #0F9918;">


<center>APLIKACJA RESPONSYWNA</center></a>
<div class="nav-collapse collapse">
	<ul class="nav pull-right">
<li><a href="rejestracja.php" style="color: #BE41C4;"> REJESTRACJA </a></li>
<li class="dropdown">
<a class="dropdown-toggle" href="#" data-toggle="dropdown" style="color: #E38922;"> LOGOWANIE </a>
<div class="dropdown-menu" style="padding: 18px; padding-bottom: 2px;">
<form action="index.php" method="post"> 
<font color="#E38922">UŻYTKOWNIK:</font><br> 
<input type="text" name="uzer" value="<?php echo $wiadomyUserek; ?>"> 	    <br>
<font color="#E38922">HASŁO:</font><br> <input type="password" name="haslo1" value=""> 
<br>  <input type="submit" class="btn btn-info" value="DALEJ"> 
</form>  </div>  </li> </ul>  </div></div> </div> </div> 

<br><br> <div class="container">
<div class="row"> <div class="col-xs-12 col-sm-8" style="background-color:#45BABA;"><h2>
<center>Widok elastyczny</center></h2>
<h4><br> Układ zmienia się po rozdzielczości:
<br>rejestracja.php : szerokość - około 992
<br>index.php : szerokość - około 978 pikseli
<br><br>autor:<br> collector1871 - <a href="http://collector1871.github.io"><font color="red">http://collector1871.github.io</font></a></h4> <br>    
</div>
</div> 
</body>
</html>


