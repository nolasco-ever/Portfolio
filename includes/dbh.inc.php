
<?php

$conn = mysqli_connect('localhost','root','','Portfolio');

if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error ());
}