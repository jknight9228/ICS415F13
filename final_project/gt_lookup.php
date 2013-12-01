<?php
// Create connection
$con=mysqli_connect("localhost","root", "", "login");
$select=mysql_select_db("search");

error_reporting(0);
//Check if the user has already performed a search
if(isset($_POST['gamertag'])){
	$gamertag = urlencode($_POST['gamertag']);
}else{
	$gamertag = 'shiningXfinger';
}

// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$gtag = mysqli_escape_string($con, $_POST['gamertag']);


$sql =
"CREATE TABLE IF NOT EXISTS search
(
PID INT NOT NULL AUTO_INCREMENT,
gtag varchar(100) not null,
primary key(pid)
)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


	
	// Get profile information
	$profile = json_decode(file_get_contents('http://www.xboxleaders.com/api/profile.json?gamertag='.$gamertag));
	$profile = $profile->Data;
	if($profile == NULL){
		echo "Sorry, no matches were returned";
		echo "</br> <a href='gt_lookup.php'>Back to search</a>";
	}else{
	// Get game information
	$games = json_decode(file_get_contents('http://www.xboxleaders.com/api/games.json?gamertag='.$gamertag));
	$games = $games->Data;
	$insert = "INSERT INTO Search (gtag) VALUES ('$gtag')";
	if ($result = mysqli_query($con, $insert))
	{
	}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
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

	<!-- Search -->
	<form name="gtSearch"  class="form-group" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<input type="text" class="form-control" role="search" name="gamertag" placeholder="Enter a gamertag here" autofocus="autofocus">
		<button type="submit" class="btn btn-default"> Search </button>
	</form>

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
       <li><a href="<?php echo $game->Url; ?>" target="_blank"><img src="<?php echo $game->BoxArt; ?>" alt="<?php echo $game->Title; ?>" /></a><br /><?php echo $game->Title; ?></li> 
    <?php endforeach; ?>
  </ul>
  <?php endif; 
  }
  ?>
  
  <div class="clear"></div>
</div>
</body>
</html>
