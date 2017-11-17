<?php

namespace Core;

class App {

    public static function execute($fileName, $fromPage, $toPage, $containerNode, $linkInsideContainer) {

        $outputFile = 'output/' . $paginatedFile;
        if(file_exists($outputFile)) {
            unlink($outputFile);
        }

        $paginatedArray = explode(PHP_EOL, file_get_contents('input/'. $paginatedFile));


        foreach($paginatedArray as $url) {

            echo 'READING URL: ' . $url . PHP_EOL;
            // Get html content section
            $scraper = new Scrape($url, 10);
            $results = $scraper->load('')->getNode($containerNode);
            $linksNodes = $scraper->getNodes($linkInsideContainer, $results);


            foreach ($linksNodes as $link) {
                echo 'Found: ' . $link->getAttribute('href') . PHP_EOL;
                file_put_contents($outputFile, $link->getAttribute('href') . PHP_EOL, FILE_APPEND);
                sleep(1);
            }

        }

    }
}