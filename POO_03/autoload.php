<?php

require __DIR__.'/src/Autoload.php';

$autoload = new MvOliveira\Autoload;
$autoload->register();

$autoload->addNamespace('MvOliveira', 'src');
