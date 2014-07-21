<?php 
require_once("includes/view.php");
require_once("includes/model_collection.php");
require_once("includes/model_post.php");

//-------for renderPosts function
$oView = new View();
$oCollection = new Collection();
$aPosts = $oCollection->getAllPosts(); //DO I EVEN NEED THIS LINE?

$oPost = new Post();
$iPostID = 1;
if(isset($_GET["postID"])){
	$iPostID = $_GET["postID"];
}

$oPost->load($iPostID);




require_once("includes/header.php");
echo $oView->renderViewPost($oPost);
require_once("includes/footer.php");
?>




<!-- 	<div id="fullPost">
		<h2>HUMP DAY BLUES</h2>
		<ul>

			<li><img src="assets/images/img5.jpg" alt=""></li>
			<li><img src="assets/images/img6.jpg" alt=""></li>
		</ul>

		<p><span>SHIRT:RIVER ISLAND<br>SKIRT:TOPSHOP<br>BAG:ZARA<br>SHOES:CONVERSE<br><br><br></span>Today I got the dirtiest look of an old lady I’ve ever had in my life. Why? Because I wasn’t wearing tights “on a day like today”. Sigh. It’s not really been that cold but I guess on the flip side it hasn’t been that worn. I was just lazy and couldn’t be bothered to put any on. Plus tights are notorious outfit ruiners. I think I've decided I hate tights!<br><br>Anyway today I've been working like crazy - planning a few things for the next few months and trying to finish off two videos for the rest of the week. One will be up tomorrow and the other will hopefully be up on Sunday. Im also in the process of trying to find some desk space to rent in London which is proving difficult as I know what Im looking for I just haven't found one thats clicked yet. I'm off to Liverpool tomorrow which should be lovely as I love the city and I haven't been up north (Although, north to us Londoners is anything beyond London in a all fairness) for such a long time. Im really looking forward to it.</p>
	
		<div id="fullPostDetails">
			<h2><span>7</span> comments</h2>
			<h3>Wednesday, May 28, 2014</h3>
		</div>
	</div>	 -->


	

	<!-- <div id="postComments">

		<textarea maxlength="300" rows="6" cols="50">Leave a comment on this post...</textarea>

		<input type="submit" class="submitCommentButton">


		<div id="comment1">
			<img src="assets/images/Member16.png" alt="">
			<h2>ALEXA</h2>
			<p>I am loving that top!</p>
		</div>
		<div id="comment2">
			<img src="assets/images/Member1.png" alt="">
			<h2>ZOE</h2>
			<p>The sheer blouse is so pretty! You are a natural in front of the camera :)</p>
		</div>
		<div id="comment3">
			<img src="assets/images/Member14.png" alt="">
			<h2>KATIE</h2>
			<p>This is so cute but edgy... you look gorgeous</p>
		</div>
		<div id="comment4">
			<img src="assets/images/Member12.png" alt="">
			<h2>OLIVIA</h2>
			<p>I love the pop of colour the bag adds!</p>
		</div>

		<h3>THATS ALL THE COMMENTS ON THIS POST FOR NOW</h3>
	</div>
 -->