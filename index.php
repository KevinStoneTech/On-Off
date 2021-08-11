<!DOCTYPE html>
<html>
<head>
    <meta HTTP-EQUIV='refresh' CONTENT=''>
    <title>Status</title>
    <link rel="stylesheet" type="text/css" href="style-off-on.css">
</head>
<body>

<?php
//ip do servidor onde esta IP padrão localhost
//troque onde está PORTA DO SERVIDOR pelo ip do server ex:192.168.1.0 | porta:2222

//################################################################################
//$fpPriGoogle = @fsockopen("8.8.8.8", 53, $errno, $errstr, 1);

//if($fpPriGoogle >= 1){

//echo "<h3>8.8.8.8 - <font color='#00FF00'/>Online</font> DNS PRIMARIO GOOGLE<br></h3>";
//}else{
//echo "<h3>8.8.8.8 - <font color='#FF0000'/>Offline</font> DNS PRIMARIO GOOGLE<br></h3>";
//}

//################################################################################
//$fpSecGoogle = @fsockopen("8.8.4.4", 53, $errno, $errstr, 1);

//if($fpSecGoogle >= 1){

//echo "<h3>8.8.4.4 - <font color='#00FF00'/>Online</font> DNS SECUNDARIO GOOGLE<br></h3>";
//}else{
//echo "<h3>8.8.4.4 - <font color='#FF0000'/>Offline</font> DNS SECUNDARIO GOOGLE<br></h3>";
//}

//?>

<!-- Jquery incluido -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Bootstrap JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

<div class="container">
  <div class="table-responsive">
      <table class="table table-status">
          <thead>
              <tr class="status">
                 <th class="cor">Status:</th>
              </tr>
          </thead>
    </table>
  </div>
</div>

<div class="container">
  <div class="table-responsive">
      <table class="table">
          <thead>
              <tr class="dns">
                 <th class="cor"><?php 
                 $fpPriGoogle = @fsockopen("8.8.8.8", 53, $errno, $errstr, 1);

                 if($fpPriGoogle >= 1){
                 
                 echo "<h3>8.8.8.8 - <font color='#00FF00'/>Online</font> DNS PRIMARIO GOOGLE<br></h3>";
                 }else{
                 echo "<h3>8.8.8.8 - <font color='#FF0000'/>Offline</font> DNS PRIMARIO GOOGLE<br></h3>";
                 }
                 ?></th>
              </tr>
              <tr class="dns">
                 <th class="cor"><?php
                 $fpSecGoogle = @fsockopen("8.8.4.4", 53, $errno, $errstr, 1);

                 if($fpSecGoogle >= 1){
                 
                 echo "<h3>8.8.4.4 - <font color='#00FF00'/>Online</font> DNS SECUNDARIO GOOGLE<br></h3>";
                 }else{
                 echo "<h3>8.8.4.4 - <font color='#FF0000'/>Offline</font> DNS SECUNDARIO GOOGLE<br></h3>";
                 }
                 ?></th>
              </tr>
              <tr class="dns">
                 
                 <th class="cor">Teste</th>
              </tr>          
          </thead>
    </table>
  </div>
</div>

