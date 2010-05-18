<?php
@unlink("configuration.txt");
@unlink("text.txt");
@unlink("cloud.png");
file_put_contents("configuration.txt", $_POST["configuration"]);
file_put_contents("text.txt", $_POST["text"]);
#header("Content-Type: image/png");
exec("java -jar ibm-word-cloud.jar -w ".escapeshellarg((int)$_POST["width"])." -h ".escapeshellarg((int)$_POST["height"])." -c configuration.txt -i text.txt -o cloud.png");
header("Location: cloud.png");
?>
