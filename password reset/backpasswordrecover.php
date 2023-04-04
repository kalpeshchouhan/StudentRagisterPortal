<?php

  session_start();
 
$connection = mysqli_connect('localhost', 'root');
if($connection){
    echo "succes";

}
else{
    echo "faild";
}

 mysqli_select_db($connection, 'stud_details');


 $email =  mysqli_real_escape_string($connection, $_POST['myemail']);
 
 $emailquery = "SELECT * FROM studsinup_data WHERE Email = '$email'";       

      $result = mysqli_query($connection, $emailquery);
    
      $num = mysqli_num_rows($result);

      if($num>0)
      {

        $userdata  = mysqli_fetch_assoc($result);

        $userdata = $userdata['username'];
        $id = $userdata['id'];

          $subject = "Password resect";
          $body = "Hi, $username. Click here to reset  your password
          http://localhost/studentone/resetpassword.php?id=$id";
          
          $sender_eamil = "FROM: kalpeshchouhan2000@gamil.com";

          if(mail($eamil ,$subject, $body, $sender_eamil)){
            //   $_SESSION['msg'] = "chech your maiil to reset your password $eamil"
            //   header('location:login.php');
            echo "chech eamil";

          }
          else{
              echo "faild";
          }
        }

?>
 <!-- && PASSD = '$passward'"; -->