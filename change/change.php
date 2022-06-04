


<?php

$name = "Want to be a valuable web developer and
Entrepreneur";
$name = preg_replace('/(\b[a-z])/i', 
'<span style="color: green">\1</span>', $name);
echo $name;
?>