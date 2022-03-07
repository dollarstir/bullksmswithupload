<?php
include 'core.php';




if (isset($_POST['bts'])) {

 $key="4fwUNOI06B2HvAXKhFGIW8UW5";
$sender = $_POST['sender'];
$message = $_POST['message'];
$numbers= $_POST["numbers"];
// $fileinfo=PATHINFO($_FILES["tt"]["name"]);
//                 $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
//                 move_uploaded_file($_FILES["tt"]["tmp_name"],"upload/" . $newFilename);
//                 $location="upload/" . $newFilename;
                
                
                
//                 $myfile = fopen($location, "r") or die("Unable to open file!");
                
                
                
//                 $numbers= fgets($myfile) ;
//                 echo  fgets($myfile) ;
                
//                     fclose($myfile);






// Output one line until end-of-file

  


        if (empty($sender)){

            echo "please enter Name";
            
            
        }
        elseif(empty($message)){

            echo "please enter message";

        }
        
        elseif (strlen($sender)>11) {
            echo "please enter Name less than 12";
        }

        else{

        //     if (empty($_POST['numbers'])) {


        //         $fileinfo=PATHINFO($_FILES["tt"]["name"]);
        //         $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
        //         move_uploaded_file($_FILES["tt"]["tmp_name"],"upload/" . $newFilename);
        //         $location="upload/" . $newFilename;
                
                
                
        //         $myfile = fopen($location, "r") or die("Unable to open file!");
                
                
                
        //         $numbers= fgets($myfile) ;
        //         echo  fgets($myfile) ;
                
        //             fclose($myfile);
        //             # code...
        //     } 
        //  else {
                

        //             $numbers = $_POST['numbers'];
        //             # code...
        //     }

            echo sendMessage($key,$numbers,$message,$sender);
        }
    # code...
}


 



?>