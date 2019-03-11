<?php
include_once("../Classes/newsletterClass.php");
$newsletter = new Newsletter();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && $_POST['mail'] && $_POST['phone']){
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];

        $sendNews = $newsletter->sendNewsLetter($firstName, $lastName, $mail, $phone);
        echo json_encode($sendNews);

    }else{
        echo json_encode("Vi hittar inte värdet av firstname");
    }

}else{
    echo json_encode("Servern är inte satt till post");
} 

?>