<?php 
    $page_id = 3;
?>

<!DOCTYPE html>
<html>

<head>
	<title>Contact - Sherps</title>
	<?php include dirname(__FILE__).'/includes/head.inc.php'; ?>
</head>

<body>

<!-- header -->
    <?php include dirname(__FILE__).'/includes/header.inc.php'; ?>

<!-- main -->
    <main>

    <!-- content: first half of page -->
        <div id="contact__form">
	        <figure class="contact__figure">
	            <img src="https://ik.imagekit.io/sherpslucky13/maori-89317_1920copy3_Sybs3I3q4.jpg" alt="Home photo" height="650" width="100%"
              srcset="https://ik.imagekit.io/sherpslucky13/tr:w-500/maori-89317_1920copy3_Sybs3I3q4.jpg 500w, https://ik.imagekit.io/sherpslucky13/tr:w-800/maori-89317_1920copy3_Sybs3I3q4.jpg, https://ik.imagekit.io/sherpslucky13/tr:w-1024/maori-89317_1920copy3_Sybs3I3q4.jpg 1024w"
              >
	        
		        <!-- form to overlay image -->
	            <figcaption class="contact-figure__overlay">

                    <!-- code for form included-->
                    <?php include dirname(__FILE__).'/includes/email.inc.php';?>

	            </figcaption>
	        </figure>
        </div>

    <!-- code for side icons -->
	    <?php include dirname(__FILE__).'/includes/icon.inc.php'; ?> 

    <!-- content: second half of page -->
        <div>
        	<!-- video -->
            <div class="contact-main__div">
                <video width="100%" height="auto" muted autoplay loop>
                    <source src="https://res.cloudinary.com/slapp/video/upload/ac_none,f_auto,q_auto,vc_auto/v1558097504/sherpPortfolio/vintageCartoon.mp4" type="video/mp4" />
                </video>

                <!-- text to overlay video -->
                <div class="contact-main__overlay">
				    <h3 class="contact-main__h3">Flat C, 79 Lewin Road,<br> Streatham Common,<br> London SW16 6JZ<br>
                    Tel: <span id="phone-text">+44 7512 007 206</span><br>
                    <!-- this CSS code below is to offset safari auto-format. It seems to only work in-script. To review -->
                    <style> #phone-text a{text-decoration:none; color:white;} </style>
				    <a href="#contact__form"> <address>sherpal@dharmawebdesign.co.uk</address></a></h3>
			    </div>
            </div>
	    </div>

    </main>

<!-- footer -->
	<?php include dirname(__FILE__).'/includes/footer.inc.php'; ?>

</body>

<!-- ReCaptcha3. Note: Site-key inserted in each of both script entries just below -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LeXUaEUAAAAADqhAJ1g6ifRQYzOtEg6e0qGqq8q"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LeXUaEUAAAAADqhAJ1g6ifRQYzOtEg6e0qGqq8q', {action: 'homepage'}).then(function(token) {
         ...
      });
  });
  </script>
  
</html>