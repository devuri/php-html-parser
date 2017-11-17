<?php

/**
 * Configuration
 */

// Use PAGE_NUMBER in the url to by replaced by the number iterator
$paginatedUrl = 'http://guia.administradorlegal.com.ar/Administrador/categoria/administradores-de-consorcios/page/PAGE_NUMBER/';
$fromPage = 137;
$toPage = 297;

// File name for output folder
$fileName = '2017_11_17_guia_administradores.txt';

// Example => //div[@class="container"]
$containerNode = '//div[@class="list"]';

// Example (you are inside the first node) => ./article/h2/a
$linkInsideContainer = './article/h2/a';