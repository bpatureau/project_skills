<?php 
    require_once("config.php");
   

    if($_SERVER['REQUEST_METHOD'] == 'GET'):
      if(isset($_GET['email'])) : 
        $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $_GET['email']);
        $req = $connect->query($sql);
        $arrayDatas['nbhits'] = $req->num_rows;
        
        while($record = $req->fetch_object()) {
            $results[] = $record;
        }
        $arrayDatas['records'] = (isset($results)) ? $results : "";
        header('Content-Type: application/json');
        echo json_encode($arrayDatas);
      
      endif;
    
    endif;


    exit;
