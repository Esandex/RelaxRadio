<?php
include "shoutcast_class.php";
$ip	= "198.100.152.234";
$port	= "8000";
?>
<?php
$display_array = array("Stream Title", "Stream Genre", "Stream URL", "Current Song");
$radio = new Radio($ip.":".$port);
$data_array = $radio->getServerInfo($display_array);
echo $radio->getHistoryTable("/played.html", "songOverview");
?>
</body>
</html>