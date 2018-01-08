<?php
if(isset($_POST['submit'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bitcamp";
	if($_POST['title']=="Mr.")
		$gen="Male";
	else
		$gen="Female";
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
    $un=$_POST['un'];
	$pwd=$_POST['password'];
	$cpwd=$_POST['cpassword'];
	$con=$_POST['contact'];
	$em=$_POST['email'];
	$dob=$_POST['dob'];
	$st1=$_POST['str1'];
	$st2=$_POST['str2'];
	$st=$_POST['state'];
	$ct=$_POST['city'];
	$pin=$_POST['pincode'];
	$y=$_POST['ex'];
	$wp=$_POST['wp'];
	$fh=$_POST['interest'];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	if($pwd==$cpwd){
		$sql = "INSERT INTO doctor (Gender,FirstName,LastName,UserName,Password,Contact,email,DOB,Street1,Street2,State,City,PinCode,Experience,Workplace,Field) VALUES ('$gen','$fn','$ln','$un','$pwd','$con','$em','$dob','$st1','$st2','$st','$ct','$pin','$y','$wp','$fh')";
		//$ql="INSERT INTO users (username,email) VALUES ('$un','$em')";

		if ($conn->query($sql) == TRUE ) {
			echo "<script type='text/javascript'>alert('Records created successfully');</script>";	
			session_start();
			$_SESSION['login_username']=$un;
			header('Location: doctor.php'); 
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	else{
		echo"<script type='text/javascript'>alert('Passwords do not match. Sorry we counldn't process your request');</script>";
	}

	$conn->close();
	
	
	
}
?>
<html>
<head>
<link rel="icon" href="php10.png" type="image/png">
<link rel="shortcut icon" href="php10.png" type="img/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});
</script>
<style>

body{
	color: #555555;
}
.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
	padding-right:10px;
	padding-top:20px;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding: 60px;
	height:300px;
}

.wizard h3 {
    margin-top: 0;
}
.step1 .row {
    margin-bottom:20px;
}
.step_21 {
    border :1px solid #eee;
    border-radius:5px;
    padding:20px;
}
.step33 {
    border:1px solid #ccc;
    border-radius:5px;
    padding-left:10px;
    margin-bottom:20px;
	
}
.dropselectsec {
    width: 68%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.dropselectsec1 {
    width: 74%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.mar_ned {
    margin-bottom:10px;
}
.wdth {
    width:25%;
}
.birthdrop {
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    width: 16%;
    outline: 0;
    font-weight: normal;
}


/* according menu */
#accordion-container {
    font-size:13px
}
.accordion-header {
    font-size:13px;
	background:#ebebeb;
	margin:5px 0 0;
	padding:7px 20px;
	cursor:pointer;
	color:#fff;
	font-weight:400;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px
}
.unselect_img{
	width:18px;
	-webkit-user-select: none;  
	-moz-user-select: none;     
	-ms-user-select: none;      
	user-select: none; 
}
.active-header {
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
	border-radius:5px 5px 0 0;
	background:#F53B27;
}
.active-header:after {
	content:"\f068";
	font-family:'FontAwesome';
	float:right;
	margin:5px;
	font-weight:400
}
.inactive-header {
	background:#333;
}
.inactive-header:after {
	content:"\f067";
	font-family:'FontAwesome';
	float:right;
	margin:4px 5px;
	font-weight:400
}
.accordion-content {
	display:none;
	padding:20px;
	background:#fff;
	border:1px solid #ccc;
	border-top:0;
	-moz-border-radius:0 0 5px 5px;
	-webkit-border-radius:0 0 5px 5px;
	border-radius:0 0 5px 5px
}
.accordion-content a{
	text-decoration:none;
	color:#333;
}
.accordion-content td{
	border-bottom:1px solid #dcdcdc;
}



@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>
<title>Form</title>
</head>
<body style="background-image:url('img/pw_maze_black_2X.png')">

<nav class="main-nav-outer" id="test"><!--main-nav-start-->
    <div class="container">
        <ul class="main-nav">
            <li><a href="index.php #header">HOME</a></li>
            <li><a href="index.php #howitworks">HOW IT WORKS</a></li>
            <li><a href="index.php #Services">SERVICES</a></li>
            <li class="small-logo"><a href="#header"><img src="knock_logo_press.png" width="130" height="60" alt="building"></a></li>
            <li><a href=""></a></li>
            <li><a href="register.php">SIGN-UP</a></li>
            <li><a href="index.php #Contact">CONTACT</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->
<div class="container">

			<div class="otp-section  col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
				<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp text-left">
		
    <div class="row">
    	<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form method="post" action="" novalidate>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <div class="row">
							<div class="col-md-2">
                                <label>Title</label>
                                <select name="title" id="title" class="form-control">
												<option value=""> </option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="4">Ms.</option>
                                            </select>
                            </div>
                            <div class="col-md-5">
                                <label>First Name</label>
                                <input type="textfield" class="form-control"  name="fname" id="fname" placeholder="First Name">
                            </div>
                            <div class="col-md-5">
                                <label>Last Name</label>
                                <input type="email" class="form-control" id="lname" name="lname" placeholder="Last Name">
                            </div>
                        </div>
						<div class="row">
							<div class="col-md-6">
                                <label>User name</label>
                                <input type="textfield" class="form-control" id="un" name="un" placeholder="Username">
                            </div>
						</div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Mobile Number</label>
                                <input type="textfield" class="form-control" id="contact" name="contact" placeholder="Mobile Number">
                            </div>
                            <div class="col-md-6">
                            <label>Email address</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    
                            </div>
                        </div>
						<hr>
						
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step1">
                            
								<center><h4>Education Details</h4></center>
                                <div class="row">
                                <div class="col-md-6">
                                <label>Date of birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" placeholder="DD-MM-YYYY">
                            </div>
                            </div>
							<div class="row">
												<div class="col-md-6">
													<label>Attach medical degree</label>
													<input type="file" class="form-control" id="deg" name="deg">
												</div>
											</div>

							
							<hr>
							<h4>Residence Address</h4>
							<div class="row">
							<div class="col-md-6">
                                <label>Street 1</label>
                                <input type="textfield" class="form-control" id="str1" name="str1" placeholder="Street 1">
                            </div>
                            <div class="col-md-6">
                            <label>Street 2</label>
                                <input type="textfield" class="form-control" id="str2" name="str2" placeholder="Street 2"> 
                            </div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<Select name="state" class="form-control"
											placeholder="State"> <option value="" selected="selected">Select</option><option value='Andhra Pradesh'>Andhra Pradesh</option><option value='Arunachal Pradesh'>Arunachal Pradesh</option><option value='Assam'>Assam</option><option value='Bihar'>Bihar</option><option value='Chhattisgarh'>Chhattisgarh</option><option value='Delhi'>Delhi</option><option value='Goa'>Goa</option><option value='Gujarat'>Gujarat</option><option value='Haryana'>Haryana</option><option value='Himachal Pradesh'>Himachal Pradesh</option><option value='Jammu and Kashmir'>Jammu and Kashmir</option><option value='Jharkhand'>Jharkhand</option><option value='Karnataka'>Karnataka</option><option value='Kerala'>Kerala</option><option value='Madhya Pradesh'>Madhya Pradesh</option><option value='Maharashtra'>Maharashtra</option><option value='Manipur'>Manipur</option><option value='Meghalaya'>Meghalaya</option><option value='Mizoram'>Mizoram</option><option value='Nagaland'>Nagaland</option><option value='Orissa'>Orissa</option><option value='Punjab'>Punjab</option><option value='Rajasthan'>Rajasthan</option><option value='Sikkim'>Sikkim</option><option value='Tamil Nadu'>Tamil Nadu</option><option value='Telangana'>Telangana</option><option value='Tripura'>Tripura</option><option value='Uttar Pradesh'>Uttar Pradesh</option><option value='Uttarakhand'>Uttarakhand</option><option value='West Bengal'>West Bengal</option>
										</Select>
									</div>
									<div class="col-md-4">
										<label></label> <input type="text" name="city"
											placeholder="City" class="form-control"
											style="text-transform: capitalize;">
									</div>
									<div class="col-md-4">
										<label></label> <input type="text" name="pincode"
											placeholder="Pincode" class="form-control">
									</div>
								</div>
							
							
																
                            
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="step1">
                        <center><h4>Employment Details</h4></center>
										<div class="row ">
											<div class="col-sm-12 fields">
												<label>Years of experience</label> <input id="ex"
													type="text" name="ex" class="form-control"
													placeholder="Experience"
													style="text-transform: capitalize; top: -3px;">
											</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<label>Previous Workplace</label>
													<input type="text" class="form-control" id="wp" name="wp" placeholder="Previous Hospital workedin">
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<label>Fields of Interest</label>
													<input type="text" class="form-control" id="interest" name="interest">
												</div>
											</div>
                        </div>
						<div class="col-md-12">
								<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"
									for="c1"> <input type="checkbox" id="c1" name="c1"
									class="mdl-checkbox__input"> <span
									class="mdl-checkbox__label">I have read and agree to the
										<strong><a target="_blank" href="privacy-policy"
											style="color: #47c9af;"> Privacy Policy </a></strong>, <strong><a
											target="_blank" href="terms-of-use" style="color: #47c9af;">
												Terms of Use </a></strong>and Consent to Electronic Disclosures
								</span><span style="display: none;" class="text-error"
									id="c1text-error">Accept</span>
								</label>
							</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
							
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                       <div class="step4">
                            <h5>Thank you for your time. Please hit register to create an account and then Log in</h5>
							<input type="submit" name="submit" class="btn btn-primary" value="Register" >
                        </div>
                    </div>
                    <div class="clearfix"></div>
					
                </div>
            </form>
			


			
			
			
			
			
			
        </div>
    </section>
   </div>
   </div>
</div>
</body>
</html>

