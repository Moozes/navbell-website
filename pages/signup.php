<?php

/*if(0) {
	// antihacker(); // for next time 
	die("Permission denied");
}*/

// don't forget filter inputs 

if(isset($_POST["submit"])){ // empty .... 
			$op = "check";
			$data = array("email"=>$_POST["email"]); // testing email 
			$result = postapi($url,$op,$data);
            switch($result->reponse){
                case '0' :echo 'you re banned';
                break;
                case '1' : 
                	$email = $_POST["email"];
                	$fname = $_POST["fname"];
                	$lname = $_POST["lname"];
                	$pass = $_POST["sgpassword"];
                	$pass2 = $_POST["confirmSgpassword"];// i dont need this
                	$year = $_POST["year"];
                	
                	$op = "signin";
					$data = array('year'=>$year,'fname' =>$fname ,'lname'=>$lname,'email'=>$email,'password'=>$pass);
					
					switch($_FILES['img']['error']){
						case 0:
							if($_FILES['img']['type'] == 'image/jpeg'){
								$data['pictures'] = base64_encode(file_get_contents($_FILES['img']['tmp_name']));
							} else {
								echo 'your image should be in jpeg format';
								//should i use die() to not run postapi()
							}
						break;
						case 1:
						case 2:
							echo 'image size too big';
							//should i use die()
						break;
						case 4:
							//user didn't choose image
							//should i send empty string as an image
						break;
						default: echo 'the image didn\'t upload';  

					}
                	$result = postapi($url,$op,$data);
                	switch ($result->reponse) {
                		case '-1':
                			echo "<script> alert('something went wrong');</script>";
                			break;
						case '1':
							echo "<script> alert('done !');</script>";
							session_start();
							$_SESSION['result'] = $result;
							//header('location: profile or main')
                			break;
                		
                	}

                ;
                break;
                case '2' :echo("<script> alert('u re already subscribed');</script>");//dont forget to redirect to login.php

                break;
                case '3' :echo('<script> alert("machi mn esi 404 "); </script>');
                break;
                case "-1":echo('<script> alert("something went wrong");</script>');
                break;

            }
        }


?>