<?php     
            $to_email = 'trantien120498@gmail.com';
            $subject = 'Testing PHP Mail';
            $message = 'This mail is sent using the PHP mail function';
            $headers = 'From:datn91380@gmail.com';
            mail($to_email,$subject,$message,$headers);
        ?>