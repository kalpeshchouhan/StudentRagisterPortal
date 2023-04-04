<?php
          $to_mail = "kalpeshchouhan2001@gamil.com";
          $subject = "Email activation";
          $body = "Hi, click here to activate your account";
          $headers = "FROM: kalpeshchouhan2000@gmail.com";
           
          if(mail($to_mail, $subject, $body, $headers)){
              echo "succes";
          }
          else{
              echo "faild";
          }


            ?>  