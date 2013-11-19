<?php

	// Vars
	$gamertag = 'shiningXfinger';

  /* 
    Would be better to use cURL, but for briefness of code, using file_get_contents
  */

	// Get profile information
	$profile = json_decode(file_get_contents('http://www.xboxleaders.com/api/profile.json?gamertag='.$gamertag));
  $profile = $profile->Data;
  
	// Get game information
	$games = json_decode(file_get_contents('http://www.xboxleaders.com/api/games.json?gamertag='.$gamertag));
	$games = $games->Data;
	
?>
<!DOCTYPE html>
<html>
<head>

<style>
  
  .gamercard {
    border: 1px solid #bdbec1;
    padding: 10px;
    width: 600px;
    font-family: arial, sans-serif;
    font-size: 12px;
    color: #bdbec1;
    
    background-image: -webkit-linear-gradient(#ddd, #fff, #e9fdce);
    background-image: -moz-linear-gradient(top, #ddd, #fff, #e9fdce);
    background-image: -ms-linear-gradient(#ddd, #fff, #e9fdce);
    background-image: -o-linear-gradient(#ddd, #fff, #e9fdce);
    background-image: linear-gradient(#ddd, #fff, #e9fdce);
  }
  
  .gamercard img {
    display: block;
  }
  
  .gamercard .avatar {
    float: right;
    width: 150px;
    height: 300px;
    margin: -60px 0 0 50px;
  }
  
  .gamercard h1 {
    font-weight: normal;
    color: #78BB58;
  }
    
    .gamercard h1 img {
      display: inline-block; 
      padding-right: 10px;
      width: 24px; 
      height: 24px;
    }
      
  .gamercard h2 {
    color: #111;
    font-size: 16px;
    font-weight: normal;
    margin-top: 15px;
  }
  
  .gamercard ul {
    list-style-type: none;
  }
    .gamercard ul li {
      padding-top: 8px;
    }
      
      .gamercard ul li strong {
        color: #666;
      }
      
  .gamercard ul.games li {
    display: inline-block; 
    margin-right: 20px;
    text-align: center;
    font-weight: bold;
    width: 85px;
    vertical-align: top;
  }
    .gamercard ul.games li img {
      margin: 0 auto;
      width: 85px;
    }
  
  .gamercard a {
    color: #78bb58;
  }
  
  .gamercard .clear {
    clear: both;
  }
  
</style>
</head>
<body>

	<!-- gamercard -->
<div class="gamercard">
  
  <!-- profile image -->
  <img src="<?php echo $profile->AvatarBody; ?>" alt="<?php echo $profile->Gamertag; ?>" class="avatar" />

  <!-- gamer name -->
  <h1><img src="<?php echo $profile->AvatarTile; ?>" alt="<?php echo $profile->Gamertag; ?>" /><?php echo $profile->Gamertag; ?></h1>

  <!-- personal info -->
  <h2>The Legend</h2>
  <ul>
    <li><strong>Name:</strong> <?php echo $profile->Name; ?></li>
    <li><strong>Bio:</strong> <?php echo $profile->Bio; ?></li>
    <li><strong>Location:</strong> <?php echo $profile->Location; ?></li>
    <li><strong>Motto:</strong> <?php echo $profile->Motto; ?></li>
    <li><strong>Online:</strong> <?php echo $profile->IsOnline ? 'Online' : 'Offline'; ?></li>
    <li><strong>Status:</strong> <?php echo $profile->IsOnline ? $profile->OnlineStatus : '(none)'; ?></li>
  </ul>

  <?php if(count($games->PlayedGames)): ?>
  <!-- recent games -->
  <h2>Recent Games</h2>
  <ul class="games">
    <?php foreach($games->PlayedGames as $game): ?>
       <li><a href="<?php echo $game->Url; ?>"><img src="<?php echo $game->BoxArt; ?>" alt="<?php echo $game->Title; ?>" /></a><br /><?php echo $game->Title; ?></li> 
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
  
  <div class="clear"></div>
</div>
</body>
</html>
