<?php

require 'vendor/autoload.php';
require 'variables.php';

use Core\App;

if($buildUrlsFromPaginatedSite) {
    App::buildUrlsFromPaginatedSite($fileName, $paginatedUrl, $fromPage, $toPage, $containerNode, $linkInsideContainer);
}

if ($getLinksFromHtml) {
    App::getLinksFromHtml($fileName, $pageUrl, $containerNode, $linkInsideContainer);
}