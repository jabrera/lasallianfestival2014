<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>LaSallian Festival 2014</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script type="text/javascript" src="scripts/animation.js"></script>
	<script  type="text/javascript" src="scripts/loadimage.js"></script>
</head>
<body><center>
<div id="header">
</div>
<div id="black">
	<div id="cover">
		<a id="star1"></a>
		<div id="shadow"></div>
	</div>
</div>
<div id="container">
	<div id="shadow"></div>
	<div id="base">
		<div id="title">
			<div id="title_text">
			LaSallian Festival 2014
			</div>
			<div id="post_info">
			March 4, 2014
			</div>
		</div>
		<p>
		<?php
		foreach (glob("images/gallery/*.*") as $filename) {
			echo '
		<div id="thumbnail" onClick="changePhoto(\''.$filename.'\')">
			<img src="'.$filename.'" width="200px" height="133px">
		</div>
		';
		}
		?>
	</div>
</div>
<div id="footer">
	<a id="star2"></a>
	<div id="copyright">
	<table width="100%">
		<tr>
			<td>&copy; 2014 LaSallian Festival.</td>
			<td align="right"></td>
		</tr>
	</table>
	</div>
</div>
<script  type="text/javascript" src="scripts/slideshow.js"></script>
<div id="navtop">
	<div id="navbase">
		<a href="index.php" id="star"></a>
		<a href="index.php">Home</a>
		<a href="about.php">About</a>
		<a href="gallery.php">Gallery</a>
		<a href="events.php">Events</a>
		<a href="contact.php">Contact</a>
		<div id="search">
			<input type="text" placeholder="Search"><input type="submit" value="">
		</div>
	</div>
</div>
<div id="photo_popup">
	<div id="mainphoto">
		<div id="next" onClick="nextPhoto()">
		</div>
		<div id="prev" onClick="prevPhoto()">
		</div>
	</div>
	<div id="exitmsg" onClick="document.getElementById('photo_popup').style.display = 'none'">
	Click here to close.
	</div>
</div>
<script type="text/javascript">
	var currentPhoto = "";
	function changePhoto(photo)
	{
		currentPhoto = photo.substring(15);
		currentPhoto = currentPhoto.replace('.jpg','');
		document.getElementById('photo_popup').style.display = 'block';
		document.getElementById('mainphoto').style.background = 'url(' + photo + ')';
		document.getElementById('mainphoto').style.background-size = '900px 600px';
	}
	function nextPhoto()
	{
		currentPhoto++;
		if(currentPhoto == 111)
			currentPhoto = 1;
		document.getElementById('mainphoto').style.background = 'url(images/gallery/' + currentPhoto + '.jpg)';
	}
	function prevPhoto()
	{
		currentPhoto--;
		if(currentPhoto == 0)
			currentPhoto = 110;
		document.getElementById('mainphoto').style.background = 'url(images/gallery/' + currentPhoto + '.jpg)';
	}
</script>
<script  type="text/javascript" src="scripts/default_animation.js"></script>
</body>
</html>