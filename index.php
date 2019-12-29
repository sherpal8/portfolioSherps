<?php 
    $page_id = 1;
?>

<!DOCTYPE html>
<html>

<head>
	<title>Home - Sherps</title>
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
	            <img class="index-figure__img" src="https://ik.imagekit.io/sherpslucky13/brilliant-decor-design-2002719copy_SkK272I5E.jpg" alt="Decorative image of neon light" height="auto" width="100%"
                srcset="https://ik.imagekit.io/sherpslucky13/tr:w-500/brilliant-decor-design-2002719copy_SkK272I5E.jpg 500w, https://ik.imagekit.io/sherpslucky13/tr:w-800/brilliant-decor-design-2002719copy_SkK272I5E.jpg 800w, https://ik.imagekit.io/sherpslucky13/tr:w-1024/brilliant-decor-design-2002719copy_SkK272I5E.jpg 1024w"
	            >
	            <figcaption class="index-figure__figcaption"><span class="index-figure__span">#</span>standOut</figcaption>
	        </figure>
	    </div>

    <!-- code for side icons -->
	    <?php include dirname(__FILE__).'/includes/icon.inc.php'; ?> 
        
    <!-- content: second half of page -->
        <div>
	        <figure class="index-div__img">
	            <img crossorigin="anonymous" src="https://ik.imagekit.io/sherpslucky13/architecture-buildings-city-2067048copy_SyGom38q4.jpg" alt="Home photo" height="auto" width="100%"
                srcset="https://ik.imagekit.io/sherpslucky13/tr:w-500/architecture-buildings-city-2067048copy_SyGom38q4.jpg 500w, https://ik.imagekit.io/sherpslucky13/tr:w-800/architecture-buildings-city-2067048copy_SyGom38q4.jpg 800w, https://ik.imagekit.io/sherpslucky13/tr:w-1024/architecture-buildings-city-2067048copy_SyGom38q4.jpg 1024w"
	            >
	        </figure>
        </div>
    </main>

<!-- footer -->
	<?php include dirname(__FILE__).'/includes/footer.inc.php'; ?>

</body>
</html>