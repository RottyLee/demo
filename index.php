<?php
require 'autoload.php';
$dir = new \Dir\Dir();
$files = $dir->path('E:wamp64/www/demo')->gets();
var_dump($files);

?>