<?php
    include_once("../Classes/newsletterClass.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        try{
            if($_POST['collection'] == "newsletter"){
                $newsletterhandler = new Newsletter();
                if($_POST['action'] == "get"){
                    $newsletterResult = $newsletterhandler->getAllNewsletters();
                    echo json_encode($newsletterResult);
                }
                exit;
            }
        }
        catch(PDOException $error) {
            echo json_encode($error->getMessage());
        }
    }else {
        echo json_encode("Post inte satt");
    }
?>
