$(document).ready(function(){ 
	// Player Setting						   
	$radioURL = "198.100.152.234";
	$radioPort = "8000";
	var ShowAlbumCover = true; // For this you need an Amazon API Key / API_SECRET_KEY, if you don't have set this to false, the player will show only your Radio Logo
	var AutoPlay = true;
	var usedMemLimit = true;
	var usedMemLimitVal = 500; // If Broswer usedMemory becomes more then 100 MB, player refresh the page.
	///////////////////////////////
	$("#stopBtn").hide();
	$('#coverHolder').append('<img src="./images/noCover.jpg"></img>');
	// Player Panel default Text, this can be RadioName or like "Press Play" , etc...
	$('#currentSong').text("Cargando...");
	// IE8 doesn't support EQ Animation
	if($.browser.msie == true){	
			if($.browser.version<9){
				$("#eqHolder").hide();
			}			
	}		
	///////////////////////////////
	soundManager.useFlashBlock = true; 
	soundManager.url = 'swf/'; // required: path to directory containing SM2 SWF files
	soundManager.flashVersion = 9;
	soundManager.preferFlash = true;
	soundManager.useHighPerformance = true;
	soundManager.flash9Options.usePeakData = true;
	soundManager.debugMode = false;
	///////////////////////////////
	// Player start Volume 50
	$("#amount").text(65);
	$("#amount").hide();
	$("#stopBtn").hide();
	$('#slider').slider({
		orientation: "horizontal",
		range: "min",
		min: 0,
		max: 100,
		step: 5,
		value:65,
		slide: function(event, ui) {
		$("#amount").text(ui.value); // this will show current volume as Text, made invisible via CSS
		soundManager.setVolume('radioStream',ui.value);
	}
	});
	///////////////////////////////			 
	var myRadio;
	var resultContainer = $('#coverHolder');
	var goDown = true;
	var goUp = false;
	var songMem = new Array();
	var saveFirstSong = true;
	var historyIS = false;
	var musicLink;
	///////////////////////////////
	$("#playBtn").click(function(){
		startRadio();							 
	})
	//
	if(AutoPlay == true){
		startRadio();
	}
	//
	function startRadio(){
		resultContainer.empty();
		$('#coverHolder').append('<img id="coverPreloader" src="./images/preloader.gif"></img>');
		$("#stopBtn").fadeIn();
		$("#playBtn").hide(); 
		soundManager.onready(function(){
		myRadio = soundManager.createSound({
		id: 'radioStream',
		url: 'http://'+$radioURL+':'+$radioPort+'/;stream.mp3',
		stream: true,  
		volume: $("#amount").text(),
		usePeakData: true,     // [Flash 9 only] whether or not to show peak data (no notable CPU cost)
		usePolicyFile: true,
		type: 'audio/mpeg',
	  });
  		//	 
		myRadio.options.whileplaying = function() {
			var peakleft = this.peakData.left*40;
			var peakright = this.peakData.right*40;
			//console.log(peakleft,peakright)	
			if(peakleft != 0){
				$("#eqOne").css('width', peakleft);
				$("#eqTwo").css('width', peakright);
				$("#eqThree").css('width', peakleft);
				$("#eqFour").css('width', peakright);
				$("#eqFive").css('width', peakleft);
				$("#eqSix").css('width', peakright);				
			}
		}
		myRadio.play();				
		grabRadioInfo();
		});
		radioInfoInterval = setInterval(grabRadioInfo, 20000);	 
	}	
		
	function grabRadioInfo(){
		// Calculate UsedMemory, this will be usefull for Developers 
		$('#usedMemory').text((soundManager.getMemoryUse()/1024/1024).toFixed(2));
		if((soundManager.getMemoryUse()/1024/1024).toFixed(2) > usedMemLimitVal){
			if(usedMemLimit){
				window.location = "index.html";
			}
		}
		// Grab Current Song Title
		$.ajaxSetup({ cache: false });
		var dataString = {
		'currentradiourl' : $radioURL,
		'currentradioport' : $radioPort,
	  };  
	  $.ajax({
		type: "POST",
		url: "songTitle.php",
		data: dataString,
		success: function(data) {
			$('#currentSong').hide();
		    $('#currentSong').text(data.replace("</body></html>", ""));
			 $('#currentSong').fadeIn();
			if(saveFirstSong){
				saveFirstSong = false;
				songMem[0] = data.replace("</body></html>", "");
				grabInfo();
			}
			// we save grabed Song Title into Array and compare it in every few seconds if changed or not, if yes then try to grab SongHistory and AlbumCover
			// This is very important to prevent unnecessary requests, specially for Amazon server. 
			if(data.replace("</body></html>", "") == songMem[0]){
				//console.log("Same Song");										
	        }else{
				//console.log("Song Changed!");
				grabInfo();
				saveFirstSong = true;
			}
		}
		});
		return false;
	}
	// Grab SongHistory and AlbumCover
	function grabInfo(){
		var dataString={'currentradiourl':$radioURL,'currentradioport':$radioPort,};
		$.ajax({
			type:"POST",
			url:"history.php",
			data:dataString,success:function(data)
				{historyIS=true;
				$('#songHistoryText').html(data);
				var dataString={
					'name':$('#currentSong').text(),
								};
				var rtitle=$('#currentSong').text();
				var explodeh=rtitle.split('-');
				var artist=explodeh[0];
				var stitle=explodeh[1];
				var nutitle=stitle.replace(/\((.*)\)|f\//g,'');
			if(($('#currentSong').text()!="")&&ShowAlbumCover!=false){
				$.getJSON("http://ws.audioscrobbler.com/2.0/?method=track.getinfo&format=json&api_key=6648682f11d67969064638fea073d928&artist="+artist+"&track="+nutitle+"",function(data){
			if(data!=""){
			console.log("Result Found");
				var html='';
				$.each(data.track.album.image,function(i,item){
				$.each(item,function(property,value){
			if(i==1&&property!='size'){
				html+="<img height=80px width=82px src="+value+">";}});});
				resultContainer.empty();
				resultContainer.hide();
				resultContainer.append(html);
				resultContainer.fadeIn();
				$("#coverGlass").fadeIn();}
			if(data==""){
				console.log("no Result, Try Again!");
				var curTitle=$('#currentSong').text();curTitle=curTitle.substring(0,curTitle.indexOf('-'))+" mp3";
				var dataString={'name':curTitle,};
				$.ajax({type:"POST",url:"search.php",data:dataString,success:function(data){
				resultContainer.empty();
				resultContainer.hide();
				var curCover=data.slice(data.indexOf('<img'));
				resultContainer.append(curCover);
				resultContainer.fadeIn();
				musicLink=data.substring(0,data.indexOf('<img'));
				$("#coverGlass").fadeIn();}});
			return false;}});}
			else{$('#coverHolder').empty();
				$('#coverHolder').append('<img src="./images/noCover.jpg"></img>');}
			return false;}});return false;}
				$('#coverGlass').click(function(){
		if(musicLink != undefined){							
			window.open(musicLink);
			return false;
		}
    })			
	// Player Stop Button
	$("#stopBtn").click(function(){
		// reset EQ						 
		$("#eqOne").css('width', '0px');
		$("#eqTwo").css('width', '0px');
		$("#eqThree").css('width', '0px');
		$("#eqFour").css('width', '0px');
		$("#eqFive").css('width', '0px');
		$("#eqSix").css('width', '0px');	
		//
		myRadio.stop();
		clearInterval(radioInfoInterval);
		soundManager.unload('radioStream');
		$("#stopBtn").fadeOut();
		$("#playBtn").fadeIn();
		songMem[0] = songMem[1] = "";
		//$('#coverHolder').empty();
		//$('#coverHolder').append('<img src="./images/noCover.jpg"></img>');
		$('#currentSong').text("Radio Detenida.");		
	})
	
	$("#songHistoryBtn").hover(mouseOver, mouseOut);
	
	function mouseOver(){
		$("#songHistoryBtn").css('background-image','url("./images/SongHistoryOver.png")');
	}
	
	function mouseOut(){
		$("#songHistoryBtn").css('background-image','url("./images/SongHistoryNormal.png")');
	}
	// Change DIV Top to visualize SongHistoryPanel Open/Close
	$('#songHistoryBtn').click(function() {	
		  if(historyIS){								
		  if(goDown){
			  goDown = false;	  
			  $('#songHistoryBackground').animate({
			  top: '-15px',
			  }, {
				duration: 300,
				specialEasing: {
				  width: 'linear',
				  height: 'easeOutBounce'
				},
				complete: function() {
				  goUp = true;
				}
			  });
		  }
		  if(goUp){	
			  goUp = false;	
			  $('#songHistoryBackground').animate({
			  top: '-227px',
			  }, {
				duration: 300,
				specialEasing: {
				  width: 'linear',
				  height: 'easeOutBounce'
				},
				complete: function() {
					goDown = true;
				}
			  });	  
			}
			}
		});
	})