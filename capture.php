
<?php
  
$image_url = "http://localhost/svg/test.php"; // <-- Source image url (FIX THIS)
$save_as = '1234.jpg';
$ch = curl_init($image_url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "GoogleChrome/5.0 (Windows; U; Windows NT 5.1; en-US)");
$raw_data = curl_exec($ch);
curl_close($ch);
$fp = fopen($save_as, 'x');
fwrite($fp, $raw_data);
echo 'hello';
fclose($fp);
?>
