<?php
 if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message']; 


    $mailTo = "guigzprovisoire@gmail.com"; 
    $headers = "From: ".$mailFrom;
    $txt = "Vous avez un message ".$name.".\n\n".$message;


    mail($mailTo, $name, $txt, $headers); 

    header("Location: index.php?MessageEnvoye");
 }

?>