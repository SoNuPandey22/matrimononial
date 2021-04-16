<?php include_once("../includes/basic_includes.php");?>
<?php include_once("../functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony | Home :: 
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--javacri function to handle the bars-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<style>
	.item img{
		width: 100%!important;
		max-height : 79vh !important;
	}
	li .col_1 {
		margin-left: 20px;
		margin-right: 20px;

	}
	li .col_1 img {
		height: 17vw;
		width:23vw !important;
	}

	.flip-card {
	  background-color: transparent;
	  width: 300px;
	  height: 300px;
	  perspective: 1000px;
	}

	.flip-card-inner {
	  position: relative;
	  width: 100%;
	  height: 100%;
	  text-align: center;
	  transition: transform 0.6s;
	  transform-style: preserve-3d;
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}

	.flip-card:hover .flip-card-inner {
	  transform: rotateY(180deg);
	}

	.flip-card-front, .flip-card-back {
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  -webkit-backface-visibility: hidden;
	  backface-visibility: hidden;
	}

	.flip-card-front {
	  background-color: #bbb;
	  color: black;
	}

	.flip-card-back {
	  background-color: #2980b9;
	  color: white;
	  transform: rotateY(180deg);
	}
	.flip-card+.container{
		 float:left;
         position: relative;
         width: 30%;
	}
	.suceess_story{
		color: white !important;
	}


</style>
<script>
	//jquery function
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once './navigation.php'?>
<!-- ============================  Navigation End ============================ -->
<div class="container">
	<h2 style="text-align: center; margin-top: 3em;">Admin Pannel</h2>
	<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Accept</i></th>
      <th scope="co">Reject</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td href="profile.php?id: view profile">NO</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>NO</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>NO</td>
    </tr>
  </tbody>
</table>

</div>
 

    <?php 
    include_once './messaage.php';


    include_once '../footer.php'; ?>