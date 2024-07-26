<!DOCTYPE HTML>
<html lang = "eng">
<html>
<!--
#060c31 - dark blue
#377ee0 - light blue

-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="CSS/style.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link href="fontawesome-free-6.1.2-web/css/all.css" rel="stylesheet">
  <link type="image/png" rel="shortcut icon" href="IMG/head/logob.png">
  <title>Neuromatters</title>
</head>
<body>
  <div id="headbar" class="head backgroundlightwhite">
    <div class="right grid">
      <img class="img-65 img" src="IMG/head/logob.png">
    </div>
    <text class="headingtitle-black toppadding bottompadding centervertically"><span>N</span>euromatters</text>
    <div class="grid buttonlight" id="menu">
      <i id="menubars" class="fa-solid fa-bars fa-2x center"></i>
    </div>
  </div>
  <script type="text/javascript" src="JAVASCRIPT/main.js"></script>
  <div id="maingrid" class="maingrid">
    <div id="menuenclosure" class="grid none background-light">
      <div class="right grid">
        <div class="grid" id="nomenu">
          <i class="fa-solid fa-x fa-2x colorwhite centervertically sidetosidepadding toppadding textdarkho"></i>
        </div>
      </div>
      <div class="grid colorwhite">
        <a class="linkstyleremove" href="index.php">
          <div class="menuitem textdarkho">
            <div class="grid right">
              <i class="fa-solid fa-house centervertically"></i>
            </div>
            <div class="subtitle">Home</div>
          </div>
        </a>
        <br>
        <a class="linkstyleremove" href="articles.php">
          <div class="menuitem textdarkho">
            <div class="grid right">
              <i class="fa-solid fa-newspaper centervertically"></i>
            </div>
            <div class="subtitle">Articles</div>
          </div>
        </a>
        <br>
        <a class="linkstyleremove" href="projects.php">
          <div class="menuitem textdarkho">
            <div class="grid right">
              <i class="fa-solid fa-diagram-project centervertically textdarkho"></i>
            </div>
            <div class="subtitle">Projects</div>
          </div>
        </a>
        <br>
        <a class="linkstyleremove" href="contact.php">
          <div class="menuitem textdarkho">
            <div class="grid right">
              <i class="fa-solid fa-address-card centervertically"></i>
            </div>
            <div class="subtitle">Contact Us</div>
          </div>
        </a>
        <div id="filler" class="filler"></div>
      </div>
    </div>
    <div class="grid height0">
