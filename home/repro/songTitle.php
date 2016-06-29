<?php
include "shoutcast_class.php";
$ip	= "198.100.152.234";
$port	= "8000";
?>
<?php
$display_array = array("Current Song");

$radio = new Radio($ip.":".$port);

$data_array = $radio->getServerInfo($display_array);


if (is_array($data_array))
{
    foreach ($display_array AS $i => $text)
    {
        if ($text == "Stream Genre")
	{
            $datastring = "<span style=\"color: lightgrey; background-color: black;\">".$data_array[$i]."</span>";
        }
	elseif ($text == "Stream URL")
        {
	    $datastring = "<a href=\"".$data_array[$i]."\" target=\"_blank\">".$data_array[$i]."</a>";
        }
	else
        {
	    $datastring = $data_array[$i];
        }
		print_r($data_array[$i]);
    }
}
?>