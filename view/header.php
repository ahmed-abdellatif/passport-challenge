<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Passport Full Stack Programming Challenge</title>

  <!-- CSS  -->

  <!--Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Materialize CSS -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--Font Awesome CDN  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">  <!--Materialize Custom Stylesheet -->
  <link href="../dist/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--JQuery -->
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <!--TreeJS StyleSheet -->
  <link rel="stylesheet" href="dist/style.min.css" />
  <!--Lato -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <!-- Open Sans-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!-- Roboto-->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!--JSTree JS -->
  <script src="dist/jstree.min.js"></script>

<link href="dist/hamburger.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet">


  <style>

    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      -webkit-text-size-adjust: 100%;
      -webkit-overflow-scrolling: touch;
      -webkit-font-smoothing: antialiased !important;
    }
    .material-icons{
      vertical-align: middle;
      position: relative;
      margin: 0 auto;
      top:-3px;
    }

    main {
      flex: 1 0 auto;
    }

    #container { min-width:320px; margin:0px auto 0 auto; background:white; border-radius:0px; padding:0px; overflow:hidden; }
    #tree { float:left; margin:0 auto; min-width:319px; border-right:5px solid silver; overflow:auto; padding:0px 0;  -webkit-text-size-adjust: 100%;-webkit-overflow-scrolling: touch;-webkit-font-smoothing: antialiased !important;
 }
    #data { margin-left:320px; }
    #data textarea { margin:0 auto; padding:0; height:100%; width:100%; border:0; background:#80deea; display:block; line-height:38px; resize:none; }
    #data, #code { font: normal normal normal 17px/28px 'Consolas', monospace !important; }

    #tree .folder { background:url('./file_sprite.png') right bottom no-repeat;max-width:50%; }
    #tree .file { background:url('./file_sprite.png') 0 0 no-repeat; max-width:50%;}
    #tree .file-pdf { background-position: -32px 0 }
    #tree .file-as { background-position: -36px 0 }
    #tree .file-c { background-position: -72px -0px }
    #tree .file-iso { background-position: -108px -0px }
    #tree .file-htm, #tree .file-html, #tree .file-xml, #tree .file-xsl { background-position: -126px -0px }
    #tree .file-cf { background-position: -162px -0px }
    #tree .file-cpp { background-position: -216px -0px }
    #tree .file-cs { background-position: -236px -0px }
    #tree .file-sql { background-position: -272px -0px }
    #tree .file-xls, #tree .file-xlsx { background-position: -362px -0px }
    #tree .file-h { background-position: -488px -0px }
    #tree .file-crt, #tree .file-pem, #tree .file-cer { background-position: -452px -18px }
    #tree .file-php { background-position: -108px -18px }
    #tree .file-jpg, #tree .file-jpeg, #tree .file-png, #tree .file-gif, #tree .file-bmp { background-position: -126px -18px }
    #tree .file-ppt, #tree .file-pptx { background-position: -144px -18px }
    #tree .file-rb { background-position: -180px -18px }
    #tree .file-text, #tree .file-txt, #tree .file-md, #tree .file-log, #tree .file-htaccess { background-position: -254px -18px }
    #tree .file-doc, #tree .file-docx { background-position: -362px -18px }
    #tree .file-zip, #tree .file-gz, #tree .file-tar, #tree .file-rar { background-position: -416px -18px }
    #tree .file-js { background-position: -434px -18px }
    #tree .file-css { background-position: -144px -0px }
    #tree .file-fla { background-position: -398px -0px }
    .coloroquial {
      color:#313131;
      font-size:45px;
      font-weight: bold;
      -webkit-animation:colorchange 20s infinite alternate;
      -webkit-text-size-adjust: 100%;
      -webkit-overflow-scrolling: touch;
      -webkit-font-smoothing: antialiased !important;

    }

    @-webkit-keyframes colorchange {
      0% {
        color: rgba(41,98,255,.5);
      }

      10% {

        color: #8e44ad;
      }

      20% {

        color: #1abc9c;
      }

      30% {

        color: #d35400;
      }

      40% {

        color: blue;
      }

      50% {

        color: #34495e;
      }

      60% {

        color: blue;
      }

      70% {

        color: #2980b9;
      }
      80% {

        color: #f1c40f;
      }

      90% {

        color: #2980b9;
      }

      100% {

        color: pink;
      }
    }

  </style>
</head>
<body>
    <div class="navbar-fixed">
    <nav role="navigation" style="background:rgba(1,87,155,.8)!important;">
      <a href="#" data-target="slide-out" class="sidenav-trigger">
    <button class="hamburger hamburger--emphatic" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
 </a>
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo center">Passport Inc</a>
<!--
********************************************************************************************************************************************
*  Top Nav
********************************************************************************************************************************************
-->
          <ul class="right hide-on-med-and-down">
          <li><a href="index.php"><i class="material-icons">home</i></a></li>
          <li><a href="index.php"><i class="material-icons">dns</i></a></li>
          <li><a href="index.php"><i class="material-icons">share</i></a></li>
        </ul>
<!--
********************************************************************************************************************************************
*  Mobile Nav
********************************************************************************************************************************************
-->        <ul id="slide-out" class="sidenav" style="background:rgba(29,233,182,.7)">
          <li style="text-align: center;"><a href="index.php"><i class="material-icons">home</i></a></li>
          <li style="text-align: center;"><a href="index.php"><i class="material-icons">dns</i></a></li>
          <li style="text-align: center;"><a href="index.php"><i class="material-icons">share</i></a></li>
        </ul>



      </div>
    </nav>
  </div>
<!--
********************************************************************************************************************************************
*  Break : New Section
********************************************************************************************************************************************
-->

<div class="row">
<div class="col s12">

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <div class ="animated fadeIn delay-450s">
      <h1 class="header center coloroquial orange-text">Passport Tree Challenge</h1>
    </div>

      <div class="row center">
        <div class="container center-align animated tada delay-350s">
          <img class="materialboxed" src="view/button-large.png" style="max-width:25%;margin:0 auto;">
        <h5 class="header col s12 light center-align animated fadeIn delay-750s">Responsive Tree using PHP, AJAX, JS, MySQL</h5>
      </div>
    </div>

      <div class="row center">
        <a href="index.php#passport" id="download-button" class="btn-large waves-effect waves-light orange pulse">Tree Challenge <i class="fas fa-tree"></i></a>
      </div>
      <br><br>
    </div>
  </div>
  </div>


<script>
  var $hamburger = $(".hamburger");
  $( ".hamburger" ).on({
    click: function() {
      $( this ).toggleClass( "is-active" );
    }, mouseenter: function() {
      $( this ).addClass( "open" );
    }, mouseleave: function() {
      $( this ).removeClass( "is-active" );
    }
  });

  </script>
  <script>

  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
       </script>
