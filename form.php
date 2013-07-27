<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

//the data

$data = "Name:$name \n Email:$email \n Add on comments: $comment\n\n\n";

//open the file and choose the mode

$fh = fopen("user.txt", "a");

fwrite($fh, $data);

//close the file

fclose($fh);

print "Thanks for valuable Feedback";

?>


