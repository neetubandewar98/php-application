<?php
$x=mysql_connect("localhost","root","");
mysql_select_db("webinar");
if($x)
{
echo "connected";
}
else
{
echo "not connected";
}


?>