<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Fortune Cookie</title>
<link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
<link media="all" href="/style.css" rel="stylesheet"/>
<style>
  body {
    font-family: Pompiere, cursive;
    font-size: 5vw;
  }
</style>
</head>
<body>
<div id="page">
<div id="content">
<?php include('./fortune.inc'); ?>
<blockquote class="fadeInUp">
<?php print fortune('-s');?>
</blockquote>
</div></div>
</body>
</html>
