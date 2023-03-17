<?php

$con = mysqli_connect("localhost","root","", "belajar");
echo"Hello World";
if(!$con)
{
    echo "Not Connected to Server";
} else {
    echo "Connected to Server";
}
?>