<?php
//header("HTTP/1.0 404 Not Found");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: ".date(DATE_RFC822, mktime(date("H"), date("i")-1, date("s"), date("n"),   date("j"),   date("Y")))); // Just expired
header("Last-Modified: ".date(DATE_RFC822, mktime(date("H"), date("i")-1, date("s"), date("n"),   date("j"),   date("Y")))); // Just updated
readfile("index.html");
?>