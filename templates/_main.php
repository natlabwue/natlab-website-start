<?php namespace ProcessWire;
// _main.php template file, called after a page’s template file	
$home = pages()->get('/'); // homepage
$siteTitle = 'Regular';	
$siteTagline = $home->summary; 
	
?><!DOCTYPE html>
<html lang='de'>
	<head id='html-head'>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title id='html-title'><?=page()->title?></title>
		<link rel="stylesheet" href="<?=urls()->templates?>styles/global.css">
		<link rel="stylesheet" href="<?=urls()->templates?>styles/elements.css">
	</head>
	<body id='html-body'>
	<div class="main-container">
      <div class="main-logo">
        <img src="<?=urls()->templates?>styles/images/logo-natlab.png">
      </div>
        <ul class="main-nav">
          <?php foreach(pages()->get("/")->children as $child) {
		        $active = (page() == $child) ? 'active' : '';
            print '<li class="'.$active.'"><a href="'.$child->url.'">'.$child->title.'</a></li>';
          } ?>
        </ul>
    </div>
    <div id="jumbo-header"></div>
    <div class="main-container">
        <div class="content-sidebar-wrapper">
          <div class="sidebar">
            <h1 class="arrow-down">Kontakt</h1>
            <p>Naturwissenschaftliches Labor für Schüler am FKG e. V.<br>
            Friedrich-Koenig-Gymnasium<br>
            Friedrichstraße 22<br>
            97082 Würzburg</p>
            <h1 class="arrow-down">Aktuelle<br>Termine</h1>
            Hier befinden sich die Termine.
          </div>
          <div class="content" id="content-body"></div>
        </div>
    </div>

    <div class="main-container">
      <div class="footer-top"></div>
      <div class="footer">
      
      </div>
    </div>
	</body>
</html>

