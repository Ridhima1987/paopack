<?php
/****************************************
*		Server of Runner2U Android Application
*
*  
*   Begin: 		 2016
*   Author: 	 Gourav walia 	
*   Email: 		 gouravwalia1990@yahoo.in
*  
*	Edit : 		  2016
*   Version: 	 1.1
*
*	
* 	
*		Supported actions: 
*			1.  authenticateUser
*			    if user is authentiated return friend list
* 		    
*			2.  signUpUser
* 		
*			3.  addNewFriend
* 		
* 			4.  responseOfFriendReqs
*
*			5.  testWebAPI
*************************************/


//TODO:  show error off

require_once("mysql.class.php");

$dbHost = "localhost";
$dbUsername = "speakgga";
$dbPassword = "0T8b3u^T^0#E";
$dbName = "speakgga_runner2u";


$db = new MySQL($dbHost,$dbUsername,$dbPassword,$dbName);

// if operation is failed by unknown reason
define("FAILED", 0);

define("SUCCESSFUL", 1);
// when  signing up, if username is already taken, return this error
define("SIGN_UP_USERNAME_CRASHED", 2);  
// when add new friend request, if friend is not found, return this error 
define("ADD_NEW_USERNAME_NOT_FOUND", 2);

// TIME_INTERVAL_FOR_USER_STATUS: if last authentication time of user is older 
// than NOW - TIME_INTERVAL_FOR_USER_STATUS, then user is considered offline
define("TIME_INTERVAL_FOR_USER_STATUS", 60);

define("USER_APPROVED", 1);
define("USER_UNAPPROVED", 0);


$username = isset($_REQUEST['username'])? $_REQUEST['username'] : NULL;
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : NULL;
$port = isset($_REQUEST['port']) ? $_REQUEST['port'] : NULL;

$toid= isset($_REQUEST['touid']) ? $_REQUEST['touid'] : NULL;
$userid= isset($_REQUEST['uid']) ? $_REQUEST['uid'] : NULL;

$fromid= isset($_REQUEST['fromid']) ? $_REQUEST['fromid'] : NULL;

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
//$user_type=$_REQUEST['type'];
//$user_type="name_of_user";

if ($action == "testWebAPI")
{
	if ($db->testconnection()){
	echo SUCCESSFUL;
	exit;
	}else{
	echo FAILED;
	exit;
	}
}

if ($username == NULL || $password == NULL)	 
{
	echo FAILED;
	exit;
}

$out = NULL;

error_log($action."\r\n", 3, "error.log");
switch($action) 
{
	
	case "authenticateUser":
		
		
		if ($userId = authenticateUser($db, $username, $password)) 
		{					
			
			// providerId and requestId is Id of  a friend pair,
			// providerId is the Id of making first friend request
			// requestId is the Id of the friend approved the friend request made by providerId
			
			// fetching friends, 
			// left join expression is a bit different, 
			//		it is required to fetch the friend, not the users itself
			
			$sql = "select u.Id, u.username,u.type,u.authenticationTime, (NOW()-u.authenticationTime) as authenticateTimeDifference, u.IP,u.customer_name,
										f.providerId, f.requestId, f.status, u.port 
							from friends f
							left join users u on 
										u.Id = if ( f.providerId = ".$userId.", f.requestId, f.providerId ) 
							where (f.providerId = ".$userId." and f.status=".USER_APPROVED.")  or 
										 f.requestId = ".$userId." ";
										 
			//$sqlmessage = "SELECT * FROM `messages` WHERE `touid` = ".$userId." AND `read` = 0 LIMIT 0, 30 ";
			
			$sqlmessage = "SELECT m.id, m.fromuid, m.touid, m.sentdt, m.read, m.readdt, m.messagetext, u.username from messages m \n"
    . "left join users u on u.Id = m.fromuid WHERE `touid` = ".$userId." AND `read` = 0 LIMIT 0, 30 ";
			
	
			if ($result = $db->query($sql))			
			{
					$out .= "<data>"; 
					$out .= "<user userKey='".$userId."' />";
					while ($row = $db->fetchObject($result))
					{
						$status = "offline";
						if (((int)$row->status) == USER_UNAPPROVED)
						{
							$status = "unApproved";
						}
						else if (((int)$row->authenticateTimeDifference) < TIME_INTERVAL_FOR_USER_STATUS)
						{
							$status = "online";
							 
						}
						
						$UserName = $row->username;
						$UserType = $row->type;
                                                $authTime = $row->authenticationTime;  
						
$ProfilePic='';
						$QueryToFindPic = $db->query("select * from tbl_customer_registration where (customer_phone_number = '$UserName' or customer_email_id = '$UserName') and customer_type = '$UserType'");

							
if($db->numRows($QueryToFindPic) > 0){
  $Pic = $db->fetchObject($QueryToFindPic);
$ProfilePic=$Pic->customer_profile_pic;
}else{}

							
						
						
						
						$out .= "<friend  username = '".$row->username."'  status='".$status."' IP='".$row->IP."' userKey = '".$row->Id."'  port='".$row->port."'  name_of_user='".$row->customer_name."' ProfilePic='".$ProfilePic."' AuthTime='".$authTime."'/>";
												
												// to increase security, we need to change userKey periodically and pay more attention
												// receiving message and sending message 
						
					}
						if ($resultmessage = $db->query($sqlmessage))			
							{
							while ($rowmessage = $db->fetchObject($resultmessage))
								{
								$out .= "<message  from='".$rowmessage->username."'  sendt='".$rowmessage->sentdt."' text='".$rowmessage->messagetext."' />";
								$sqlendmsg = "UPDATE `messages` SET `read` = 1, `readdt` = '".DATE("Y-m-d H:i")."' WHERE `messages`.`id` = ".$rowmessage->id.";";
								$db->query($sqlendmsg);
								}
							}
					$out .= "</data>";
			}
			else
			{
				$out = FAILED;
			}			
		}
		else
		{
				// exit application if not authenticated user
				$out = FAILED;
		}
		
	
	
	break;
	
	case "signUpUser":
		if (isset($_REQUEST['email']))
		{
			 $email = $_REQUEST['email'];		
			 	
			 $sql = "select Id from  users 
			 				where username = '".$username."' limit 1";
			 
		
			 				
			 if ($result = $db->query($sql))
			 {
			 		if ($db->numRows($result) == 0) 
			 		{
			 				$sql = "insert into users(username, password, email)
			 					values ('".$username."', '".$password."', '".$email."') ";		 					
						 					
			 					error_log("$sql", 3 , "error_log");
							if ($db->query($sql))	
							{
							 		$out = SUCCESSFUL;
							}				
							else {
									$out = FAILED;
							}				 			
			 		}
			 		else
			 		{
			 			$out = SIGN_UP_USERNAME_CRASHED;
			 		}
			 }				 	 	
		}
		else
		{
			$out = FAILED;
		}	
	break;
	
	case "sendMessage":
	if ($userId = authenticateUser($db, $username, $password)) 
		{	
		if (isset($_REQUEST['to']))
		{
			 $tousername = $_REQUEST['to'];	
			 $message = $_REQUEST['message'];	
				
			 $sqlto = "select Id from  users where username = '".$tousername."' limit 1";
			 
			 
		
					if ($resultto = $db->query($sqlto))			
					{
						while ($rowto = $db->fetchObject($resultto))
						{
							$uto = $rowto->Id;
						}
						/* WHEN 'message' VARIABLE CONTAINS COMMA OPERATOR*/
						if (preg_match('/,/',$message)){
							$GetStringParts = explode(',', $message);
							$FirstPart =  $GetStringParts[0];
							/*WHEN FIRST PART CONTAINS THE MENTIONED STATEMENT*/
							if($FirstPart=="Customer wrote 1 review" || $FirstPart=="Customer wrote 0 review" || $FirstPart=="Item Received" || $FirstPart=="Job has been accepted by the runner" || $FirstPart=="Congratulations on Completion"){
								/*WRITE MESSAGE STATUS TO 'unseen'*/
								$sql22 = "INSERT INTO `messages` (`fromuid`, `touid`, `sentdt`, `messagetext`,`status`) VALUES ('".$userId."', '".$uto."', '".DATE("Y-m-d H:i")."','".$message."', 'unseen');";						
						 					
			 					error_log("$sql22", 3 , "error_log");
								if ($db->query($sql22))	
								{
										$out = SUCCESSFUL;
								}				
								else {
										$out = FAILED;
								}				 		
							 $resultto = NULL;
							}else{
								/*ELSE MESSAGE STATUS TO 'message'*/
								$sql22 = "INSERT INTO `messages` (`fromuid`, `touid`, `sentdt`, `messagetext`,`status`) VALUES ('".$userId."', '".$uto."', '".DATE("Y-m-d H:i")."','".$message."', 'message');";						
						 					
			 					error_log("$sql22", 3 , "error_log");
								if ($db->query($sql22))	
								{
										$out = SUCCESSFUL;
								}				
								else {
										$out = FAILED;
								}				 		
							 $resultto = NULL;
							}
						}/* WHEN 'message' VARIABLE CONTAINS ! OPERATOR*/
						else if(preg_match('/!/',$message)){
							$GetStringParts = explode('!', $message);
							$FirstPart =  $GetStringParts[0];
							/*WHEN FIRST PART CONTAINS THE MENTIONED STATEMENT*/
							if($FirstPart=="Runner announcement"){
								/*WRITE MESSAGE STATUS TO 'unseen'*/
								$sql22 = "INSERT INTO `messages` (`fromuid`, `touid`, `sentdt`, `messagetext`,`status`) VALUES ('".$userId."', '".$uto."', '".DATE("Y-m-d H:i")."','".$message."', 'unseen');";						
						 					
			 					error_log("$sql22", 3 , "error_log");
								if ($db->query($sql22))	
								{
										$out = SUCCESSFUL;
								}				
								else {
										$out = FAILED;
								}				 		
							 $resultto = NULL;
							}else{
								/*ELSE MESSAGE STATUS TO 'message'*/
								$sql22 = "INSERT INTO `messages` (`fromuid`, `touid`, `sentdt`, `messagetext`,`status`) VALUES ('".$userId."', '".$uto."', '".DATE("Y-m-d H:i")."','".$message."', 'message');";						
						 					
			 					error_log("$sql22", 3 , "error_log");
								if ($db->query($sql22))	
								{
										$out = SUCCESSFUL;
								}				
								else {
										$out = FAILED;
								}				 		
							 $resultto = NULL;
							}
						}else{
							/*WHEN 'message' VARIABLE DOESN'T CONTAINS COMMA BUT IT MATCHES WITH THE MENTIONED STATEMENT*/
							if($message=="Customer wrote 1 review" || $message=="Customer wrote 0 review" || $message=="Item Received" || $message=="Job has been accepted by the runner" || $message=="Congratulations on Completion"){
								
								/*WRITE MESSAGE STATUS TO 'unseen'*/
								$sql22 = "INSERT INTO `messages` (`fromuid`, `touid`, `sentdt`, `messagetext`,`status`) VALUES ('".$userId."', '".$uto."', '".DATE("Y-m-d H:i")."','".$message."', 'unseen');";												 					
			 					error_log("$sql22", 3 , "error_log");
								if ($db->query($sql22))	
								{
										$out = SUCCESSFUL;
								}				
								else {
										$out = FAILED;
								}				 		
							 $resultto = NULL;
							}else{
								
								/*ELSE MESSAGE STATUS TO 'message'*/
								$sql22 = "INSERT INTO `messages` (`fromuid`, `touid`, `sentdt`, `messagetext`,`status`) VALUES ('".$userId."', '".$uto."', '".DATE("Y-m-d H:i")."','".$message."', 'message');";						
						 					
			 					error_log("$sql22", 3 , "error_log");
								if ($db->query($sql22))	
								{
										$out = SUCCESSFUL;
								}				
								else {
										$out = FAILED;
								}				 		
							 $resultto = NULL;
							}
						}
						    
					}	
			 				 	 	
		$sqlto = NULL;
		}
		}
		else
		{
			$out = FAILED;
		}	
	break;
	
	case "addNewFriend":
		$userId = authenticateUser($db, $username, $password);
		if ($userId != NULL)
		{
			
			if (isset($_REQUEST['friendUserName']))			
			{				
				 $friendUserName = $_REQUEST['friendUserName'];
				 
				 $sql = "select Id from users 
				 				 where username='".$friendUserName."' 
				 				 limit 1";
				 if ($result = $db->query($sql))
				 {
				 		if ($row = $db->fetchObject($result))
				 		{
				 			 $requestId = $row->Id;
				 			 
				 			 if ($row->Id != $userId )
				 			 {
							 
							
							
	 $sql2="select * from friends where (providerId='".$requestId."' AND requestId='".$userId."' ) OR  (providerId='".$userId."' AND requestId='".$requestId."' )";
						//	$sql3="select * from friends where providerId='".$userId."' and requestId='".$requestId."'";
							
							//if (mysql_num_rows($sql2) == 0 or mysql_num_rows($sql3)==0) 
							if (mysql_num_rows($sql2) == 0 )
							{ 
  								 //results are empty, do something here 
  								 
  								  $sql = "insert into friends(providerId, requestId, status)
				 				  					 values(".$userId.", ".$requestId.", ".USER_APPROVED.")";
							 
												 	if ($db->query($sql))
												 	{
									 					$out = SUCCESSFUL;
												 	}
												 	else
												 	{
									 					$out = FAILED;
									 				}
							} 
							
							
							
							
								
							
							
							  
							
							}
							else
							{
								$out = FAILED;  // user add itself as a friend
							} 		 				 				  		 
				 		}
				 		else
				 		{
				 			$out = FAILED;			 			
				 		}
				 }				 				 
				 else
				 {
				 		$out = FAILED;
				 }				
			}
			else
			{
					$out = FAILED;
			} 			
		}
		else
		{
			$out = FAILED;
		}	
	break;
	
	case "responseOfFriendReqs":
		$userId = authenticateUser($db, $username, $password);
		if ($userId != NULL)
		{
			$sqlApprove = NULL;
			$sqlDiscard = NULL;
			if (isset($_REQUEST['approvedFriends']))
			{
				  $friendNames = split(",", $_REQUEST['approvedFriends']);
				  $friendCount = count($friendNames);
				  $friendNamesQueryPart = NULL;
				  for ($i = 0; $i < $friendCount; $i++)
				  {
				  	if (strlen($friendNames[$i]) > 0)
				  	{
				  		if ($i > 0 )
				  		{
				  			$friendNamesQueryPart .= ",";
				  		}
				  		
				  		$friendNamesQueryPart .= "'".$friendNames[$i]."'";
				  		
				  	}			  	
				  	
				  }
				  if ($friendNamesQueryPart != NULL)
				  {
				  	$sqlApprove = "update friends set status = ".USER_APPROVED."
				  					where requestId = ".$userId." and 
				  								providerId in (select Id from users where username in (".$friendNamesQueryPart."));
				  				";		
				  }
				  				  
			}
			if (isset($_REQUEST['discardedFriends']))
			{
					$friendNames = split(",", $_REQUEST['discardedFriends']);
				  $friendCount = count($friendNames);
				  $friendNamesQueryPart = NULL;
				  for ($i = 0; $i < $friendCount; $i++)
				  {
				  	if (strlen($friendNames[$i]) > 0)
				  	{
				  		if ($i > 0 )
				  		{
				  			$friendNamesQueryPart .= ",";
				  		}
				  		
				  		$friendNamesQueryPart .= "'".$friendNames[$i]."'";
				  		
				  	}				  	
				  }
				  if ($friendNamesQueryPart != NULL)
				  {
				  	$sqlDiscard = "delete from friends 
				  						where requestId = ".$userId." and 
				  									providerId in (select Id from users where username in (".$friendNamesQueryPart."));
				  							";
				  }						
			}
			if (  ($sqlApprove != NULL ? $db->query($sqlApprove) : true) &&
						($sqlDiscard != NULL ? $db->query($sqlDiscard) : true) 
			   )
			{
				$out = SUCCESSFUL;
			}
			else
			{
				$out = FAILED;
			}		
		}
		else
		{
			$out = FAILED;
		}
	break;
	case "friendList":
         
         $sql = $db->query("select * from users 
					where (username = '$username' or email = '$username') AND password = '$password' limit 1");
	
	$out = NULL;
	
		while($row = $db->fetchObject($sql))
		{
				$out = $row->Id;
				
				$sql = "update users set authenticationTime = NOW(), 
																 IP = '".$_SERVER["REMOTE_ADDR"]."' ,port = 15145 where Id = ".$row->Id." limit 1";
				
				$db->query($sql);				
								
								
		}		
	
	
	$userId=$out;
        $result = $db->query("select u.Id, u.username,u.type,u.authenticationTime, (NOW()-u.authenticationTime) as authenticateTimeDifference, u.IP,u.customer_name,
										f.providerId, f.requestId, f.status, u.port 
							from friends f
							left join users u on 
										u.Id = if ( f.providerId = ".$userId.", f.requestId, f.providerId ) 
							where (f.providerId = ".$userId." and f.status=".USER_APPROVED.")  or 
										 f.requestId = ".$userId." ");
                 
while ($row = $db->fetchObject($result))
					{

						$status = "offline";
						if (((int)$row->status) == USER_UNAPPROVED)
						{
							$status = "unApproved";
						}
						else if (((int)$row->authenticateTimeDifference) < TIME_INTERVAL_FOR_USER_STATUS)
						{
							$status = "online";
							 
						}
						
						$UserName = $row->username;
						$UserType = $row->type;
                                                $authTime = $row->authenticationTime;  
						
$ProfilePic='';
						$QueryToFindPic = $db->query("select * from tbl_customer_registration where (customer_phone_number = '$UserName' or customer_email_id = '$UserName') and customer_type = '$UserType'");

							
if($db->numRows($QueryToFindPic) > 0){
  $Pic = $db->fetchObject($QueryToFindPic);
$ProfilePic=$Pic->customer_profile_pic;
}else{}

$arr=array("username" =>$row->username,"status"=>$status, "IP"=>$row->IP, "userKey" => $row->Id,  "port"=>$row->port,  "name_of_user"=>$row->customer_name,"ProfilePic"=>$ProfilePic,"AuthTime"=>$authTime);
echo json_encode($arr); 
}





          	
             break;

case "messageList":
             $sqlmessage = "SELECT * from messages where touid=".$toid." and fromuid=".$fromid. "";

			
if ($resultmessage = $db->query($sqlmessage))			
				{

				while ($rowmessage = $db->fetchObject($resultmessage))
				{

				 $arr=array("sendt"=>$rowmessage->sentdt, "text"=>$rowmessage->messagetext);
echo json_encode($arr);
	
								}
							}	
                 




             break;

	default:
		$out = FAILED;		
		break;	
}

echo $out;



///////////////////////////////////////////////////////////////
function authenticateUser($db, $username, $password)
{
	
	$sql22 = "select * from users 
					where (username = '".$username."' or email = '".$username."') and password = '".$password."' 
					limit 1";
	
	$out = NULL;
	if ($result22 = $db->query($sql22))
	{
		if ($row22 = $db->fetchObject($result22))
		{
				$out = $row22->Id;
				
				$sql22 = "update users set authenticationTime = NOW(), 
																 IP = '".$_SERVER["REMOTE_ADDR"]."' ,
																 port = 15145 
								where Id = ".$row22->Id."
								limit 1";
				
				$db->query($sql22);				
								
								
		}		
	}
	
	return $out;
}

?>