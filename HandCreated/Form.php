<?php
    if (isset($_POST['name']) && isset($_POST['email']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $to = 'mr_treadwell@live.co.uk';
        $subject = "New Web Form Enquiry paultreadwell.ga";


        $body = '<html>
                    <body>
                        <h2>Feedback - paultreadwell.ga </h2>
                        <hr>
                        <p>Name :<br>' .$name.'</p>
                        <p> Email<br>'.$email.'</p>
                    </body>
                </html>';
        $headers = "From: "$.name." <".$email.">\r\n";
        $headers .= "Reply-To: ".$email."\r\n";
        $headers .="MIME-Version: 1.0\r\n";
        $headers .="Content-type: text/html; charset-utf-8";

        //send

        $send = mail($to, $subject);
        if ($send)
        {
            echo '<br>';
            echo 'Thank you for contacting me. I will get back to you shortly';
        }
        else
        {
            echo'error';
        }

    }


?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="Main.css" type="text/css"/>
        <meta charset="utf-8">
    </head>

    <body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="YourName"> <br>
        <input type="text" name="email" placeholder="Your email"> <br>
        <button type="submit"> Send</button>
    </form>
    </body>
    <!--
    <body>
             <div class="container" id="contactMeContainer">
                  <form id="contact" action="" method="post">
                    <h3 class="H3contactForm">CONTACT ME</h3>
                    <fieldset>
                      <input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Your Email Address" type="email" tabindex="2" name="email" required>
                    </fieldset>

                    <fieldset>
                      <input placeholder="Your Phone Number" type="tel" tabindex="3" name="phone" required>
                    </fieldset>
                    <fieldset>
                      <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" name="url" required>
                    </fieldset>
                    <fieldset>
                      <textarea placeholder="Type your Message Here...." tabindex="5" name="message" required></textarea>
                    </fieldset>

                    <fieldset>
                      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                  </form>
                </div>
    </body>
-->
</html>
