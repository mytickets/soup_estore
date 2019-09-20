<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;
// use ;
use App\Product;
use App\Cat;

class ImportImage extends Command {

    protected $signature = 'import:image';
    protected $description = 'Images import';
    public function __construct()    {        parent::__construct();    }

    public function saveFile($urlf, $saveFolder){
        $url = rawurldecode($urlf);
        echo $url." \n";

        echo "file_get_contents \n";
        $img = file_get_contents($url);
        $nname = basename($url);
        file_put_contents($saveFolder . $nname, $img);
        echo $saveFolder . $nname ." \n";
    }

    public function scrapingImage($word){
        $word = preg_replace('/[ 　]/u', '+', $word);
        $serchUrl = "https://www.google.com/search?tbm=isch&gs_l=img&q=" . $word;

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


    public function handle(){
        echo "Get images by word\n";

        $pall = Product::all();


        $i=0;
        foreach ($pall as $p) {
            // STOP
            // if ($i>0) {                break;            }
            $i++;
            echo $p->name;
            echo "\n";
            $imgs = ImportImage::scrapingImage($p->name);

            $iiii=0;
            // $arrayName1 = array('' => , );
            foreach ($imgs as $ikey=> $im) {
                // if ($iiii>2) {                break;            }
                // $ikey
                // $imgs[$ikey]=urldecode($im);

                if (strpos($im, '%') !== false) {  unset($imgs[$ikey]); echo "\e[32m#decode ".urldecode($im)."\n"; continue;    } 
                if (strpos($im, '?') !== false) {  unset($imgs[$ikey]); echo "\e[91m#remove \e[39m".$im."\n"; continue;    } 
                if (strpos($im, ' ') !== false) {  unset($imgs[$ikey]); echo "\e[91m#remove ".$im."\n"; continue;    }
                // echo urldecode($im);
                

                // if (basename($im)) {  unset($imgs[$ikey]); echo basename($im)."\n";   continue;    }
                // if (strpos(basename($im), '.') !== false) 
                // {
                //     // echo basename($im)."\n";
                //     // unset($imgs[$ikey]);
                //     continue;
                // }                 
                // $imgs[$ikey]=urldecode($im);
                // echo $im."\n";

            }

            echo "\n\n";
            foreach ($imgs as $ikey=> $im) {
                if (strpos(basename($im), '.') !== false) 
                {


                    // // list($width, $height) = getimagesize($im);
                    // // W H
                    // list($width, $height) = getimagesize($im);
                    // // $arr = array('h' => $height, 'w' => $width );
                    // // print_r($im);
                    // // print_r("\n");
                    // echo $width."x".$height." ".$width/$height;
                    // if (($width/$height)>1.9) {
                    //     echo "\e[95m#($width/$height)>1.9 \e[39m".$im."\n";
                    // } else {
                        echo "\e[95m# \e[39m".$im."\n";
                    // }
                    print_r("\n");

                } else { // BAD = true
                            unset($imgs[$ikey]);
                            echo "\e[95m#remove BAD \e[39m".$im."\n";
                            continue;
                        }
            }

            $json1 = json_encode(  $imgs );
            // var_dump($imgs);
            $p->remote_images=$json1;
            $p->save();
        // $array1 = json_decode($json1,TRUE);

           // ImportImage::saveFile();
        }
        // echo $i."\n";


// GOOGLE IMAGES EACH FOR PRODUCT
        // foreach ($array3["RK7Reference"]["Items"]['Item'] as $item) {

        //     $row = Product::find($item['@attributes']['Ident']);

        //     $urls = scrapingImage($item['@attributes']['Name']);
        //     echo $item['@attributes']['Name']."\n";
        //     $i=0;
        //     foreach ($urls as $url1) {

        //         if ($i>0) { break; } 
        //         if (strpos($url1, '?') !== false) {     continue;    } 
        //         if (strpos($url1, '%') !== false) {     continue;    } 
        //         if (strpos($url1, ' ') !== false) {     continue;    }

        //         if (strpos(basename($url1), '.') !== false) {
        //             echo $i." ".basename($url1)." \n";
        //             echo $i." ".$url1." \n";
        //             $ffimg = $url1;
        //             // saveFile($url1, $filePath);
        //             $i=$i+1;
        //         }
        //     }

        //     if ($row === null) {

        //         Product::create( array('id' => $item['@attributes']['Ident'], 'name' => $item['@attributes']['Name'], 'ident' => $item['@attributes']['Ident'], 'xml_name' => $item['@attributes']['Name'], "cat_id" => (int) $item['@attributes']['MainParentIdent'], 'xml_cat' => $item['@attributes']['CategPath'], 'image'=> $ffimg ) );
        //         // Product::create( array('id' => $item['@attributes']['Ident'], 'name' => $item['@attributes']['Name'], 'ident' => $item['@attributes']['Ident'], 'xml_name' => $item['@attributes']['Name'], "cat_id" => (int) $item['@attributes']['MainParentIdent'], 'xml_cat' => $item['@attributes']['CategPath'], 'image'=> $arrX[$randIndex[0]] ) );
        //     } else {
        //         $row->update( array('ident' => $item['@attributes']['Ident'], 'xml_name' => $item['@attributes']['Name'], "cat_id" => (int) $item['@attributes']['MainParentIdent'], 'xml_cat' => $item['@attributes']['CategPath'], 'images'=> $urls ) );
        //     }
        //     unset($row);

        //     // echo $arrX[$randIndex[0]];
        //     unset($randIndex);
        //     echo "|";

        // }
        echo "\n";


    }
}
