<?php
  $url = "/";
  if (isset($_GET["id"])) {
  	switch ($_GET["id"]) {
  		case 'discord':
  			$url = "discordserver"
  			break;

  		case 'github':
  			$url = "githuburl"
  			break;

  		case 'discorduser':
  			$url = "discorduser"
  			break;

  		case 'youtube':
  			$url = "youtubeurl"
  			break;

  		case 'website':
  			$url = "websiteurl"
  			break;
  		
  		default:
  			break;
  	}
  }
  header("Location: ".$url);
?>
