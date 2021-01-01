<?php
 
$video = $_FILES["video"]["tmp_name"];
$bitrate = $_POST["bitrate"];
 
$command = "ffmpeg -i $video -b:v $bitrate -bufsize $bitrate output.mp4";
system($command);
 
echo "File has been converted";