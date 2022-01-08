<?php 

  require_once("config.php");

     if(isset($_POST['email']) AND isset($_POST['pass'])) : 
        $sql = sprintf("SELECT * FROM user WHERE email = '%s' AND pass = '%s'",
          addslashes($_POST['email']),
          addslashes($_POST['pass'])
        );
        $req = $connect->query($sql);
        $nbhits = $req->num_rows;
        
       $record = $req->fetch_object();
      print_r($record);
      //créer une session si $nbhist > 0
      if($nbhits > 0):
        session_start();
        $_SESSION['id_user'] = $record->id;
      endif;
      else : 
        echo "Error";
      endif;


?>