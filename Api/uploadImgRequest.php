<?php
$method = $_SERVER["REQUEST_METHOD"];
if($method == "POST") {
    if(isset($_POST["submit"])) {
        $file = $_FILES["fileToUpload"];
        $fileName = $_FILES["fileToUpload"]["name"];
        $fileTmp= $_FILES["fileToUpload"]["tmp_name"];
        $fileType = $_FILES["fileToUpload"]["type"];
        $fileSize = $_FILES["fileToUpload"]["size"];
        $fileError = $_FILES["fileToUpload"]["error"];
        //Here we get the last part of the url 
        $fileLastPart =explode(".", $fileName);
        $fileLastPartLowerCse = strtolower(end($fileLastPart));

        $allowedFormat = array("jpeg", "jpg", "png");
        if(in_array($fileLastPartLowerCse,$allowedFormat )) {
            if($fileError == 0) {
                $fileNewName = uniqid('', true).".".$fileLastPartLowerCse;
                $categoryName = $_POST["categoryName"];
                if($categoryName == "women") {

                    $fileDestination1 = "../Images/womensClothes/".$fileNewName;
                    move_uploaded_file($fileTmp, $fileDestination1);
                    echo "The file src: ". $fileNewName ."<br>". " The catgory chossen: ".$categoryName;
    
                    exit;
                } elseif ($categoryName == "men") {

                    $fileDestination2 = "../Images/mensClothes/".$fileNewName;
                    move_uploaded_file($fileTmp, $fileDestination2);
                    echo "The file src: ". $fileNewName ."<br>"." The catgory chossen: ".$categoryName;
                    exit;
                }elseif ($categoryName == "children") {

                    $fileDestination3 = "../Images/kidsClothes/".$fileNewName;
                    move_uploaded_file($fileTmp, $fileDestination3);
                    echo "The file src: ". $fileNewName ."<br>"."The catgory chossen: ".$categoryName;
                    exit;
                }else {
                    $fileDestination4 = "../Images/accessories/".$fileNewName;
                    move_uploaded_file($fileTmp, $fileDestination4);
                    echo "The file src: ". $fileNewName ."<br>". " The catgory chossen: ".$categoryName;
                    exit;
                }
                

            } else {
                echo "There is an error in this file";
            }
        
        } else {
            echo "This format is allowed";
        }
    } else {

        echo "you did not submitted";
    }
} else {
    echo "We intr";
}

?>