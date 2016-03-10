color: rgba(0, 0, 0, 0.0);

<?php do_action('slideshow_deploy', '57'); ?>

<center><html>
 <head>
    <script type="text/javascript">
       function playPause(){
          var reproduciendo = true;
          var pista = document.getElementById('pista');
          var boton_play_pause = document.getElementById('boton_play_pause');
          boton_play_pause.onclick = function(){
             if(reproduciendo){
                reproduciendo = false;
                pista.pause();
                this.value = 'Play';
             }else{
                reproduciendo = true;
                pista.play();
                this.value = 'Pause';
             }
          }
       }
       function cambiarVolumen(){
          var pista = document.getElementById('pista');
          var combo_volumen = document.getElementById('combo_volumen');
          combo_volumen.onchange = function(){
             var volumen = this.value;
             pista.volume = volumen;
          }
       }
       window.onload = function(){
          playPause();
          cambiarVolumen();
       }
    </script>
 </head>
 <body>
    <form>
       <audio id="pista" src="http://198.100.152.234:8016/;" autoplay> Su navegador no soporta la etiqueta audio. </audio>
       <input type="button" id="boton_play_pause" value="Pause" />
       <select id="combo_volumen">
          <option value="1.0"> Volumen 100 </option>
          <option value="0.9"> Volumen 90 </option>
          <option value="0.8"> Volumen 80 </option>
          <option value="0.7"> Volumen 70 </option>
          <option value="0.6"> Volumen 60 </option>
          <option value="0.5"> Volumen 50 </option>
          <option value="0.4"> Volumen 40 </option>
          <option value="0.3"> Volumen 30 </option>
          <option value="0.2"> Volumen 20 </option>
          <option value="0.1"> Volumen 10 </option>
          <option value="0.0"> Volumen 0 </option>
       </select>
    </form>
 </body>

<!DOCTYPE html> 
<html lang="es-ar"> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <title>Demo</title> <script src="audiojs/audio.min.js"></script> <link rel="stylesheet" href="includes/index.css" media="screen"> <script> audiojs.events.ready(function() { audiojs.createAll(); }); </script> </head> <body> <audio src="http://pwstreaming.net:8565/;" preload="none"> </audio> </body> 
</html></center> 