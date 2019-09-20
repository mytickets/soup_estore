<?php

$filePath = './public/uploads/images/Оливье/';
$word = "Омлет";

function saveFile($url, $saveFolder){
    $url = rawurldecode($url);
    echo $url." \n";

    echo "file_get_contents \n";
    $img = file_get_contents($url);
    $nname = basename($url);
    file_put_contents($saveFolder . $nname, $img);
    echo $saveFolder . $nname ." \n";
}

function scrapingImage($word){
    $word = preg_replace('/[ 　]/u', '+', $word);
    $serchUrl = "https://www.google.co.jp/search?tbm=isch&gs_l=img&q=" . $word;

    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'header' => 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.107'
        ]
    ]);

    $html = file_get_contents($serchUrl, false, $context);
    $html = str_replace(["\r\n", "\r", "\n"], '', $html);

    $pattern = '/\"ou\":\"(.*?)\",/u';
    preg_match_all($pattern, $html, $imgUrls);

        return $imgUrls[1]; // first
}


$urls = scrapingImage($word);
// var_dump($urls);

$i=0;
foreach ($urls as $url1) {

    if ($i>0) { break; } 
    if (strpos($url1, '?') !== false) {     continue;    } 
	if (strpos($url1, '%') !== false) {		continue;    } 
	if (strpos($url1, ' ') !== false) {		continue;	 }

	if (strpos(basename($url1), '.') !== false) {
		echo $i." ".basename($url1)." \n";
		saveFile($url1, $filePath);
	}
	$i++;
}
