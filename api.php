<?php
$context = stream_context_create(array('http' => array(
																				 'method' => 'GET',
																				 'header' => "User-Agent: {$_SERVER['HTTP_USER_AGENT']}",
																			 )));
$url = 'http://yomi-tan.jp/api/yomi.php?k=h&t='.urlencode($_GET['kanji']);
echo file_get_contents($url,false,$context);