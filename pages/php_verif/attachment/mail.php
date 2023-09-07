<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once $_SERVER["DOCUMENT_ROOT"]."/recrutment\PHPMailer\PHPMailer.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/recrutment\PHPMailer\Exception.php";
?>
<?php
if(isset($_POST['mailer']))
{
   $mail=$_POST['mail'];
   if(!empty($mail))
   {
       if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
       {
           $msg1="Invalid Email";
           $mail="";
       }
   }
   else
   {
    $msg1="Email Required";
   }
   $name=$_POST['name'];
   if(!empty($name))
   {
       if(!preg_match("/^[a-zA-Z ]*$/",$name))
       {
           $msg2="Name Containe only Letter and Spaces";
           $name="";
       }
   }
   else
   {
    $msg2="Name Required";
   }
   $phone=$_POST['phone'];
   $phone=(int) filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
   $msg=$_POST['msg'];
   if(empty($msg))
   {
       $msg3='Message Required';
   }
   if(!empty($mail)&&!empty($name)&&!empty($msg))
   {
    try
    {
    $mailer=new PHPMailer();
    $mailer->addAddress($user->get_mail());
    $mailer->setFrom($mail,$name);
    $mailer->Subject="Contact";
    $mailer->isHTML(true);
    $mailer->Body=$msg;
    $mailer->send();
    echo "Message Sent OK\n";
    } catch (phpmailerException $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
    echo $e->getMessage(); //Boring error messages from anything else!
    }
   }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>