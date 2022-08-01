<?php    
$url = "https://script.google.com/macros/s/AKfycbx4cZB0jn6wCDdIfIqKAzhmMBIMNuGtjGkOioKGOIe5kvwmc_Dkjs8PeN-TGsi7_irwQg/exec";
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_POSTFIELDS => http_build_query([
                  "recipient" => "zoonashhassan@gmail.cpm",
                  "subject"   => "Dairy Datazen Password Reset",
                  "body"      => "test"
        ])
    ]);
$result = curl_exec($ch);
echo $result;
?>
