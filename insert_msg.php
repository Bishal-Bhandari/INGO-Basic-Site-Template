<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
<?php

include("admin/dbcon.php");

    if(isset($_POST['send_msg'])){

        $name =($_POST['fname']);
        $email =($_POST['email']);
        $msg =($_POST['fmsg']);
      

    $insert_msg = "INSERT INTO query_msg (full_name,email,full_msg) VALUES ('$name','$email','$msg')";

    $insert_pro = mysqli_query($con, $insert_msg);

    if($insert_pro)
    		{

        echo "<script>alert('Message sent!!!')</script>";
        echo "<script>window.location = 'index.php';</script>";
            }
            else
            {
            	 echo "<script>alert('Error!!!')</script>";
            	 echo "<script> window.location = 'contact.php';</script>";
            }
}

?>
</body>
</html>
