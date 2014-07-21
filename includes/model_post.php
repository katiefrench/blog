<?php 

require_once("connection.php");

class Post{
	private $iPostID;
	private $sTitle;
	private $sDescription;
	private $sContent;
	private $sPhotopath1;
	private $sPhotopath2;
	private $sDate;
	private $aComments;

	public function __construct(){
		$this->iPostID = 0;
		$this->sTitle = "";
		$this->sDescription = "";
		$this->sContent = "";
		$this->sPhotopath1 = "";
		$this->sPhotopath2 = "";
		$this->sDate = "";

		$this->aComments = array();
	} // END of constuctor

	public function load($iID){

		//1.make connection

		$oConnection = new Connection();

		//2.execute query
		//loading subjects from the database

		$sSQL ="SELECT PostID, Title, Description, Content, Photopath1, Photopath2, Date
				FROM tbPost
				WHERE PostID = " . $iID;

		$oResult = $oConnection->query($sSQL); //MEANING: The oResult is = the query inside oConnection is what sSQL is.

		//3.extract data from resultset

		$aComments = $oConnection->fetch_array($oResult);

		$aPost = $oConnection->fetch_array($oResult); //MEANING: the data from the resultset comes out as an associative array with 6 keys (see the SELECT in the SQL above) - put it in aPost
		$this->iPostID = $aPost["PostID"];
		$this->sTitle = $aPost["Title"];
		$this->sDescription = $aPost["Description"];
		$this->sContent = $aPost["Content"]; 
		$this->sPhotopath1 = $aPost["Photopath1"];
		$this->sPhotopath2 = $aPost["Photopath2"];
		$this->sDate = $aPost["Date"];

		//use a while loop to load all the comments of each post
		$sSQL = "SELECT CommentID
		FROM tbComment
		WHERE PostID=" . $iID;

		$oResult = $oConnection->query($sSQL);
		while($aRow = $oConnection->fetch_array($oResult)){
			$oComment = new Comment(); //create the comment object
			$oComment->load($aRow["CommentID"]); // load the comment
			$this->aComments[] = $oComment; // add it into the array aComments
		}//END of while

		//4.close connection
		$oConnection->close_connection();
	}//END of load function



	public function __get($var){ //this "getter" will help us get the postID
		
		switch ($var) {
    		case "postID":
     	   	 	return $this->iPostID;
      	   		break;
   			case "title":
      			return $this->sTitle;
       			break;
       		case "content":
       			return $this->sContent;
       			break;
       		case "photopath1":
       			return $this->sPhotopath1;
       			break;
       		case "photopath2":
       			return $this->sPhotopath2;
       			break;
       		case "date":
       			return $this->sDate;
       			break;
       		case "description":
       			return $this->sDescription;
       			break;
       		case "comments":
       			return $this->aComments;
       			break;
   			default:
       			die($var . "does not exist on page");
        		break;
		} //end of switch var
	} //end of function __get

	public function __set($var, $value){ //this "getter" will help us set the pageID
		
		switch ($var) {
   			case "title":
      		 $this->sTitle = $value;
       		break;
       		case "content":
       		 $this->sContent = $value;
       		break;
   			default:
   			case "photopath1":
       		 $this->sPhotopath1 = $value;
       		break;
       		case "photopath2":
       		 $this->sPhotopath2 = $value;
       		break;
   			case "date":
       		 $this->sDate = $value;
       		break;
       		case "description":
       		 $this->sDescription = $value;
       		break;
   			default:
       		 die($var . "does not exist on page");
        	break;
		} //end of switch var
	} //end of function __set

} // END of post class


//testing load function
		// $oPost = new Post();
		// $oPost->load(5);
		// echo "<pre>";
		// print_r($oPost);
		// echo "</pre>";





//testing getter
		// $oPost = new Post();
		// $oPost->load(1);
		// echo "<pre>";
		// print_r($oPost);
		// echo "</pre>";



?>
