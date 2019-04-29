<?php
    //what to show-----------------------------------------------------------------
    //session_start()
    $challenges = '
        [
            {
                "id" : "157",
                "point" : "1337",
                "module" : "poo",
                "story" : "ghjk",
                "nbOfQuestions" : "4",
                "nbPersonSolved" : "8"
            },
            {
                "id" : "157",
                "point" : "1337",
                "module" : "math",
                "story" : "ghjk",
                "nbOfQuestions" : "4",
                "nbPersonSolved" : "8"
            } 

        ]
    ';
    // there is a problem in json notation concerning the resource
    $challenges = json_decode($challenges);
    //end of what to show-----------------------------------------------------------


    // filters
    
       
?>