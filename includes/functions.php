
<?php

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

 function toIndex(){
     header("Location: index.php");
 }

?>
