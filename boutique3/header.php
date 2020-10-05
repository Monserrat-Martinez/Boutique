<?php
require "vendor/autoload.php";
    session_start();
echo <<<_INIT
 
<!DOCTYPE html>
<html>
   <head>
      <meta charset= 'utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <!--<link rel='stylesheet' href='bootstrap4/bootstrap.min.css'>-->
      <!--<link rel='stylesheet' href='bootstrap4/bootstrap.min.js'>-->
      <link rel='stylesheet' href='styles.css'>
      <script src='node_modules/jquery/dist/jquery.min.js'></script>
      <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
      <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
      <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">        
      <link rel='stylesheet' href='styles.css' type='text/css'>    
      <script src='javascript.js'></script>
_INIT;

   require_once 'functions.php';
   $userstr = 'BOUTIQUE MONSE';
   
echo <<<_MAIN
      <title>Boutique Monse: $userstr</title>
   </head>
   <body >
        <nav class="navbar navbar-light" style="background-color: rgb(219, 60, 113)">
            <div class="w-100 p-3" style="background-color: rgb(219, 60, 113)">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="home.php">Home
                        <a data-role='button' data-inline='true' data-icon='action'
                            data-transition="slide" href='home.php'>
                        </a> 
                    </a>    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent"  >
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="Information.php">Informacion<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="messages.php">Contactanos</a>
                                <a data-role='button' data-inline='true' data-icon='mail'
                                    data-transition="slide" href='messages.php'>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="social.php">Redes Sociales</a>
                                <a data-role='button' data-inline='true' data-icon='mail'
                                    data-transition="slide" href='social.php'>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dresses.php">Vestidos</a>
                                <a data-role='button' data-inline='true' data-icon='mail'
                                    data-transition="slide" href='dresses.php'>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>    
        </nav>

        <div data-role="page">
            <div data-role="header">
                <div class="centro">
                    <h3 style= "text-align:center">$userstr
                        <img id= "logo3" src="logo3.jpg" width="200px" height="200px">
                    </h3>    
                </div>
            </div>
            <div data-role='content'>

                     
_MAIN;
?>