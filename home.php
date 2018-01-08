<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Homepage</title>
<link rel="icon" href="php10.png" type="image/png">
<link rel="shortcut icon" href="php10.png" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="contactform/contactform.js"></script>
<script>
$(document).ready(function(){
    $("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $(".abc").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
    });
});
</script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<style>
.abc {
	padding-bottom:60px;
}
img{

		height:150px;
}
.img{

		height:150px;
}

</style>
</head>
<body>

<?php include 'header.php' ?>


<section class="main-section" id="howitworks"><!--main-section-start-->
	<div class="container">
	<div>
	<form id="live-search" action="" class="styled" method="post">
    	<h2 style="text-align:left; width:50%; float:left;">Choose your problem</h2>
		<form id="live-search" action="" class="styled" method="post">
    <fieldset>
        <input type="text" class="form-control text-input" id="filter" value="" placeholder="Filter your based on your problem" style="float:right, width:20%"/>
        <span id="filter-count"></span>
    </fieldset>
</form>

		
	</div>
    	<h6><br><br></h6>
		<form action="online.php">
				<div class="row">
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="headaches.jpg" class="img">
						<p>Head aches and Migrane Problems</p>
						
					</div>			
							
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="stomachpain.jpg" class="img">
						<p>Abdominal Pain</p>
						
					</div>
						 
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="dental.jpg" class="img">
						<p>Oral and Dental Problems</p>
						
					</div>

					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="obesity.jpg" class="img">
						<p>Obesity and Overweight</p>
						
					</div>
					
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="joints.jpg" class="img">
						<p>Joint pains and arthritis</p>
						
					</div>
					
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="fractures.jpg" class="img">
						<p>Fractures and Ligament tears</p>
						
					</div>
					
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="burns.jpg" class="img">
						<p>Burns </p>
						
					</div>			
							
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="skin.jpg" class="img">
						<p>Skin problems</p>
						
					</div>
						 
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="pregnancy.jpg" class="img">
						<p>Pregnancy and gynecology</p>
						
					</div>

					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="heart.jpg" class="img">
						<p>Heart and chest problems</p>
						
					</div>
					
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="lungs.jpg" class="img">
						<p>Respiratory diseases</p>
						
					</div>
					<div class="col-lg-2 col-sm-4 wow fadeInLeft delay-05s abc">
					<input type="image" src="eye.jpg" class="img">
						<p>Eye problems</p>	
					</div>
				</div>
			</form>
            </div>
        </div>
	</div>
</section><!--main-section-end-->



<?php include 'footer.php'; ?>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>