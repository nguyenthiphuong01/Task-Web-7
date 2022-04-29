<?php 
        if (isset($_POST['upload']) && isset($_FILES['file']))
        {
            #print_r($_FILES);
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_tmpname = $_FILES['file']['tmp_name'];
            $file_error = $_FILES['file']['error'];
            $file_size = $_FILES['file']['size'];
            $file_dr = 'upload/';    
           
           $file_ext = explode('.', $file_name);
            $file_actualext = strtolower(end($file_ext));
            $allowed = array('jpg', 'jpeg', 'png', 'gif');
            $hash_filename = md5($file_name);
            $file_store = $file_dr.$hash_filename.'.'.$file_actualext;

            if (in_array($file_actualext, $allowed)) {
                if ($file_error === 0) {
                    if ($file_size < 2097152) {
                        echo $hash_filename.".".$file_actualext."<br/>";
                        if (move_uploaded_file($file_tmpname, $file_store)) {
                            echo "File uploaded successfully!";
                        }
                    } else {
                        echo "Your file is too big!";
                    }
                } else {
                    echo "There was an error!";
                }
            } else {
                echo "You cannot upload files of this type!";
            }
        }
                
?>
