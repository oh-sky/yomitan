<?php
$url = 'http://yomi-tan.jp/api/yomi.php?k=h&t='.urlencode($_GET['kanji']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

ob_start();
curl_exec($ch);
$yomitan_response = ob_get_clean();
ob_end_clean();
curl_close($ch);

echo $yomitan_response;