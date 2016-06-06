﻿<?php
if(!isset($_GET['p'])) $_GET['p'] = 'home';
switch ($_GET['p'])
{
						
	case 'home':
		$p = 'pg/home.php';
		break;
	case 'servidores':
		$p = 'pg/servidores.php';
		break;
    case 'dev':
		$p = 'pg/dev.php';
		break;
    case 'motos':
		$p = 'pg/motos.php';
		break;
    case 'about':
		$p = 'pg/about.php';
		break;
    case 'contato':
		$p = 'pg/contato.php';
		break;
	default:
		$p = 'pg/home.php';
		break;
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- ==========================
    	Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ==========================
    	Title 
    =========================== -->
    <title>Undead Brasil Servidores</title>
        
    <!-- ==========================
    	Fonts 
    =========================== -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- ==========================
    	CSS 
    =========================== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="assets/css/creative-brands.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery.vegas.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
    
    <!-- ==========================
    	JS 
    =========================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
    <h1>progaming</h1>
	
    <!-- ==========================
    	HEADER - START 
    =========================== -->
	<header class="navbar navbar-default navbar-fixed-top">
    	<div class="container">
            <div class="navbar-header">
            	<a href="index.html" class="navbar-brand visible-xs">Undead Brasil</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
                	<li><a href="index.php">Home</a></li>
                    <li><a href="index.php?p=servidores">Servidores</a></li>
                    <li><a href="index.php?p=dev">Desenvolvimento</a></li>
                    <li><a href="gallery.html">Equipe</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parceiros</a>
                        <ul class="dropdown-menu">
                        	<li><a href="#"><i class="fa fa-plus"></i>ESL</a></li>
                            <li><a href="#"><i class="fa fa-plus"></i>PAIN</a></li>
                            <li><a href="#"><i class="fa fa-plus"></i>KABUUM</a></li>
                            <li><a href="#"><i class="fa fa-plus"></i>KEYD</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/forum" target="_blank">Forum</a> 
                  </li>
              </ul>
                <div class="pull-right navbar-buttons hidden-xs">
                	<a href="#" class="btn btn-primary">Register</a>
                    <a href="#" class="btn btn-inverse">Login</a>
                    <a class="navbar-icon show2" id="open-search"><i class="fa fa-search"></i></a>
                    <a class="navbar-icon hidden" id="close-search"><i class="fa fa-times"></i></a>
                    <div class="hidden" id="navbar-search-form">
                        <form role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" value="" name="navbar-search" id="navbar-search" class="form-control" placeholder="Search">
                                    <span class="input-group-btn"><button class="btn btn-primary" type="submit" id="navbar-search-submit"><i class="fa fa-search"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
          </div>
      </div>
    </header>
    <!-- ==========================
    	HEADER - END 
    =========================== -->  
    
    <!-- ==========================
    	TITLE - START 
    =========================== -->
    <div class="container hidden-xs">
    	<div class="header-title">
        	<div class="pull-left">
        		<h2><a href="index.html"><span class="text-primary">UNDEAD </span>BRASIL</a></h2>
                <p>Servidores</p>
            </div>
        </div>
    </div>
    <!-- ==========================
    	TITLE - END 
    =========================== -->
    
    <!-- ==========================
    	JUMBOTRON - START 
    =========================== -->
    <div class="container">
    	<div class="jumbotron">
        	<div class="jumbotron-panel">
            	<div class="panel panel-primary collapse-horizontal">
                    <a data-toggle="collapse" class="btn btn-primary collapsed" data-target="#toggle-collapse">Lista de Servidores <i class="fa fa-caret-down"></i></a>
                    <div class="jumbotron-brands">
                    	<ul class="brands brands-sm brands-inline brands-circle">
                    		<li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-twitch"></i></a></li>
                            <li><a href=""><i class="fa fa-steam"></i></a></li>
                        </ul>
                    </div>
                    <div id="toggle-collapse" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table table-bordered table-header">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>IP Address</th>
                                        <th>Map</th>
                                        <th>Players</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="assets/icons/csgo.jpg" alt=""></td>
                                        <td>[EU] CS:GO #1 | pixelized.cz</td>
                                        <td>123.221.45.12:29999</td>
                                        <td>de_dust2</td>
                                        <td>18/18</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/icons/csgo.jpg" alt=""></td>
                                        <td>[CZ/SK] CS:GO Public | pixelized.cz</td>
                                        <td>45.184.170.200:27851</td>
                                        <td>de_inferno</td>
                                        <td>24/32</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/icons/lol.png" alt=""></td>
                                        <td>[EU] League of Legends</td>
                                        <td>50.243.180.246:25429</td>
                                        <td>normal</td>
                                        <td>10/30</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/icons/gta.png" alt=""></td>
                                        <td>[EU] GTA Server</td>
                                        <td>132.24.45.83:27852</td>
                                        <td>classic</td>
                                        <td>22/60</td>
                                    </tr>                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        	<div id="jumbotron-slider">
            	
                <!-- JUMBOTRON ITEM - START -->       
                <div class="item">
                	
                        <div class="overlay-wrapper">
                            <img src="assets/images/image_001.jpg" class="img-responsive" alt="">
                            <span class="overlay"></span>
                            <h2>Arma 3<span>Altis Life</span></h2>
                        </div>
                    
                </div>
                <!-- JUMBOTRON ITEM - END -->     
                
                <!-- JUMBOTRON ITEM - START -->     
                <div class="item">
                	<a href="single.html">
                        <div class="overlay-wrapper">
                            <img src="assets/images/image_002.jpg" class="img-responsive" alt="">
                            <span class="overlay"></span>
                            <h2>Arma 2 AO<span>Dayz Epoch | Dayz Origins</span></h2>
                        </div>
                    </a>
                </div>
                <!-- JUMBOTRON ITEM - END -->     
                
                <!-- JUMBOTRON ITEM - START -->     
                <div class="item">
                	<a href="single.html">
                        <div class="overlay-wrapper">
                            <img src="assets/images/image_003.jpg" class="img-responsive" alt="">
                            <span class="overlay"></span>
                            <h2>Arma 3<span>Wastland</span></h2>
                        </div>
                    </a>
                </div>
                <!-- JUMBOTRON ITEM - END -->     
                
                <!-- JUMBOTRON ITEM - START -->     
                <div class="item">
                	<a href="single.html">
                        <div class="overlay-wrapper">
                            <img src="assets/images/image_004.jpg" class="img-responsive" alt="">
                            <span class="overlay"></span>
                            <h2>Ark Survival Evolved<span>Em Breve...</span></h2>
                        </div>
                    </a>
                </div>
                <!-- JUMBOTRON ITEM - END -->     
                
                <!-- JUMBOTRON ITEM - START -->     
                <div class="item">
                	<a href="single.html">
                        <div class="overlay-wrapper">
                            <img src="assets/images/image_005.jpg" class="img-responsive" alt="">
                            <span class="overlay"></span>
                            <h2>DayZ<span>Em Breve...</span></h2>
                        </div>
                    </a>
                </div>
                <!-- JUMBOTRON ITEM - END -->     
                
            </div>
        </div>
    </div>
    <!-- ==========================
    	JUMBOTRON - END 
    =========================== -->
    
    <!-- ==========================
    	CONTENT - START 
    =========================== -->
    <div class="container">
        <section class="content-wrapper">
         <?php include $p; ?>
        </section>
    </div>
    <!-- ==========================
    	CONTENT - END 
    =========================== -->
   
   	<!-- ==========================
    	FOOTER - START 
    =========================== -->
    <div class="container">
    	<div class="footer-boxes">
        	<div class="row">
                        
                <!-- FOOTER BOX - START -->
            	<!--<div class="col-md-4 hidden-xs hidden-sm">
      
                	<div class="box">
                    	<h4>Sobre nós</h4>
                        <p>Conteudo</p>
                    </div>
                    
            	</div>
                <!-- FOOTER BOX - END -->
                
                <!-- FOOTER BOX - START --><!-- FOOTER BOX - END -->
                
                <!-- FOOTER BOX - START --><!-- FOOTER BOX - END -->
                
            </div>
        </div>
    	<footer class="navbar navbar-default">
        	<div class="row">
            	<div class="col-md-6 hidden-xs hidden-sm">
                	<ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?p=servidores">Servidores</a></li>
                        <li><a href="index.php?p=equipe">Equipe</a></li>
                        <li><a href="index.php?p=parceiros">Parceiros</a></li>
                        <li><a href="/forum" target="_blank">Forum</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                	<p class="copyright">© Undead Brasil Servidores 2016 All right reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- ==========================
    	FOOTER - END 
    =========================== -->
   
   	<!-- ==========================
    	JS 
    =========================== -->        
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative-brands.js"></script>
    <script src="assets/js/jquery.vegas.min.js"></script>
    <script src="assets/js/twitterFetcher_min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>