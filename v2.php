<?php
error_reporting(0);

// err 提示信息：服务器订阅文本不存在

$err = base64_encode("vmess://ew0KICAidiI6ICIyIiwNCiAgInBzIjogIuacjeWKoeWZqOiuoumYheaWh+S7tuS4jeWtmOWcqCIsDQogICJhZGQiOiAi5pyN5Yqh5Zmo6K6i6ZiF5paH5Lu25LiN5a2Y5ZyoIiwNCiAgInBvcnQiOiAiMCIsDQogICJpZCI6ICLmnI3liqHlmajorqLpmIXmlofku7bkuI3lrZjlnKgiLA0KICAiYWlkIjogIjAiLA0KICAibmV0IjogInRjcCIsDQogICJ0eXBlIjogIm5vbmUiLA0KICAiaG9zdCI6ICIiLA0KICAicGF0aCI6ICIiLA0KICAidGxzIjogIiINCn0=");

$str = file_get_contents("v2ray.txt", "r") or die($err); echo base64_encode($str);
?>
