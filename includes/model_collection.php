<?php 

	require_once("model_post.php");
	require_once("connection.php");

	class Collection{

		public function getAllPosts(){
			$aPosts = array();

			//load all posts into the allposts array
			$oConnection = new Connection();
			$sSQL = "SELECT postID FROM tbPost";

			$oResult = $oConnection->query($sSQL);

			while($aRow = $oConnection->fetch_array($oResult)){
				$oPost = new Post();
				$oPost->load($aRow["postID"]); //this post id needs to be matching casing with the casing in the database
				$aPosts[] = $oPost;
			} //END of while

			$oConnection->close_connection();
			return $aPosts;

		}//END of getallposts function

	}//END of collection class

	///////////TEST

	// $oCollection = new Collection();
	// $aAllPosts = $oCollection->getAllPosts();
	// echo "<pre>";
	// print_r($aAllPosts);
	// echo "</pre>";
 ?>