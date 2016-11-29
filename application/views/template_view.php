<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="<?= base_url()?>assets/bootstrap-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

	<link href="<?= base_url()?>assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/bootstrap-datepicker/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	
	<link href="<?= base_url()?>assets/css/style-common.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/css/style-common-low.css" rel="stylesheet" media="only screen and (max-width: 500px)">
	<link href="<?= base_url()?>assets/css/style-common-medium.css" rel="stylesheet" media="only screen and (min-width: 501px) and (max-width: 1000px)">
	<link href="<?= base_url()?>assets/css/style-common-big.css" rel="stylesheet" media="only screen and (min-width: 1001px)">

</head>

<body>

<?php include "nav.php";?>

<div class="container">

	<?= $content ?>


	<?php include "footer.php";?>
</div>



</body>
</html>