<?php

function getPost()
{
    $r = null;
    if(isset($_POST['name']) && isset($_POST['moral'])){
      $r = new Robot();
      $moral= $_POST['moral'];
      $name = $_POST['name'];
      $dis = false;
      if(empty($name) && empty($moral)){
        $r = new Robot();
        $dis = true;
      } else {
          if(!empty($name)){
            $re = '/([A-Za-z]{0,2}-[0-9]{0,4})/';
            preg_match($re, $name, $matches, PREG_OFFSET_CAPTURE, 0);
            if(!empty($matches)){
              $t = $matches[0][0];
              $ex = explode("-",$t);
              if(!empty($ex[1])){
                $r->setName($matches[0][0]);
                $dis = true;
              } else{
                $r->setName($ex[0]."-".rand(1, 9999));
                $dis = true;
              
              }
            } else {
              $dis = true;
            }
          }

          if(!empty($moral)){
            $r->setMoral($moral);
          }
          
          if(!empty($moral) && empty($name)){
            $dis = true;
          }
      }
      if($dis){
        $r->display();

      }
    }
}