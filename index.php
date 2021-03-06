 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
<?php
	$error = false;

include 'modules/currentvalues.php';
include 'modules/converts.php';

$dollarprice = floatval($dollarprice);
$steemprice = floatval($steemprice);
$btcdollar = floatval($btcdollar);
?>

<html>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SteemCharts</title>
	<link href="style.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="js/bootstrap.min" rel="stylesheet">
	<link href="css/bootstrap.min" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<body>

<header>
  
 <!--Load the AJAX API-->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php">SteemCharts</a>
    </div>

   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a data-toggle="tab" href="/index.php">Home</a></li>
        <li><a data-toggle="tab" href="/author.php">Author Analysis</a></li>
        <li><a data-toggle="tab" href="/reward.php">Reward Analysis</a></li>
        <li><a data-toggle="tab" href="/tag.php">Tag Analysis</a></li>
       </ul>
    </div>
  </div>
</nav>

</header>
<div class="alert alert-info">
    Please consider <a href="https://steemconnect.com/sign/transfer?to=onurkahveci&amount=1%20SBD&memo=DonationForSteemCharts" target="_blank">donating</a> to help with the server costs.
</div>
<center>
<nav class="navbar navbar-light bg-faded">
  <form  action="author.php" method="GET" class="form-inline">
    <input name="author" class="form-control mr-sm-2 margin-top-15" type="text" placeholder="Author Analysis" >	
    <button class="btn btn-outline-success my-2 my-sm-0 user-submit-button" type="submit">Analyse</button>
  </form>
</nav>

<nav class="navbar navbar-light bg-faded">
  <form  action="reward.php" method="GET" class="form-inline">
    <input name="author" class="form-control mr-sm-2 margin-top-15" type="text" placeholder="Reward Analysis" >	
    <button class="btn btn-outline-success my-2 my-sm-0 user-submit-button" type="submit">Analyse</button>
  </form>
</nav>

<nav class="navbar navbar-light bg-faded">
  <form  action="tag.php" method="GET" class="form-inline">
    <input name="tag" class="form-control mr-sm-2 margin-top-15" type="text" placeholder="Tag Analysis" >	
    <button class="btn btn-outline-success my-2 my-sm-0 user-submit-button" type="submit">Analyse</button>
  </form>
</nav>

</center>
<footer></br></br><center>current version: 0.1.0 beta, by <a href="https://utopian.io/@onurkahveci/" target="_blank">@onurkahveci</a></center></footer>
</body>
</html>
