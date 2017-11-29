<?php
function sendMail($to, $title, $content){
require_once('./phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();
    // 设置为要发邮件
    $mail->IsSMTP();
    // 是否允许发送HTML代码做为邮件的内容
    $mail->IsHTML(TRUE);
    $mail->CharSet='UTF-8';
    // 是否需要身份验证
    $mail->SMTPAuth=TRUE;
    /*  邮件服务器上的账号是什么 -> 到163注册一个账号即可 */
    $mail->From="chengyinxiang93@163.com";
    $mail->FromName="chengyinxiang93";
    $mail->Host="smtp.163.com";
    $mail->Username="chengyinxiang93";
    $mail->Password="hello2017";
    //'MAIL_ADDRESS' => 'php28_33@163.com',   // 发货人的email
    //'MAIL_FROM' => 'php28_33',      // 发货人姓名
    //'MAIL_SMTP' => 'smtp.163.com',      // 邮件服务器的地址
    //'MAIL_LOGINNAME' => 'php28_27',   
   //'MAIL_PASSWORD' => 'php123166',
    // 发邮件端口号默认25
    $mail->Port = 25;
    // 收件人
    $mail->AddAddress($to);
    // 邮件标题
    $mail->Subject=$title;
    // 邮件内容
    $mail->Body=$content;
    return($mail->Send());
}
var_dump(sendMail('elephant1024@qq.com', '会议主题1', '5555今天下午6:30开会'));
var_dump(sendMail('2848278204@qq.com', '会议主题2', '今天下午7:30开会'));