<?php 
    $page_id = 2;
?>

<!DOCTYPE html>
<html>

<head>
	<title>About - Sherps</title>
	<?php include dirname(__FILE__).'/includes/head.inc.php'; ?>	
</head>

<body>

<!-- header -->
	<?php include dirname(__FILE__).'/includes/header.inc.php'; ?> 

<!-- main -->
    <main>

   <!-- content: first half of page -->
        <div>
            <figure>
                <img class="about-figure__image" src="https://ik.imagekit.io/sherpslucky13/art-dark-ethnic-1038041copy1_rJ-h7nU94.jpg" alt="Animated image of women" height="auto" width="100%"
                srcset="https://ik.imagekit.io/sherpslucky13/tr:w-500/art-dark-ethnic-1038041copy1_rJ-h7nU94.jpg 500w, https://ik.imagekit.io/sherpslucky13/tr:w-800/art-dark-ethnic-1038041copy1_rJ-h7nU94.jpg 800w, https://ik.imagekit.io/sherpslucky13/tr:w-1024/art-dark-ethnic-1038041copy1_rJ-h7nU94.jpg 1024w"
                >
            </figure>
        </div>

    <!-- code for side icons -->
        <?php include dirname(__FILE__).'/includes/icon.inc.php'; ?> 

    <!-- content: second half of page -->
        <div>
            <div class="about-div__div">
                <h4 class="about-main__h4">
                    <i class="fa fa-quote-left about-h4__quote-left"></i>
                        A gentle hello. I am Sherps, a full stack Javascript developer. Please feel free to browse my handcrafted portfolio. Also, if you have a moment, do peruse my code on GitHub <a href="https://github.com/sherpal8" id="about-main-github_handle">@sherpal8</a>. Your feedback is encouraged. Thank you.
                    <i class="fa fa-quote-right about-h4__quote-right"></i>
                </h4>
            </div>

            <div class="about-main__div">
                <div>
                    <p><a href="https://www.dharmawebdesign.co.uk/DWD/index.php">Dharma Web Design</a></p>
                    <div class="about-main-div__div">
                        <iframe class="about-main__iframe" src="https://dharmawebdesign.co.uk/DWD/index.php" title="Portfolio of work. Example number 1.">Sincere apologies. Your browser does not support iframes.</iframe>
                    </div>
                </div>

                <div>
                    <p><a href="https://www.dharmawebdesign.co.uk/OT/index.php">Orange Tree Production</a></p>
                    <div class="about-main-div__div">
                        <iframe class="about-main__iframe" src="https://dharmawebdesign.co.uk/OT/index.php" title="Portfolio of work. Example number 2.">Sincere apologies. Your browser does not support iframes.</iframe>
                    </div>
                </div>
            </div>
       </div>
    </main>

<!-- footer -->
	<?php include dirname(__FILE__).'/includes/footer.inc.php'; ?>

</body>
</html>