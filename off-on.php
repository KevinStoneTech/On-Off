<!DOCTYPE html>
<html>
<head>
    <meta HTTP-EQUIV='refresh' CONTENT='5'>
    <title>Conn</title>
    <link rel="stylesheet" type="text/css" href="style-off-on.css">
</head>
<body>

<?php
//ip do servidor onde esta IP padrão localhost
//troque onde está PORTA DO SERVIDOR pelo ip do server ex:192.168.1.0 | porta:2222

################################################################################
$fpCTA = @fsockopen("8.8.8.8", 53, $errno, $errstr, 1);

if($fpCTA >= 1){

echo "<h2>10.78.4.2 - <font color='#00FF00'/>Online</font> DNS CTA<br></h2>";

}else{

echo "<h2>10.78.4.2 - <font color='#FF0000'/>Offline</font> DNS CTA<br></h2>";

}

################################################################################
$fpPROXYPAI = @fsockopen("10.78.50.5", 3128, $errno, $errstr, 1);

if($fpPROXYPAI >= 1){

echo "<h2>10.78.50.5 - <font color='#00FF00'/>Online</font> PROXY PAI<br></h2>";

}else{

echo "<h2>10.78.50.5 - <font color='#FF0000'/>Offline</font> PROXY PAI<br></h2>";

}

###############################################################################
$fp = @fsockopen("10.78.32.3", 21, $errno, $errstr, 1);

if($fp >= 1){

echo "<h2>10.78.32.3 - <font color='#00FF00'/>Online</font> FTP<br></h2>";

}else{

echo "<h2>10.78.32.3 - <font color='#FF0000'/>Offline</font> FTP<br></h2>";

}

################################################################################
$fp1 = @fsockopen("10.78.50.5", 3128, $errno, $errstr, 1);

if($fp1 >= 1){

echo "<h2>10.78.50.5 - <font color='#00FF00'/>Online</font> PROXY<br></h2>";

}else{

echo "<h2>10.78.50.5 - <font color='#FF0000'/>Offline</font> PROXY<br></h2>";

}
################################################################################
$fp2 = @fsockopen("10.78.50.8", 8080, $errno, $errstr, 1);

if($fp2 >= 1){

echo "<h2>10.78.50.8 - <font color='#00FF00'/>Online</font> SPED<br></h2>";

}else{

echo "<h2>10.78.50.8 - <font color='#FF0000'/>Offline</font> SPED<br></h2>";

}

################################################################################
$fp3 = @fsockopen("10.78.50.9", 80, $errno, $errstr, 1);

if($fp3 >= 1){

echo "<h2>10.78.50.9 - <font color='#00FF00'/>Online</font> WEB<br></h2>";

}else{

echo "<h2>10.78.50.9 - <font color='#FF0000'/>Offline</font> WEB<br></h2>";

}

################################################################################
$fp4 = @fsockopen("10.78.50.10", 80, $errno, $errstr, 1);

if($fp4 >= 1){

echo "<h2>10.78.50.10 - <font color='#00FF00'/>Online</font> SISBOL<br></h2>";

}else{

echo "<h2>10.78.50.10 - <font color='#FF0000'/>Offline</font> SISBOL<br></h2>";

}

################################################################################
$fp5 = @fsockopen("10.78.50.11", 445, $errno, $errstr, 1);

if($fp5 >= 1){

echo "<h2>10.78.50.11 - <font color='#00FF00'/>Online</font> SAMBA<br></h2>";

}else{

echo "<h2>10.78.50.11 - <font color='#FF0000'/>Offline</font> SAMBA<br></h2>";

}

################################################################################
$fp6 = @fsockopen("10.78.50.15", 445, $errno, $errstr, 1);

if($fp6 >= 1){

echo "<h2>10.78.50.15 - <font color='#00FF00'/>Online</font> SRV WINDOWS<br></h2>";

}else{

echo "<h2>10.78.50.15 - <font color='#FF0000'/>Offline</font> SRV WINDOWS<br></h2>";

}

?>

</body>
</html>

