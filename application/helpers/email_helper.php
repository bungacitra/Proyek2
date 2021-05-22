<?php
error_reporting(0);
function kirim_email($email, $subject, $message)
{
    // $ci = get_instance();
//     $ci->load->library('email');
//     $config['protocol'] = "smtp";
//     $config['smtp_host'] = "ssl://smtp.gmail.com";
//     $config['smtp_crypto'] = "ssl";
//     $config['smtp_port'] = "465";
//     $config['smtp_user'] = "kekenti123@gmail.com";
//     $config['smtp_pass'] = "pass121314";
//     $config['charset'] = "iso-8859-1";
//     $config['mailtype'] = "html";
//     $config['newline'] = "\r\n";
//     $ci->email->initialize($config);
//     $ci->email->from('slametfaisal19@gmail.com', "Slametfaisal24");
//     $ci->email->to("$email");
//     $ci->email->subject("$subject");
//     $ci->email->message("$message");
//     $ci->email->send();
    mail($email,$subject,$message,"From:kekenti123@gmail.com");
}
