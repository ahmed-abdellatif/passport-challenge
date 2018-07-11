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
  <!--Materialize Custom Stylesheet -->
  <link href="dist/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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

  <style>

    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    #container { min-width:320px; margin:0px auto 0 auto; background:white; border-radius:0px; padding:0px; overflow:hidden; }
    #tree { float:left; min-width:319px; border-right:1px solid silver; overflow:auto; padding:0px 0; }
    #data { margin-left:320px; }
    #data textarea { margin:0; padding:0; height:100%; width:100%; border:0; background:white; display:block; line-height:18px; resize:none; }
    #data, #code { font: normal normal normal 12px/18px 'Consolas', monospace !important; }

    #tree .folder { background:url('./file_sprite.png') right bottom no-repeat; }
    #tree .file { background:url('./file_sprite.png') 0 0 no-repeat; }
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

  </style>
</head>
