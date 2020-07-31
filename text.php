<?php
$img = get_headers("http://static.adzerk.net/Advertisers/2564.jpg", 1);
print $img["Content-Length"];
?>
