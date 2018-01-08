<?php session_start();

 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bitcamp";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Homepage</title>
<link rel="icon" href="php10.png" type="image/png">
<link rel="shortcut icon" href="php10.png" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,500italic,600italic,400italic,300italic,800,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
body {
  background-color:#f2f2f2;
  font-family:'Open Sans', sans-serif;
  font-size:14px;
}
.info {
  position:fixed;
  width:300px;
  top:0px;
  left:0px;
  border:1px solid #e0e0e0;
  background-color:#ffffff;
  -webkit-border-bottom-right-radius: 5px;
-moz-border-radius-bottomright: 5px;
border-bottom-right-radius: 5px;
    -webkit-box-shadow: 0px 1px 5px 0px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    0px 1px 5px 0px rgba(50, 50, 50, 0.75);
box-shadow:         0px 1px 5px 0px rgba(50, 50, 50, 0.75);
}
.info .cover {
  width:100%;
}
.profilePic {
  width:80px;
  height:80px;
  border-radius:100%;
  position:absolute;
  top:130px;
  left:50%;
  margin-left:-40px;
}
.infopadding { height:40px; }
.title { text-align:center; }
.morestuff {
  text-align:center;
  padding:10px;
}
.corin-checkbox {
  visibility: hidden;
}
.corin-checkbox-container {
  position: relative;
  display: inline-block;
}
.corin-checkbox-sub {
  position: absolute;
  top: 0;
  left: 0;

  display: inline-block;
  width: 15px;
  height: 15px;
}

.corin-checkbox-sub.unchecked {
  background: #f2f2f2;
  border:2px solid #808080;
}

.corin-checkbox-sub.checked {
  background: #0585D6;
  content:"\0252";
  border:2px solid #0585D6;
}
hr {
  border:0px;
  height:1.2px;
  width:100%;
  background-color:#C9C9C9;
}
.chatarea {
  position:fixed;
  bottom:0px;
  right:0px;
  margin:0px;
  padding:0px;
}
.chat {
  margin:0px;
  padding:0px;
  width:300px;
  float:right;
  -webkit-border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-topright: 5px;
border-top-left-radius: 5px;
border-top-right-radius: 5px;;
  overflow:hidden;
  margin-right:30px;
  -webkit-box-shadow: 0px 1px 5px 0px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    0px 1px 5px 0px rgba(50, 50, 50, 0.75);
box-shadow:         0px 1px 5px 0px rgba(50, 50, 50, 0.75);
}
.chathead {
  width:inherit;
  background-color:#1a1a1a;
  height:50px;
  color:#ffffff;
  padding-top:13px;
  padding-left:10px;
  cursor:pointer;
}
.chathead img {
  width:20px;
  vertical-align:middle;
  padding-right:10px;
}

.feed {
  padding:10px;
  background-color:#f2f2f2;
  max-height:300px;
  overflow-y:scroll;
  overflow-x:hidden;
}
.feed img {
  width:100%;
}
.other, .me {
  position:relative;
  margin-top:10px;
  
}
.me {
  -webkit-animation:intro 1s;
  animation:intro 1s;
}
.other {
  -webkit-animation:intro2 1s;
  animation:intro2 1s;
  position:relative;
}
.other{}
.other .profile {
  position:absolute;
  top:0px;
  left:0px;
}
.other .message {
  min-height:30px;
  margin-left:30px;
  border:1px solid #E0E0E0;
  background-color:#ffffff;
  padding:10px;
  color:#1a1a1a;
}

.other .message:before {
  content:"";
  	width: 0; 
	height: 0;
  position:absolute;
  top:0px;
  left:27px;
	width: 0; 
	height: 0; 
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-right:10px solid #ffffff; 
}
.me .profile {
  position:absolute;
  bottom:0px;
  right:0px;
}
.me .message {
  min-height:30px;
  max-width:161px;
  border:1px solid #E0E0E0;
  background-color:#ffffff;
  padding:10px;
  color:#1a1a1a;
}
.meta {
  padding-top:5px;
  font-size:12px;
  color:#808080;
}
.messagebox {
  min-height:30px;
  width:250px;
  border-top:1px solid #e0e0e0;
  background-color:#ffffff;
}
.messagebox textarea {
  width:250px;
  box-sizing:border-box;
  height:100%;
  border:0px;
  font-family:Arial;
  padding-left:10px;
}
@-webkit-keyframes intro {
  0% { opacity:0; left:25px;}
  100% { opacity:1; left:0px;}
}
@-webkit-keyframes intro2 {
  0% { opacity:0; left:-25px;}
  100% { opacity:1; left:0px;}
}
@keyframes intro {
  0% { opacity:0; left:25px;}
  100% { opacity:1; left:0px;}
}
@keyframes intro2 {
  0% { opacity:0; left:-25px;}
  100% { opacity:1; left:0px;}
}
#chat > img {
	height:50px;
	width:50px;
	padding:1px;
	
}
.button {
    background-color: #f64c00;
	height:50px;
	width:130px;
	    font-size: larger;
    font-weight: 700;
    border-radius: 50%;
}
</style>
</head>
<body>

<?php include 'header.php' ?>






<div class="info" style="height:100%;">
  <img src="https://lh4.googleusercontent.com/-TtZ8a2i9KsM/UYFKqR5KewI/AAAAAAAABiI/VvuOY_VEJQc/w1600-h900/default_cover_2_ae125d34a6150400a2a97f22e218a904.jpg" class="cover">
  <img src="https://lh6.googleusercontent.com/-AATxOZ5T388/AAAAAAAAAAI/AAAAAAAAAoA/-Cx4-0B9K2s/s120-c/photo.jpg" class="profilePic">
  <div class="infopadding"></div>
  <p class="title"><b>Doctor Name</b></p>
  <p class="morestuff">
  <?php
  $query="SELECT * FROM chat where Flag=1";
  $count=0;
	$result = mysqli_query($conn, $query);
		foreach( $result as $data ) // using foreach  to display each element of array
            {
               $count++;
				
			}
	
	
	?>
   <div id="chat" style="border: 1px solid #e0e0e0;" onclick="$('.chatarea').toggle();" > 
   <img src="php4.png" ><?php echo $count. " new messages";?>
   </div>
   <div id="chat"  style="border: 1px solid #e0e0e0;">
     <img src="php4.png" >Patient name
   </div>
   <div id="chat"  style="border: 1px solid #e0e0e0;">
     <img src="php4.png" >Patient name
   </div>
   <div  id="chat" style="border: 1px solid #e0e0e0;">
     <img src="php4.png" >Patient name
   </div>
   <div  id="chat" style="border: 1px solid #e0e0e0;">
     <img src="php4.png" >Patient name
   </div>
	</p> 
</div>

<div class="container" style="margin-left:300px; width:60%;  height:100%; margin-bottom:50px; margin-top:30px;">
 <p class="morestuff">
 <button class="button" type="button" onclick="$('#medicines').toggle()" style="float:right;">Medicines</button>
<button class="button" type="button" onclick="$('#diagnosis').toggle();" style="float:right; margin-right:50px;">Diagnosis</button>

    </p>
	
	<div id="PatientMessage" >
	  <label>Name:</label>
	   
		<input type="text" name="d_id" class="form-control" value="<?php


	$query="SELECT Name FROM chat WHERE ID=1";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row 
		$row=$result->fetch_assoc();
		echo $row['Name'];
	}?>" style="width:45%;"><br>
		 
	  </div>
	
  <br><br>
	 <div id="diagnosis" >
	  <form action="doctor.php" method="post">
	  <h3 style="    font-size: 20px;    font-weight: 700; font-family: inherit;">Diagnosis Details</h3>
	  <label>Doctor's ID</label>
		<input type="text" name="d_id" class="form-control" style="width:45%;"><br>
		 <label>Patient's name</label>
		<input type="text" name="p_id" class="form-control" value="<?php


	$query="SELECT Name FROM chat WHERE ID=1";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row 
		$row=$result->fetch_assoc();
		echo $row['Name'];
	}?>" style="width:45%;"><br>
		 <label>Test to be  conducted</label>
		<input type="text" name="test" class="form-control" style="width:45%;"><br>
		<input type="submit" value="submit" name="submitd" class="btn" ><br><br>
		</form>
	  </div>
	  
	  <br><br>
	  <div id="medicines" >
	   <h3 style="    font-size: 20px;    font-weight: 700; font-family: inherit;">Medicines Details</h3>
	  <form action="doctor.php" method="post">
	  <label>Medicine Name</label>
	  <textarea class="form-control" style="width:45%;"></textarea><br>

		 <label>Patient's address</label>
		<input type="text" name="p_id" class="form-control" style="width:45%;" value="<?php


	$query="SELECT Street1,Street2,City,State,Pincode FROM patient WHERE FirstName='Aradha'";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row 
		$row=$result->fetch_assoc();
		echo $row['Street1'].", ".$row['Street2'].", ".$row['City'].", ".$row['State'].", ".$row['Pincode'];
	}?>"><br>
		<input type="submit" value="submit" name="submitm" class="btn" >
		</form>
	  </div>
</div>
<div class="chatarea">
  <div class="chat">
    <div class="chathead" id="chathead">
      <img src="img/client-pic1.jpg" style="height:20px; width:40px;">
	 <?php


	$query="SELECT Name FROM chat WHERE ID=1";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row 
		$row=$result->fetch_assoc();
		echo $row['Name'];
	}
		
		
		
		
		?>
    </div>
    <div id="togglearea">
   
    <div style="position:relative">
     
    </div>
    <div class="feed">
	<?php 
	$query="SELECT * FROM chat";
	$result = mysqli_query($conn, $query);
		foreach( $result as $data ) // using foreach  to display each element of array
            {
                
				
			
			if($data['ID']%2==0)
			{
	?>
      <div class="other">
        <div class="profile">
          <img src="https://lh6.googleusercontent.com/-MifuaZBMQNM/AAAAAAAAAAI/AAAAAAAAAHo/FBniXbrIEQ4/s32-c-k-no/photo.jpg">
        </div>
        <div class="message">
          <?php echo $data['Message']; ?>
          <div class="meta">
          <?php echo $data['Data']; ?>
          </div>
        </div> 
      </div>
			<?php } 
			else {?>
      <div class="me">
        <div class="profile">
          <img src="https://lh6.googleusercontent.com/-AATxOZ5T388/AAAAAAAAAAI/AAAAAAAAAoA/-Cx4-0B9K2s/s32-c-k-no/photo.jpg">
        </div>
        <div class="message">
          <?php echo $data['Message']; ?>
          <div class="meta">
          <?php echo $data['Data']; ?>
          </div>
        </div>
      </div>
	  
			<?php } }
			$query="update chat set Flag=0 WHERE Flag=1";
			mysqli_query($conn, $query);
			
			?>

	
      </div>
    </div><!-- feed-->
    <div class="messagebox">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 

      <textarea name="enter_message" id="message" placeholder="Enter Message"></textarea> 
	   <input type="submit" name="submit" value="Send!"/> 
	   </form>
    </div>
    </div>
  </div><!-- chatbox-->

<?php if(isset($_POST['submit'])){ $name = "na"; $msg = $_POST['enter_message']; 
$query = "INSERT INTO chat (Name,Message,Flag) VALUES ('$name','$msg',2)"; if(mysqli_query($conn, $query)){};}
$conn->close();
	}
	?>

<script type="text/javascript">
$(document).ready(function() {
$(".chatarea").hide();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
$("#diagnosis").hide();
 $("#medicines").hide(); 
});
</script>








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








<script>
$('.settingsExpand').slideToggle(0);
$(".feed").scrollTop($(".feed")[0].scrollHeight);
document.getElementById("message").addEventListener('keypress', function (e) {
  var currentTime = new Date()
  var hours = currentTime.getHours()
  var minutes = currentTime.getMinutes()
    var key = e.which || e.keyCode;
    if (key == 13) { // 13 is enter
      var message = this.value;
      $('.feed').append("<div class='me'><div class='profile'><img src='https://lh6.googleusercontent.com/-AATxOZ5T388/AAAAAAAAAAI/AAAAAAAAAoA/-Cx4-0B9K2s/s32-c-k-no/photo.jpg'></div><div class='message'>"+(this.value)+"<div class='meta'>11/19/13, "+hours+":"+minutes+" PM</div></div></div>");
      $(".feed").scrollTop($(".feed")[0].scrollHeight);
      this.value = "";
    }
});
$('#chathead').click(function() {
  $('#togglearea').slideToggle();
});
$('#settings').click(function() {
  $('.settingsExpand').slideToggle();
});
(function($) {
  $(document).ready(function() {
     $('[data-corin-checkbox="true"]')
       .addClass('corin-checkbox')
       .wrap('<div class="corin-checkbox-container"></div>')
       .after('<div class="corin-checkbox-sub"></div>')
       .each(function() {
         if (this.checked) {
           $(this).siblings('.corin-checkbox-sub').addClass('checked');
         } else {
           $(this).siblings('.corin-checkbox-sub').addClass('unchecked');
       }
       })
       .parent()
       .on('click','.corin-checkbox-sub', function() {
           var theCheckbox = $(this).siblings('.corin-checkbox');
         var isChecked = theCheckbox.is(':checked');
         
         if (isChecked) {
           theCheckbox.prop('checked',false);
           $(this).removeClass('checked').addClass('unchecked');
         } else {
           theCheckbox.prop('checked',true);
           $(this).removeClass('unchecked').addClass('checked');
         }
         
       });
  });
  
}(jQuery));
                    
</script>













</body>
</html>