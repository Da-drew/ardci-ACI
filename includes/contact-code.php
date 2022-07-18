<!-- php for sending email -->
<?php
    if(isset($_POST['send']))
    {
        $to = "rightsup.22@gmail.com";
        $sender = $_POST['email'];
        $subject = $_POST['subject'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$name."\r\n".
                    'Reply-To: '.$sender."\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        $body = "<html>";
        $body .= "<body style='margin: 0; padding: 0; font-family: Work Sans, sans-serif;width:600px;'><style>@import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap');</style>";
        $body .="<div style='display:flex;'>
        <section style='overflow-x:hidden; width: 430px;'>
        <div class='conatainer-body' style='background: url(https://i.ibb.co/NT1rHqy/email-bg.png) center center / cover no-repeat; padding-bottom: 2rem'>
            <div class='email-body' style='padding-top: 24rem;'>
                <div class='email-title-header'>
                    <h4 style='color:#a47850;font-weight: 400;text-align: center;line-height: 1.7rem;'>ARDCI CORPORATE INN EMAIL VIA WEBSITE<br> 
                    CONTACT PAGE</h4>
                </div>
                <div class='email-form-details' style='margin: 0 5%; margin-top: 1rem;'>
                    <div class='from-message'style='display:flex;'>
                        <p style='width: 30%; text-align: right; padding-right: 15px;'>From:</p>
                        <p style='width: 70%; font-size: 0.9rem;'><a href='mailto:".$sender."'>".$sender."</a></p>
                    </div>
                    <div class='from-message'style='display:flex;'>
                        <p style='width: 30%; text-align: right; padding-right: 15px;'>Name:</p>
                        <p style='width: 70%;font-weight: 600;'>".$name."</p>
                    </div>
                    <div class='from-message'style='display:flex;'>
                        <p style='width: 30%; text-align: right; padding-right: 15px;'>Message:</p>
                        <p style='width: 70%; font-size: 0.8rem; line-height: 1.3rem'>".$message."</p>
                    </div>
                </div>
            </div>
            <div class='email-footer'style='margin: 0 12%; margin-top: 3rem; text-align: center;'>
                <p class='footer-top' style='margin-bottom: 0.5rem;'>© 2022 ARDCI Corporate Inn. All Rights Reserved</p>
                <p class='footer-bottom' style='font-size: 0.8rem;font-weight: 300'>This message was sent from aci website</p>
            </div>
        </div>
        </section>
        </div>";
        $body .= "</body></html>";

        if(mail($to, $subject, $body, $headers)){
            echo '<script>alert("Your Message has been successfully sent!")</script>';       
        }
        else{
            echo '<script>alert("Message Failed!")</script>';
        }
    }
?>
<!--end php for sending email -->