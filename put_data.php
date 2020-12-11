<?php
/////////////////////////////////////////////////////////////////////////////////////////////////
$con = mysqli_connect('localhost','iotbabyc_iotbaby','m6etiJg%!^{r','iotbabyc_iotbaby');
/////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($_REQUEST))
{
$temp = @$_REQUEST['temp'];
$ab = @$_REQUEST['ab'];
$op = @$_REQUEST['op'];

$query = "INSERT INTO `ban` (`temp`, `ab`, `op`)
 VALUES ('".$temp."', '".$ab."', '".$op."')";

//echo $query;
mysqli_query($con,$query);


////////////////////////////////////////////////////////////////////////
if($temp >= 50)
{
$to      = 'foziyam38@gmail.com';
$subject = ' Refrigerator TEMPERATURE ALERT';
$message = 'Temp='.$temp;
$message .= "Deg      over Refrigerator TEMPERATURE Alert."."\r\n";
$message .= "http://iotbabycare.com/iot_blood/index.php"."\r\n";
$headers = 'From: foziyam38@gmail.com' . "\r\n" .
    'Reply-To: foziyam38@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    
$to      = 'prakash3322@gmail.com';
$subject = ' Refrigerator TEMPERATURE ALERT';
$message = 'Temp='.$temp;
$message .= "Deg      over Refrigerator TEMPERATURE Alert."."\r\n";
$message .= "http://iotbabycare.com/iot_blood/index.php"."\r\n";
$headers = 'From: foziyam38@gmail.com' . "\r\n" .
    'Reply-To: foziyam38@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
/////////////////////////////////////////////////////////////////////////
if($ab == 0)
{
$to      = 'foziyam38@gmail.com';
$subject = ' BLOOD BAG AB+ DETECTION ALERT';
$message = ' BLOOD BAG AB+ DETECTION ALERT';
$message .= " EMPTY BLOOD BAG AB+ "."\r\n";
$message .= "http://iotbabycare.com/iot_blood/index.php"."\r\n";
$headers = 'From: foziyam38@gmail.com' . "\r\n" .
    'Reply-To: foziyam38@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    
$to      = 'prakash3322@gmail.com';
$subject = ' BLOOD BAG AB+ DETECTION ALERT';
$message = ' BLOOD BAG AB+ DETECTION ALERT';
$message .= " EMPTY BLOOD BAG AB+ "."\r\n";
$message .= "http://iotbabycare.com/iot_blood/index.php"."\r\n";
$headers = 'From: foziyam38@gmail.com' . "\r\n" .
    'Reply-To: foziyam38@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
/////////////////////////////////////////////////////////////////////////
if($op == 0)
{
$to      = 'foziyam38@gmail.com';
$subject = ' BLOOD BAG O POSITIVE DETECTION ALERT';
$message = ' BLOOD BAG O POSITIVE DETECTION ALERT';
$message .= " EMPTY BLOOD BAG O POSITIVE "."\r\n";
$message .= "http://iotbabycare.com/iot_blood/index.php"."\r\n";
$headers = 'From: foziyam38@gmail.com' . "\r\n" .
    'Reply-To: foziyam38@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    
$to      = 'prakash3322@gmail.com';
$subject = ' BLOOD BAG O POSITIVE DETECTION ALERT';
$message = ' BLOOD BAG O POSITIVE DETECTION ALERT';
$message .= " EMPTY BLOOD BAG O POSITIVE "."\r\n";
$message .= "http://iotbabycare.com/iot_blood/index.php"."\r\n";
$headers = 'From: foziyam38@gmail.com' . "\r\n" .
    'Reply-To: foziyam38@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
/////////////////////////////////////////////////////////////////////////
}
?>
