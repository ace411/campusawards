<?php

$dir = str_replace('\\', '/', dirname(__DIR__));

include $dir . '/app/start.php';

require $voter_root . 'cast_vote.php';