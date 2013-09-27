<?php

if (isset($_POST['comment'])) 
{
$comment = $_POST['comment'] .PHP_EOL;
$myFile = "comments.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, $comment);
fclose($fh);
}

echo "The following comment has been submitted:";
echo "<br/>";
echo $comment;
echo "<br/>";
echo "<html><a href=\"index.html\">Return to last page</a></html>";
echo "<br/>";
?>

