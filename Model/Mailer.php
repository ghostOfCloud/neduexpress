<?php
require "DB.Connect.Table.php";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

Class PhpMail extends Database{
    private $host = "www.growvest.org";
    private $username = "info@growvest.org";
    private $password = "passwordAsM";
    private $host_name = "Growvest Limited";

    public function WelcomeMessage($email, $fname, $password){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $this->host;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $this->username;                     // SMTP username
            $mail->Password   =  $this->password;                               // SMTP password
            $mail->SMTPSecure = 'ssl';       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above         

            //Recipients
            $mail->setFrom($this->username, $this->host_name);
            $mail->addAddress($email, $email);        // Add a recipient
            $mail->AddBCC('info@growvest.org', 'Admin');      // Add a recipient

        
            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Welcome to Growvest Limited ';
        
            $mail->Body  = "
                ********************************<br/>
                Welcome, $fname ! </br/>
                ******************************** <br/>

                Thanks for using Growvest Limited. We are thrilled to have you on board.<br/><br/>

                For reference, here is your login information: <br/>
                    Email: $email <br/>
                    Password: $password <br/>
                    Login Page: http://www.growvest.org/login.html <br/> <br/>

                We recommend that you explore our available funds portfolio <br/><br/>

                The next step is to login and deposit to your balance to start earning on our platform and also have access to our amazing benefits<br/><br/>

                If you have any questions, feel free to contact our customer support team via contact@growvest.org.<br/><br/>

                Thanks,<br/>
                Growvest Limited <br/><br/>
                
                (c) 2021 Growvest Limited. All rights reserved.
                
            ";
            
            return $mail->send();
            // header("location: ../View/product.php");
            // echo "<script>alert('Registration Successful.'); window.location='../page-login.html'</script>";
            die();
        } catch (Exception $e) {
            return $mail->ErrorInfo;
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // header("location: ../");
            die();

        }

    }

    public function DepositAlert($email, $name, $amount) {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $this->host;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $this->username;                     // SMTP username
            $mail->Password   =  $this->password;                               // SMTP password
            $mail->SMTPSecure = 'ssl';       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above         

            //Recipients
            $mail->setFrom($this->username, $this->host_name);
            $mail->addAddress($email, $name);  
            $mail->AddBCC('info@growvest.org', 'Admin');      // Add a recipient

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Growvest Limited - Deposit Alert';

            $mail->Body  = "
                ******************************** <br/>
                Hi, $name ! <br/>
                ******************************** <br/><br/>

                A deposit request of $amount USD has been initiated on your account, kindly proceed to complete the deposit to wallet address below to activate your account. <br/>
                
                Upload your payment slip or any prove of deposit to enable faster processing of the deposit. <br/>

                <h3>Deposit Information</h3>
                <ul>
                <li><span class='text-bold text-success'>Wallet Address: <span>1KKVP5eVX47Xdp2wpWg25pmhbnwcecMFo6 </li>
                </ul>

                If you did not initiate this action, please contact our support team immediately via info@growvest.org !. <br/>

                If you have any questions, feel free to contact our customer support team via contact@growvest.org <br/><br/>

                Thanks, <br/>
                Growvest Limited <br/><br/><br/>
                
                (c) 2021 Growvest Limited. All rights reserved.
                
            ";
            
            return $mail->send();
            // header("location: ../View/product.php");
            // echo "<script>alert('Registration Successful.'); window.location='../page-login.html'</script>";
            die();
        } catch (Exception $e) {
            return $mail->ErrorInfo;
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // header("location: ../");
            die();

        }

    }

    public function DepositActivated($email, $name, $amount, $roi, $period, $validity_period){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $this->host;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $this->username;                     // SMTP username
            $mail->Password   =  $this->password;                               // SMTP password
            $mail->SMTPSecure = 'ssl';       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above         

            //Recipients
            $mail->setFrom($this->username, $this->host_name);
            $mail->addAddress($email, $email);        // Add a recipient

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Growvest Limited - Deposit Completed';

            $mail->Body  = "
                ********************************<br/>
                Hi, $name ! <br/>
                ********************************<br/><br/>

                Your deposit of $amount USD on your account was successful.

                Withdrawal will be active on your account after $period <br/><br/>

                For reference. here is your account info! <br/>
                    Amount Deposited: $amount USD <br/>
                    Daily ROI: $roi USD<br/>
                    Validity Period: $validity_period <br/><br/><br/>
                

                If you did not initiate this action, please contact our support team immediately via info@growvest.org !. <br/>

                If you have any questions, feel free to contact our customer support team via contact@growvest.org.<br/><br/><br/>

                Thanks,<br/>
                Growvest Limited<br/><br/>
                
                (c) 2021 Growvest Limited. All rights reserved.
                
            ";
            
            return $mail->send();
            // header("location: ../View/product.php");
            // echo "<script>alert('Registration Successful.'); window.location='../page-login.html'</script>";
            die();
        } catch (Exception $e) {
            return $mail->ErrorInfo;
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // header("location: ../");
            die();

        }

    }

    public function DepositFail($email, $name, $amount, $roi, $period, $validity_period){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $this->host;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $this->username;                     // SMTP username
            $mail->Password   =  $this->password;                               // SMTP password
            $mail->SMTPSecure = 'ssl';       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above         

            //Recipients
            $mail->setFrom($this->username, $this->host_name);
            $mail->addAddress($email, $email);        // Add a recipient

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Growvest Limited - Deposit Failed';

            $mail->Body  = "
                ********************************<br/>
                Hi, $name ! <br/>
                ********************************<br/><br/>

                Your deposit of $amount USD on your account was not successful.

                Kindly proceed to initiate deposit on your account <br/><br/>
                
                If you did not initiate this action, please contact our support team immediately via contact@growvest.org !. <br/>

                If you have any questions, feel free to contact our customer support team via contact@growvest.org.<br/><br/><br/>

                Thanks,<br/>
                Growvest Limited<br/><br/>
                
                (c) 2021 Growvest Limited. All rights reserved.
                
            ";
            
            return $mail->send();
            // header("location: ../View/product.php");
            // echo "<script>alert('Registration Successful.'); window.location='../page-login.html'</script>";
            die();
        } catch (Exception $e) {
            return $mail->ErrorInfo;
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // header("location: ../");
            die();

        }

    }

    public function WithdrawalActivated($email, $name, $amount, $wallet){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $this->host;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $this->username;                     // SMTP username
            $mail->Password   =  $this->password;                               // SMTP password
            $mail->SMTPSecure = 'ssl';       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above         

            //Recipients
            $mail->setFrom($this->username, $this->host_name);
            $mail->addAddress($email, $email);        // Add a recipient

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Growvest Limited - Withdrawal Completed';

            $mail->Body  = "
                ********************************<br/>
                Hi, $name ! <br/>
                ********************************<br/><br/>

                Your withdrawal of $amount USD on your account was successful.<br/>

                For reference. here is your withdrawal info! <br/>
                    Amount: $amount <br/>
                    Destination Wallet Addres: $wallet <br/>                

                If you did not initiate this action, please contact our support team immediately via info@growvest.org !. <br/>

                If you have any questions, feel free to contact our customer support team via contact@growvest.org <br/><br/><br/>

                Thanks,<br/>
                Growvest Limited<br/><br/>
                
                (c) 2021 Growvest Limited. All rights reserved.
                
            ";
            
            return $mail->send();
            // header("location: ../View/product.php");
            // echo "<script>alert('Registration Successful.'); window.location='../page-login.html'</script>";
            die();
        } catch (Exception $e) {
            return $mail->ErrorInfo;
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // header("location: ../");
            die();

        }

    }

    public function WithdrawalFailed($email, $name, $amount, $wallet){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $this->host;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $this->username;                     // SMTP username
            $mail->Password   =  $this->password;                               // SMTP password
            $mail->SMTPSecure = 'ssl';       // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above         

            //Recipients
            $mail->setFrom($this->username, $this->host_name);
            $mail->addAddress($email, $email);        // Add a recipient

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Growvest Limited - Withdrawal Error';

            $mail->Body  = "
                ********************************<br/>
                Hi, $name ! <br/>
                ********************************<br/><br/>

                Your withdrawal request of $amount USD on your account was declined.

                For reference. here is your request info! <br/>
                    Amount: $amount <br/>
                    Destination Wallet Addres: $wallet <br/>                

                If you did not initiate this action, please contact our support team immediately via info@growvest.org !. <br/>

                If you have any questions, feel free to contact our customer support team via contact@growvest.org.<br/><br/><br/>

                Thanks,<br/>
                Growvest Limited<br/><br/>
                
                (c) 2021 Growvest Limited. All rights reserved.
                
            ";
            
            return $mail->send();
            // header("location: ../View/product.php");
            // echo "<script>alert('Registration Successful.'); window.location='../page-login.html'</script>";
            die();
        } catch (Exception $e) {
            return $mail->ErrorInfo;
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // header("location: ../");
            die();

        }

    }



}

