<?php
    if(isset($_POST['start'])){
        // $op = "questions";
        // $data = array("id"=>$_POST['id']);
        // $result = postapi($url, $op, $data);
        // switch($result->reponse){
        //     case "-1":
        //         echo '<script>alert("some thing went wrong");</script>';
        //     break;
        //     case "1":
        //         //put $result in the session and redirect to start challenge page
        //         //dont forget that in start_challenge.php page you need to post the challenge id and the user id 
        //         //the user id i think its already in a $_SESSION['id'] or $_SESSION['user_info'] or $_SESSION['user_signup_info']   DONT OVERIDE IT WITH ANOTHER SESSION
        //         session_start();
        //         $_SESSION['challenge_id'] = $_POST['id'];
        //         $_SESSION['questions'] = $result;
        //         header('location: startQuiz.php');//i dont know the name of the page yet
                
        //     break;
        // }

        $id = $_POST['id']; 

        $questions1 = '
            
                
            [
                            {
                                "question" : "what does oop stands for?",
                                "choiceA" : "object oriented programming",
                                "choiceB" : "procedural programming",
                                "choiceC" : "eclarative programming",
                                "correct" : "A"
                            }
            ]
            
        ';

        $questions2 = '
            
                
            [
                            {
                                
                                "question" : "is the harmonic serie divergente?",
                                "choiceA" : "yes",
                                "choiceB" : "no",
                                "choiceC" : "we cant determine",
                                "correct" : "A"
                                
                            },
                            {
                                
                                "question" : "what is the derivative of arctg(x)",
                                "choiceA" : "ln(x)",
                                "choiceB" : "1/(x^2+1)",
                                "choiceC" : "1/(x^2-1)^0.5",
                                "correct" : "B"
                                
                            }
            ]
            
        ';
        $questions3 = '
            
                
            [
                            {
                                
                                "question" : "the first law of newton talks about : ",
                                "choiceA" : "inertia",
                                "choiceB" : "the heat",
                                "choiceC" : "gravity",
                                "correct" : "A"
                                
                            },
                            {
                                
                                "question" : "the second law of newton is : ",
                                "choiceA" : "the reaction force law",
                                "choiceB" : "called the fundamental law of physics",
                                "choiceC" : "momentum law ",
                                "correct" : "B"
                                
                            },
                            {
                                
                                "question" : "the third law of newton is : ",
                                "choiceA" : "the friction law",
                                "choiceB" : "called the fundamental law of physics",
                                "choiceC" : "the reaction force law",
                                "correct" : "C"
                                
                            }
            ]
            
        ';



        session_start();
        
        switch($id) {
            case "1":
                $_SESSION['questions'] = $questions1;
            break;
            case "2":
                $_SESSION['questions'] = $questions2;
            break;
            case "3":
                $_SESSION['questions'] = $questions3;
            break;
        }


        header('location: startQuiz.php');
    }
?>