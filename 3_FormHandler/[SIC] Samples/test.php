<?php

var_dump($_ENV['REMOTE_PORT']);

$new_port=$_ENV['REMOTE_PORT']+2;

var_dump($new_port);