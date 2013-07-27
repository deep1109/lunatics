<!DOCTYPE html>
<html>
<head>
	<title>Member of Parliament</title>
	<meta charset="utf-8" />
	<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/default.css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" />
	<link rel="stylesheet" href="css/fixed-navigation.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/default.js"></script>
	<script type="text/javascript"
	    src="https://maps.google.com/maps/api/js?sensor=false">
		<script type="text/javascript" src="./js/jquery-1.4.2.js"></script>
<script type='text/javascript' src="./js/jquery.autocomplete.js"></script>

<link rel="stylesheet" href="styles/bootstrap-responsive.css" media="screen" />
<link rel="stylesheet" href="styles/bootstrap.css" media="screen" /><!--added for bootstrap-->
<link rel="stylesheet" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	</script>
	<script type="text/javascript">
	  function initialize() {
	    var latlng = new google.maps.LatLng(29.0167,77.3833)
	    var myOptions = {
	      zoom: 8,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map(document.getElementById("map_canvas"),
	        myOptions);
	  }

	</script>
	[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]
</head>
<body onload="initialize()">

	<div id="pagewidth">
	
		<header id="header">
			<div class="center">
		
				<nav id="mainNav">
					
					<ul>
						<li class="active"><a href="#pagewidth"><span>About MP</span></a></li>
						
						<li><a href="#Map"><span>Map your MP</span></a></li>
						
						<li><a href="#AboutUs"><span>About Us</span></a></li>
						<li><a href="#contactUs"><span>Feedback</span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div id="content1">
			<section class="row">
			  
				<div class="center"><br><br>
					<h1><u>Know Your MP</u></h1>
				<div class="columns">
						<div class="half">
						
						
						<script type="text/javascript">
$().ready(function() {
	$("#name").autocomplete("autoCompleteMain1.php", {
		width: 450,
		matchContains: true,
		selectFirst: false
	});
});
</script>

<script>
	   $(document).ready(function(e) {
	   	//$('#result').hide();
		   $('#done').click(function(e) {
			
            var alpha=$('#name').val();
			//var name=$('#name').val();
			if(alpha!="")
			{
				
			var cl=alpha;
			$('#result').show();
		$.get("myprocess2.php?cl="+cl, function(data){
      $('#display').html(data);
      
    });
    	//$(document).scrollTo('#result', {duration:1000});
			}
			
			else
			  alert("Please select Name");
        });

    });
	   </script>

<body>
<div id="content">
	
		<p>
		
			
			<input type="text" name="name" id="name" placeholder="Search by Name."/>
		</p>
		<input type="submit" id="done" value="Submit" />
		
</div>
</body>
					


					
					</div>
					


					<div class="half">
					



		
					
						<script type="text/javascript">
$().ready(function() {
	$("#state").autocomplete("autoCompleteMain.php", {
		width: 450,
		matchContains: true,
		selectFirst: false
	});
});
</script>

<script>
	   $(document).ready(function(e) {
	   	//$('#result').hide();
		   $('#done2').click(function(e) {
			
            var alpha=$('#state').val();
			//var name=$('#name').val();
			if(alpha!="")
			{
				
			var cl=alpha;
			$('#result').show();
		$.get("myprocess22.php?cl="+cl, function(data){
      $('#display').html(data);
      
    });
    	//$(document).scrollTo('#result', {duration:1000});
			}
			
			else
			  alert("Please select Constituency");
        });

    });
	   </script>

<body>
<div id="content">
	
		<p>
		
		
			<input type="text" name="state" id="state" placeholder="Search by Constituency."/>
		</p>
		<input type="submit" id="done2" value="Submit" />
		
</div>
</body>
					


					
					</div>
					</div>
				</div>
				
				
				
				
				
				
				
				
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<section id="result" class="row">
				<div class="center">
					
					
					<div id="display"></div>
				</div>
			
			
			
			
			
			
	
</section>



				
			
			
			
			<section id="Map" class="row grey">
				<div class="center">
				  
				<p><font color="black"><font size="6"><u>Map Your MP</u></font></font></p><br><br><br>
			</div>

<div class="left">
 <div class="center">
<style type="text/css">



        margin-top: 200px;
		margin-right: 0px;
		margin-bottom: 10px;
		margin-left: 70px;
		
		
		
		
#box0{
color:white;
height: 45px;
width: 90px;
background-color:black; /* the critical component */
}

#box1{
color:black;
height: 20px;
width: 70px;
background-color:lightgreen; /* the critical component */
}
	
	#box2 {
color:black;
height: 20px;
width: 70px;
background-color:pink; /* the critical component */
}

#box3 {
color:black;
height: 20px;
width: 70px;
background-color:DarkSlateBlue; /* the critical component */
}
#box4 {
color:black;
height: 20px;
width: 70px;
background-color:#CC3300; /* the critical component */
}
#box5 {
color:black;
height: 20px;
width: 70px;
background-color:#FFFF66; /* the critical component */
}
	.container {
      width:1330px;
    }
    .left {
      width:180px;
      float:left;
    }
    .right {
      width:1150px;
      float:right;
    }
</style>
		
		
<body>		
		
		
		
<br><br><br><br><br><br><br><br><br><br>
<div id="box0">
<p><u><font size="4">Attendence Range</font></u></p>
</div>
<br>
<div id="box1">
0%-20%
</div><br>
<div id="box2">
21%-40%
</div><br>
<div id="box3">
41%-60%
</div><br>
<div id="box4">
61%-80%
</div><br>
<div id="box5">
81%-100%
</div>
</div>
</div>
<div class="right">
			<iframe width="1000" height="600" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col1+from+1KvhbsWCQ6W-OeekAyHf5k2mHihQrmiNLDkQeshs&amp;viz=MAP&amp;h=false&amp;lat=21.70861325419523&amp;lng=84.45253984687498&amp;t=1&amp;z=4&amp;l=col1&amp;y=2&amp;tmplt=2"></iframe>
</div>
</body>						
			
									
									
			</section>
			
			
			
			
			
			
			<section id="AboutUs" class="row">
			
				
				<h2><font color="black"><u>About Us</u></font></h2>
					<div class="center">
				<p align=""><font color="black">In our country many people do not know about their selected MP and what they are doing in the parliament. So, in order to provide some basic details and to create awareness about their MP, this web application "KNOW YOUR MP". </p>
                 <p align=""><font color="black">This application provide details of MPs about MPs personal information and data about their attendance in the parliament, which gives a basic idea to the people to know their MP.</p>	
                	<p align=""><font color="black">It is designed to be used by common people as well as parliament member. </p>			 <br>
				<h2><font color="black"><u></u></font></h2>	
				</div>
			</section>
			<section id="contactUs" class="row grey">s 
				<div class="center">
					<h1><u>Feedback</u></h1>
					
					<div class="columns">
						<div class="half">
							<form method="post" action="contact.php" class="form contact-form">
								<fieldset>
									<h2>Feedback form</h2>
									<div id="message"></div>
									<div class="formRow">
										<div class="textField"><input type="text" name="name" id="name" placeholder="Your name ..." required="true" /></div>	
									</div>
									<div class="formRow">
										<div class="textField"><input type="email" name="email" id="email" placeholder="Your Email ..." required="true"/></div>
									</div>
									<div class="formRow">
										<div class="textField"><textarea cols="20" name="comment" id="comment" rows="4" placeholder="Your Comment ..." required="true"></textarea></div>
									</div>
									<input type="submit" value="submit">

								</fieldset>
							</form>
						</div>
						<div class="half">
							<h2>How to find us</h2>
							<div id="map">
								<div class="imgHolder"> <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Sansad+Bhavan,+New+Delhi,+Delhi&amp;aq=0&amp;oq=sansad+bhavan+new+delhi&amp;sll=20.983588,82.752628&amp;sspn=45.458666,86.572266&amp;ie=UTF8&amp;hq=Sansad+Bhavan,+New+Delhi,+Delhi&amp;ll=28.617172,77.207798&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Sansad+Bhavan,+New+Delhi,+Delhi&amp;aq=0&amp;oq=sansad+bhavan+new+delhi&amp;sll=20.983588,82.752628&amp;sspn=45.458666,86.572266&amp;ie=UTF8&amp;hq=Sansad+Bhavan,+New+Delhi,+Delhi&amp;ll=28.617172,77.207798&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer id="footer">
			<div class="center">
				<span class="copy"></a></span>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspfollow us on <a href="https://twitter.com/#!/webcodebuilder"></a>
			<a href="http://facebook.com" target="_blank">
               <img src="x.png" alt="Smiley face" width="50" height="50"></a>
			<a href="http://twitter.com" target="_blank">
               <img src="y.png" alt="Smiley face" width="50" height="50"></a>
			</div>
			
		</footer>
	</div>
</body>
</html>