<?php
$path='http://www.kompletecare.com/';
$html = file_get_contents($path);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");
for ($i = 0; $i < $hrefs->length; $i++ ) {
$href = $hrefs->item($i);
$url = $href->getAttribute('href');
echo $url.'<br>';
}
?>