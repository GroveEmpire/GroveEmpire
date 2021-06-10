<?php
@$fp = fopen("ip_log.txt", "ab");
if(!$fp) {
echo "Could not open file for logging";
}
else {
$str = $_SERVER["REMOTE_ADDR"];
$str .= " ";
$str .= date("H:i, d M Y");
fwrite($fp, $str);
fclose($fp);
}

header("Location: index.html"); 
exit;
?>
