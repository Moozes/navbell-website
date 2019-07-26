<?php
    //what to show-----------------------------------------------------------------
    session_start();
    $challenges = '
        [
            {
                "id" : "1",
                "point" : "100",
                "module" : "OOP",
                "story" : "POO exercice",
                "nbOfQuestions" : "1",
                "nbPersonSolved" : "1",
                "resource" : [{"nom" : "wiki", "url" : "fb.com"}, {"nom" : "cours pdf", "url" : "jahob.com"}]
            },
            {
                "id" : "2",
                "point" : "150",
                "module" : "Mathematics ",
                "story" : "Math exercice",
                "nbOfQuestions" : "2",
                "nbPersonSolved" : "2",
                "resource" : [{"nom" : "moussa", "url" : "moussa.com"}]
            },
            {
                "id" : "3",
                "point" : "200",
                "module" : "Physics",
                "story" : "Experemental",
                "nbOfQuestions" : "3",
                "nbPersonSolved" : "3",
                "resource" : [{"nom" : "omar", "url" : "omar.com"}]
            }

        ]
    ';
    // there is a problem in json notation concerning the resource
    $challenges = json_decode($challenges);
    
    // session_start();
    // $challenges = $_SESSION['challenges'];

    
       
?>