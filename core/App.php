<?php

namespace Core;

class App {

    public static function execute($fileName, $paginatedUrl, $fromPage, $toPage, $containerNode, $linkInsideContainer) {

        $outputFile = 'output/' . $fileName;
        if(file_exists($outputFile)) {
            unlink($outputFile);
        }

//        $paginatedArray = explode(PHP_EOL, file_get_contents('input/'. $paginatedFile));


        for($i = $fromPage; $i <= $toPage; $i++) {

            $url = str_replace('PAGE_NUMBER', $i, $paginatedUrl);
            echo 'READING URL: ' . $url . PHP_EOL;

            // Get html content section
            $scraper = new Scrape($url, 20);
            $results = $scraper->load('')->getNode($containerNode);
            $linksNodes = $scraper->getNodes($linkInsideContainer, $results);


            // Save the links
            foreach ($linksNodes as $link) {
                echo 'Found: ' . $link->getAttribute('href') . PHP_EOL;
                file_put_contents($outputFile, $link->getAttribute('href') . PHP_EOL, FILE_APPEND);
                sleep(1);
            }

        }

    }
}