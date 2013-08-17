<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Create clip | ReelSurfer</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="http://reelsurfer.com/jquery-ui/css/no-theme/jquery-ui-1.10.1.custom.min.css"/>
    <script>
  $(function() {
  $("bottom-nav").sortable({
	  scroll: true,
	  placeholder: 'placeholder',
	  axis:"x"
	  });
    $( "#bottom-nav ,#left-nav" ).sortable({
	  scroll: true,
      connectWith: ".connectedSortable"
    }).disableSelection();
var length= $('#bottom-nav').children(this).length;
	
  });
  </script>
  <link href="assets/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="Edit1.css">
<link rel="stylesheet" type="text/css" href="playerControl.css">
<style>
.ui-slider-horizontal{
height:0.3em !important;
}
.ui-widget-header{
background:url("images/1x10.png");
repeat-x;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="vozealVideo.js"></script>
<script src="vozealControls.js"></script>
<script>
$(document).ready(function() {
  var length = $("#bottom-nav").children(this).length;
  alert(length);
  if(length< 6)
  {
	  alert(document.getElementById('bottom-nav').getElementsByTagName('li').item(0).style.height);
	;  }
});

</script>

    </head>
<body>
<div class="row-fluid" style="padding-bottom: 30px; background-image:url(images/bg-rt.png);background-repeat:repeat-x repeat-y;">
<div class="span9">
<div class="row-fluid">
<div class="span4"></div>
<div class="span4" style="position:relative;top:155px;">
<script type="text/javascript" > 
var videoData = new Array;
videoData[0] = new vozealVideoData('youtube','P_gIWbG-tp0',10,15);
videoData[1] = new vozealVideoData('youtube','pjoDEZ3sIFI',10,15);
videoData[2] = new vozealVideoData('youtube','P_gIWbG-tp0',30,45);
videoData[3] = new vozealVideoData('youtube','pjoDEZ3sIFI',140,155);
videoData[4] = new vozealVideoData('youtube','P_gIWbG-tp0',60,75);
videoData[5] = new vozealVideoData('youtube','pjoDEZ3sIFI', 300,355);

function onYouTubeIframeAPIReady() {
	player = new vozealVideo('youtube',videoData);
}	
</script>

<!-- ###############################PLAYER################################### -->
<div id="ytPlayerContainer">
<div id="playerControls" style="top: 390px; position: relative; z-index: 20;">
<div id="seekbar">
</div>
<div id="volumeBar" style="position: absolute;top: 24px;left: 13%;z-index: 248;display: none;width: 100px;">
</div>
<div style="background-image:url('images/1x39.png');background-repeat:repeat-x;height: 39px;">
<img src="images/play.png" id="play-button"></img>
<img src="images/pause.png" style="display:none" id="pause-button"></img>
<img src="images/volume.png" id="volume-button"></img>
<img src="images/power.jpg" id="power"  style="float: right;padding-right: 1%"></img>
<img src="images/fullscreen.png" id="fullscreen-button" onclick="playPauseVideo()" style="float: right;padding-right: 1%"></img>
<div style="position: relative;top: 9px;left: -15px;color: white;float: right;">00:00/00:00</div>
</div>
</div>
</div>
<script>
$('#play-button').click(function() {
    $('#pause-button').show();
    $('#play-button').hide();
});
$('#pause-button').click(function() {
    $('#play-button').show();
    $('#pause-button').hide();
});
$("#volume-button").hover(function()
          {
           	$("#volumeBar").fadeIn(500);
          }, function()
	       		{
                   // $("#volumeBar").fadeTo("slow",0).delay(			                    1000);
				$("#volumeBar").delay(4000).fadeOut(500);
                });

</script>
<script>
$(window).load(function(){
    handle = $('#seekbar A.ui-slider-handle');        
    handle.eq(0).addClass('first-handle');        
    handle.eq(1).addClass('second-handle');
	handle.eq(2).addClass('thrid-handle');
});
</script>
<!-- ##########################PLAYER ENDS ########################### -->
</div>
<div class="span4">
</div>
</div>
</div>


<div class="span3" id="left-col">
<ul id="left-nav" class="connectedSortable">
<li>
<div class="left-div">
<img src="1.jpg" width="140px" style="height:79px;"/>
</div></li>
<li>
<div class="left-div"><img src="1.jpg" width="140px" style="height:79px;"/>
</div></li>
<li>
<div class="left-div"><img src="1.jpg" width="140px" style="height:79px;"/>
</div></li>
</div>
</div>
  <div style="clear:both">
</div>
<div class="row-fluid">
<div id="bottom" class="span12" style="background-color:#666; height:170px; width:100%;">
<ul id="bottom-nav" class="connectedSortable">
<li><img src="1.jpg" width="140px" style="height:79px;"/></li>
<li><img src="1.jpg" width="140px" style="height:79px;"/></li>
<li><img src="1.jpg" width="140px" style="height:79px;"/></li>
<li><img src="1.jpg" width="140px" style="height:79px;"/></li>
<li><img src="1.jpg" width="140px" style="height:79px;"/></li>
<li><img src="1.jpg" width="140px" style="height:79px;"/></li>

</ul>
</div>
</div> 

</body>
</html>