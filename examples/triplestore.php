<?php
require __DIR__."/../vendor/autoload.php";

use Islandora\Chullo\TriplestoreClient;

$triplestore = TriplestoreClient::create('http://127.0.0.1:8081/bigdata/namespace/kb/sparql/');

$sparql = <<<EOD
    PREFIX fedora: <http://fedora.info/definitions/v4/repository#>

    SELECT ?s
    WHERE {
        ?s fedora:hasParent <http://localhost:8080/fcrepo/rest/> .
    }
    LIMIT 25
EOD;

$results = $triplestore->query($sparql);

foreach ($results as $triple) {
    echo $triple->s . "\n";
}