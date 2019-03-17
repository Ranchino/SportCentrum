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
                //$fileNewName = uniqid('', true).".".$fileLastPartLowerCse;
                $categoryName = $_POST["categoryName"];
                if($categoryName == "women") {

                    $fileDestination1 = "../Images/womensClothes/".$fileName;
                    move_uploaded_file($fileTmp, $fileDestination1);
                    echo "<h1 style='font-size: 1.5em;'>The file src: ".$fileName."<br>". " The catgory chossen: ".$categoryName."</h1>";
    
                    exit;
                } elseif ($categoryName == "men") {

                    $fileDestination2 = "../Images/mensClothes/".$fileName;
                    move_uploaded_file($fileTmp, $fileDestination2);
                    echo "<h1 style='font-size: 1.5em;'>The file src: ".$fileName."<br>". " The catgory chossen: ".$categoryName."</h1>";
                    exit;
                }elseif ($categoryName == "children") {

                    $fileDestination3 = "../Images/kidsClothes/".$fileName;
                    move_uploaded_file($fileTmp, $fileDestination3);
                    echo "<h1 style='font-size: 1.5em;'>The file src: ".$fileName."<br>". " The catgory chossen: ".$categoryName."</h1>";
                    exit;
                }else {
                    $fileDestination4 = "../Images/accessories/".$fileName;
                    move_uploaded_file($fileTmp, $fileDestination4);
                    echo "<h1 style='font-size: 1.5em;'>The file src: ".$fileName."<br>". " The catgory chossen: ".$categoryName."</h1>";
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