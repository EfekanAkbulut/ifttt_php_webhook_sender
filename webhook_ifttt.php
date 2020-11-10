<?php
$servername = "localhost";

$dbname = "XXXXXX";
$username = "XXXXXXX";
$password = "XXXXXXXXX";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT    DATE(XXXXXXX) as DATE, COUNT(`XX`) XXXXX
FROM      XXXXX
WHERE DATE(XXXXXXXX)=CURRENT_DATE
GROUP BY  DATE(XXXXXXXX)";


if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $XXXXXXX = $row[XXXXXXX];
        $xxxx = $XXXXXXXXX;

    }
    $result->free();
}


$apikey = "Change Your Own Key";
$event  = "Change Your Own Event Name";
$value1 = "Change your database object";
$value2 = "Change your database object";
$value3 = "Change your database object";

$ch = curl_init();

$postdata = json_encode([
                         "value1" => $value1,
                         "value2" => $value2,
                         "value3" => $value3,
                         ]);

$header = array();
$header[] = "Content-Type: application/json";

curl_setopt($ch,CURLOPT_URL, "https://maker.ifttt.com/trigger/$event/with/key/$apikey");
curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);

print_r($result);
print_r("\r\n\r\n");

curl_close($ch);
?>
