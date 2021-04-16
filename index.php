<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony | Home :: 
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--javacri function to handle the bars-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
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
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="banner">
 <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 0px !important;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img  src="images/banner1.jpg">
      <div class="carousel-caption">
         <div class="container">
         	
              <div class="banner_info">
                 <h3>Every Relation Builds On Trust</h3>
                 <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
             </div>
         </div>
      </div>
    </div>

    <div class="item">
      <img src="images/banner2.jpg" alt="Chicago">
       <div class="carousel-caption">
         <div class="container">
              <div class="banner_info">
                 <h3>Every Relation Builds On Trust</h3>
                 <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
             </div>
         </div>
      </div>
    </div>

    <div class="item">
      <img src="images/tem1.jpg" alt="New York">
       <div class="carousel-caption">
         <div class="container">
              <div class="banner_info">
                 <h3>Every Relation Builds On Trust</h3>
                 <a href="register.php" class="hvr-shutter-out-horizontal">Create your Profile</a>
             </div>
         </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
</div> 
<div class="grid_1 " style="margin-top:0 !important;">
      <div class="container">

      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <ul id="flexiselDemo3">
        <?php
        //design to make the content of the featured prodile
        	$sql="SELECT * FROM customer";
        	$result=mysqlexec($sql);
        	if($result){
        		//fetching the data from the database
        		//to store the result and store as it as result
        		while($row=mysqli_fetch_assoc($result)){
        			$name=$row['firstname'] . " " . $row['lastname'];
        			$profileid=$row['cust_id'];
        			$age=$row['age'];
        			$place=$row['state'] . "," . $row['district'];
        			$job=$row['occupation'];

        				//getting profilepic
        				$pic1='';
						$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
						$result2 = mysqlexec($sql2);
						if($result2){
							$row2=mysqli_fetch_array($result2);
							$pic1=$row2['pic1'];
						}
						//got profilepic
						//
					//Printing the html
					echo "<li><div class=\"col_1\"><a href=\"view_profile.php?id={$profileid}\">";
					echo "<img src=\"profile/{$profileid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"/>";
					echo "<div class=\"layer m_1 hidden-link hover-animation delay1 fade-in\">";
					echo "<div class=\"center-middle\">About {$name}</div>";
					echo "</div>";
					echo "<h3><span class=\"m_3\">Profile ID : {$profileid}</span><br>{$age}, {$place}<br>{$job}</h3></a></div>";
					echo "</li>";
				
        		}
        	}

        ?>
          </ul>
          <!--script for the image slides and show some animation-->
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 2000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<div class="grid_2 bg1" style="background-color: #EEEEEE";>
	<div class="container">
		<h2 style="color:white;">Success Stories</h2>
   
    
    







       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <div class="row_1">
	     <div class="col-md-8 suceess_story">
	         <ul> 
			   <li>
				  	<div class="suceess_story-date">
						<span  style="color:white;" class="entry-1">FEB, 2021</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/7.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a style="color: white;" href="#">Lorem & Ipsum</a></h4>				        	
				        	<p style="color:white;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Feb20, 2021</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/8.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a style="color: white;" href="#">Lorem & Ipsum</a></h4>				        	
				        	<p style="color:white;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.<a href="#">More...</a></p>
				        </div>
				    </div>
				</li>
	            
	           
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Feb20, 2021</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/12.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a  style="color:white;" href="#">Lorem & Ipsum</a></h4>				        	
				        	<p style="color:white;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Feb20, 2021</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/13.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	<h4><a  style="color:white;" href="#">Lorem & Ipsum</a></h4>				        	
				        	<p style="color: white;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
				        </div>
				    </div>
				</li>
	        </ul>
	    </div>
	    <div class="col-md-4 row_1-right">
	      <h3>News & Events</h3>
	        <div class="box_1">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/14.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2016-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>
	        <div class="box_1">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/15.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2014-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>
	        <div class="box_2">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/1.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2014-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>
	        
	        <!--add the content to the side-->
	        <div class="religion">
              
              
	        </div>
	        <div class="religion">
               
			
              
	        </div>
	        <div class="religion">
                
              
	        </div>
	     </div>
	     <div class="clearfix"> </div>
	   </div> 
	  </div>
    </div>
    <!--Message for the guest container-->
    <div class="bg" style="margin-top: 0px !important;">
		<div class="container"> 
			<h3>Guest Messages</h3>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
            </div>
            <!--left container-->
            <div class="col-sm-6">
            	<div class="bg_left">
            		<h4>But I must explain</h4>
            		<h5>Friend of Bride</h5>
            		<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            	   <ul class="team-socials">
            	   	<!--add the social link here-->
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
            	</div>
            </div>
            <!--Right container-->
            <div class="col-sm-6">
            	<div class="bg_left">
            		<h4>But I must explain</h4>
            		<h5>Friend of Groom</h5>
            		<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            	   <ul class="team-socials">
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
            	</div>
            </div>
            <div class="clearfix"> </div>
		</div>
	</div>
	
    <?php include_once 'footer.php'; ?>