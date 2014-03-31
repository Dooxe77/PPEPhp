<?php
session_start();	
if ($_SESSION['pseudo'] == '')
{
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" /><!-- css toute les vues -->
		<link rel="stylesheet" href="../css/styleacc.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../css/calendrier.css" media="screen" />

   </head>
   
   <div id="footer"><br/>Application CVVEN créé par Tony Villanova , Kevin Bounseng et Anthony Ruelle.</div>
   
