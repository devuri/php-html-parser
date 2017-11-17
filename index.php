<?php

require 'vendor/autoload.php';
require 'variables.php';

use Core\App;

App::execute($fileName, $paginatedUrl, $fromPage, $toPage, $containerNode, $linkInsideContainer);