<?php

require 'vendor/autoload.php';
require 'variables.php';

use Core\App;

App::execute($fileName, $fromPage, $toPage, $containerNode, $linkInsideContainer);