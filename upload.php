<?php

if(isset($_POST['upload'])){

    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];

    $folder = "uploads/".$filename;

    if(move_uploaded_file($tempname,$folder)){

        echo "File uploaded successfully<br>";
        echo "<br>";

        echo "<a href='download.php?file=$filename'>
              <button>Download File</button>
              </a>";

    }else{
        echo "Upload failed";
    }
}

?>