<?php

$doc = new DOMDocument();
/*
    // init the resource
    $ch = curl_init();

    $url = 'https://www.formula1.com/en/racing/2019.html';

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => false,
    ]);

    $output = curl_exec($ch);

    $fp = fopen ('downloads/calender.html', 'w+');
    fwrite($fp, $output);
*/

$url = 'downloads/calender.html';
$fp = fopen ($url, 'r');

// We don't want to bother with white spaces
$doc->preserveWhiteSpace = false;

$output = fread($fp, filesize($url));
@$doc->loadHTML($output);
$doc->recover;

$xpath = new DOMXPath($doc);

// We starts from the root element
$query = "//a[contains(@class, 'event-item-link')]";

/** @var DOMNodeList $entries */
$entries = $xpath->query($query);

print "<pre>";
foreach ($entries as $entry) {
    /** @var DOMElement $entry */
    $entry = $entry;
//    var_dump($entry);
    $countryName = $entry->getAttribute('data-racecountryname');
    $meetingKey = $entry->getAttribute('data-meetingkey');
    $url =  "https://www.formula1.com/en/results.html/2019/races/$meetingKey/$countryName/race-result.html";
//    print $url . "\n";

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => false,
    ]);

    $output = curl_exec($ch);
    print $output;
    exit();
}