<?php 
	require("model_collection.php");

	class View{

		public function renderPosts($aPostList){
			
			$sHTML = "";

			for($iCount=0; $iCount<count($aPostList); $iCount++){

				$oPost = $aPostList[$iCount];
				// $oPost = $oPosts->post;

				$sHTML.='<div class="post">';
				$sHTML.='<h2>' . $oPost->title . '</h2>';
				$sHTML.='<img src="assets/images/' . $oPost->photopath1 . '">';
				$sHTML.='<img src="assets/images/' . $oPost->photopath2 . '">';
				$sHTML.='<h3><a href="controller_viewpost.php?postID='. $oPost->postID.'">Click to continue reading...</a></h3>';
					
				$sHTML.='<div class="postDetails">';
				$sHTML.='<h5><span>71</span> comments</h5>'; //NEED TO PUT IN THE COMMENTS OK
				$sHTML.='<h6>' . $oPost->date . '</h6>';
				$sHTML.='</div>';
				$sHTML.='</div>';

			}//END of for loop

			return $sHTML;

		}//END of renderposts function


		public function renderViewPost($oPost){

			$sHTML = "";

			$sHTML.='<div id="fullPost">';
			$sHTML.='<h2>' . $oPost->title . '</h2>';
			$sHTML.='<ul>';
			$sHTML.='<li><img src="assets/images/' . $oPost->photopath1 . '" alt=""></li>';
			$sHTML.='<li><img src="assets/images/' . $oPost->photopath2 . '" alt=""></li>';
			$sHTML.='</ul>';
			$sHTML.="<p><span>" . $oPost->description . "<br><br><br></span>" . $oPost->content . "</p>";
	
			$sHTML.='<div id="fullPostDetails">';
			$sHTML.='<h2><span>7</span> comments</h2>';
			$sHTML.='<h3>' . $oPost->date . '</h3>';
			$sHTML.='</div>';
			$sHTML.='</div>';

			$aCommentList = $oPost->comments;
			for($iCount=0; $iCount<count($aCommentList); $iCount++){
				$sHTML.='<div id="postComments">';
				$sHTML.='<textarea maxlength="300" rows="6" cols="50">Leave a comment on this post...</textarea>';
				$sHTML.='<input type="submit" class="submitCommentButton">';
				$sHTML.='<div id="comment1">';
				$sHTML.='<img src="assets/images/Member16.png" alt="">';
				$sHTML.='<h2>'.$oComment->MemberID->Username.'</h2>';
				$sHTML.='<p>I am loving that top!</p>';
				$sHTML.='</div>';
				$sHTML.='<h3>THATS ALL THE COMMENTS ON THIS POST FOR NOW</h3>';
				$sHTML.='</div>';
			}//END of for loop

			return $sHTML;


		}//END of renderviewpost function


		public function renderPostComments($oComment){
		$sHTML = "";

			for($iCount=0; $iCount<count($aCommentList); $iCount++){
				$sHTML.='<div id="postComments">';
				$sHTML.='<textarea maxlength="300" rows="6" cols="50">Leave a comment on this post...</textarea>';
				$sHTML.='<input type="submit" class="submitCommentButton">';
				$sHTML.='<div id="comment1">';
				$sHTML.='<img src="assets/images/Member16.png" alt="">';
				$sHTML.='<h2>'.$oComment->MemberID->Username.'</h2>';
				$sHTML.='<p>I am loving that top!</p>';
				$sHTML.='</div>';
				$sHTML.='<h3>THATS ALL THE COMMENTS ON THIS POST FOR NOW</h3>';
				$sHTML.='</div>';
			}//END of for loop
		}//END of renderpostcomments function

	} //END of view class



	// $oCollection = new Collection();

	// $oView = new View();
	// $sHTMLofPosts = $oView->renderPosts($oCollection->getAllPosts());
	// echo "<pre>";
	// print_r($sHTMLofPosts);
	// echo "</pre>";
 ?>