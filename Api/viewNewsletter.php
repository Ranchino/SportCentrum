<?php
    include_once("../Classes/newsletterClass.php");
    
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        try {
            $newsletterhandler = new Newsletter();
            $newsletterResult = $newsletterhandler->getAllNewsletters();
            echo json_encode($newsletterResult);
        }
        catch(PDOException $error) {
            echo json_encode($error->getMessage());
        }
    }else {
        echo json_encode("Post inte satt ${$_SERVER['REQUEST_METHOD']}");
    }
?>
