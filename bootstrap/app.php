<?php
$app = new Symfony\Component\Console\Application();

// register commands
$app->add(new server());

return $app;