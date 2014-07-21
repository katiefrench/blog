<?php 
require_once("includes/view.php");
require_once("includes/model_collection.php");
require_once("includes/model_post.php");


//-------for renderPosts function
$oView = new View();
$oCollection = new Collection();
$aPosts = $oCollection->getAllPosts();
//------------------------------------

require_once("includes/header.php");
echo $oView->renderPosts($oCollection->getAllPosts());
require_once("includes/footer.php");
?>



	<!-- <div class="post">
		<h2>THE WEEKEND</h2>
		<img src="assets/images/theweekendimg1.jpg" alt="">
		<img src="assets/images/theweekendimg2.jpg" alt="">
		<h3>Click to continue reading...</h3>
		
		<div class="postDetails">
			<h5><span>71</span> comments</h5>
			<h6>Monday, June 02, 2014</h6>
		</div>
	</div>

	<div class="post">
		<h2>FANCY FOOTWORK</h2>
		<img src="assets/images/fancyfootwork1.jpg" alt="">
		<img src="assets/images/fancyfootwork2.jpg" alt="">
		<h3>Click to continue reading...</h3>
		
		<div class="postDetails">
			<h5><span>52</span> comments</h5>
			<h6>Thursday, June 19, 2014</h6>
		</div>
	</div> -->









