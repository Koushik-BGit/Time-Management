<html lang="en">
<head>
<meta charset="utf-8">
<title>TM | Check Your Email</title>
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link href="css/all.min.css" rel="stylesheet" type="text/css">

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/backend-style.css" rel="stylesheet" type="text/css">
<link href="css/backend-responsive.css" rel="stylesheet" type="text/css">

<!--[if lt IE 8]>

<script src="js/CreateHTML5Elements.js"></script>

<![endif]-->

<!--[if IE]>

	<link rel="stylesheet" type="text/css" href="ie/ie-fix.css" />

    <link rel="stylesheet" type="text/css" href="js/ie8-responsive-file-warning.js" />

    <link rel="stylesheet" type="text/css" href="js/ie10-viewport-bug-workaround.js" />

    <link rel="stylesheet" type="text/css" href="js/ie-emulation-modes-warning.js" />

<![endif]-->

<!--[if IE]>

	<script src="js/html5.js" type="text/javascript"></script>

<![endif]-->

</head>

<body style="background: url(./images/login-bg.jpg) no-repeat 0 0;  background-size: cover;">

<!-- Main Start -->

<main class="check_page">
  <div class="login_wrap">
    <div class="login-content wrapper">
      <form class="login-form">
        <div class="login-logo"><img src="images/logo.png"></div>
        <div class="pop-up-icon"><img src="images/mail-box.png" width="90"></div>
        <h2>Please check your email</h2>
        <div class="form-group">
          <p class="discclimbe">We’ve sent you an email to reset your password, follow the link in the email and your account should be up and running in no time.</p>
        </div>
        <div class="form-group">
          <p class="discclimbe">Not received email? &nbsp;<a href="javascript:void(0);" class="popup-btn" rel="resend_poup">
            <label style="cursor: pointer;">Resend</label>
            </a></p>
        </div>
        <div class="form-group button-center"> <a href="login.php"  class="new-quote bk_login">Login</a> </div>
      </form>
    </div>
  </div>
  <div class="clear"></div>
</main>

<!-- Main End -->

<div class="clear"></div>

<!-- Footer Start --> 

<!-- Footer End -->

<div class="overlay"></div>
<div class="modal" id="resend_poup">
  <div class="modal-header">
    <div class="close"><i class="fa fa-close"></i></div>
  </div>
  <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Please check your email for reset link</h3>
    </div>
  
  <!--<div class="modal-body text-center">
    <div class="pop-up-icon"><img src="images/checked-green.svg" width="90"></div>
    <div class="confirmation-txt">Please check your email for reset link</div>
  </div>-->
</div>


<script src="js/jquery-1.9.1.min.js"></script> 
<script src="js/jquery.sticky.js"></script> 
<script src="js/slick.min.js"></script> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<!--<script src="js/allScript.js"></script> -->


<script type="text/javascript">
    $(".popup-btn").on('click',function(e){
	  var $thisAttr = $(this).attr('rel');
	  $('.modal').fadeOut();
	  $('#'+$thisAttr).fadeIn();
	  $('#'+$thisAttr).addClass('open');
	  $(".overlay").fadeIn();
	  e.stopPropagation();
	}); 

	$(".overlay, .modal .close, .no-btn, .no-delete").click(function(){
	  $(".modal").fadeOut();
	  $(".modal").removeClass('open');
	  $(".overlay").fadeOut();
});



</script>
</body>
</html>
