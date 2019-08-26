<?php
//{"challengeid" : "18", "id" : "31", "challenges" : [{"time" : "true", "questionid" : "4", "optionid" : "86"}]}
  include 'functions/functions.php';

  $op = 'solve';
  $data = '{"challengeid" : "18", "id" : "31", "challenges" : [{"time" : "true", "questionid" : "4", "optionid" : "86"}]}';
  $data = json_decode($data, true);
  $result  = postapi($url, $op, $data);
  switch($result->reponse) {
    case '-1':
    echo 'some thing went wrong';
    break;
    case '1':
    var_dump($result);
    break;
  }
?>



