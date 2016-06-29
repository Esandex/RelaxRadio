<?include "inc/config.php";?>
<head>

<meta charset="utf-8">
<title>HTML5 WHMSonic Radio Player</title>
<link rel="stylesheet" href="js/player.css">
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.js"></script>
<script type="text/javascript" src="js/system.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$(document).find('.webPlayer').each(function() { $('#'+this.id).videoPlayer(); });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
//********* songname is a div set to the player, in js/system.js line 27. #artist and #trackname comes from get_info.php *********//
function songtitle() {
$.get("inc/get_info.php",{} ,function(data){ $("#songname").html(data); $('#songname').fadeIn("fast");


var artist = $('#artist').val();
var track = $('#trackname').val();
artist= artist,
track= track
$.ajax({
url: '<? if($show_album_art == 'on' && $show_song_title == 'on') { echo 'http://itunes.apple.com/search'; } ?>',
data: {
term: artist + ' ' + track,
media: 'music'
},
dataType: 'jsonp',
success: function(json) {
if(json.results.length === 0) {
$('img[name="nowplayingimage"]').attr('src', '');
return;
}

// trust the first result blindly...
var artworkURL = json.results[0].artworkUrl100;
$('img[name="nowplayingimage"]').attr('src', artworkURL);
}
});
});


setInterval(songtitle, <? echo 1000 * 60 * $song_title_update; ?>);
} // Song title function
songtitle();

$("#songname").css({"color":"<? echo $song_title_color; ?>"});
$("#songname").css({"width":"<? echo $song_title_width; ?>"});
$("#uniquePlayer-5").css({"background":"<? echo $player_background_color; ?>"});
$("#art").css({"background":"<? echo $player_background_color; ?>"});
});
</script>
</head>
<body>
<center>
<div id=art class=albumart><img src="" name="nowplayingimage"></div>
<div id="uniquePlayer-5" class="webPlayer light audioPlayer">
<div id="uniqueContainer-5" class="videoPlayer"></div>
<div style="display:none;" class="playerData">
					{
					"autoplay": "true",
					"size": { "width": "<? echo $player_size_width; ?>" },
					"media": {
					"m4a": "http://<? echo $radio_ip; ?>:<? echo $radio_port; ?>/;"
					}
					}
</div>
</div>
</center>
</body>