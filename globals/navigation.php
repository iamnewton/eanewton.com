<!-- <ul class="Nav1">
	<li class="selected"><a href="/">Home</a></li>
	<li><a href="/about.php">About</a></li>
	<li><a href="/services.php">Services</a></li>
	<li><a href="/resources.php">Resources</a></li>
	<li><a href="/contact.php">Contact</a></li>
</ul> -->

<?php
	
	$nav = Array(
		"Home"=>"/index.php",
		"About"=>"/about.php",
		"Services"=>"/services.php",
		"Resources"=>"/resources.php",
		"Contact"=>"/contact.php",
		);
	
	
	$urlPath = $_SERVER['SCRIPT_NAME'];

?>

<!-- Nav1 : start -->
<ul class="Nav1">
	<?php
		foreach($nav as $title=>$url) {
			echo '<li ';
			
			if(strpos($urlPath, $url) !== false){
				echo 'class="selected"';
			}
			echo '><a href="'.$url.'">'.$title.'</a></li>';
		
		}
		
		//print $currentPageDirectory
		
		/*
		<li><a href="/">Home</a></li>
		<li><a href="/about/">About</a></li>
		<li><a href="/resources/">Resources</a></li>
		<li><a href="/contact-us.php">Contact</a></li>
		*/
	?>
	
</ul>
<!-- Nav1 : end -->