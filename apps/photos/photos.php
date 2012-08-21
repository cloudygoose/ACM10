<?php
	include_once("photos-head.php");
	echo '<div id = "left">';
	$extensions[0] = "jpg";
	$extensions[1] = "JPG";
	$extensions[2] = "png";
	$extensions[3] = "PNG";
	//I made some changes in the phpFileTree, the # doesn't carries meaning
	echo php_file_tree($imageRoot, "#", $extensions);
	echo '</div>';
	echo '<div id = "right">';
	echo '<center>';
	echo '<img id = "theImage" class = "noFile" src = "./../../images/photos/nofile.jpg" onerror="this.src=\'noFile.jpg\'"/><br/>';
	echo '<a id = "fancyboxTag" class="fancybox" rel="group" href="noFile.jpg"><button id = "viewFancybox">view it in fancybox!</button></a>';
	echo '</center>';
	echo '</div>';
	include_once("photos-tail.php");

	