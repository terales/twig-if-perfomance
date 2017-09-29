<?php

require_once './twig1/vendor/autoload.php';
$twig = new Twig_Environment(new Twig_Loader_Filesystem(__DIR__));

loadTemplate('inline-version.twig', $twig);
loadTemplate('include-version.twig', $twig);

function loadTemplate($filename, $twig) {
    $start = microtime(true);
    $template = $twig->load($filename);
    echo sprintf('%s: %s', $filename, microtime(true) - $start) . PHP_EOL;
}
