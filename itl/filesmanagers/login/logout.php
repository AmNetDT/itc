<?php session_start() ;?>
<?php 
    
    session_unset();
    session_destroy();

    $json =array(
        "status"=>200
    );

    echo json_encode($json);
    
?>