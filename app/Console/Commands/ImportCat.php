<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;
// use ;
use App\Product;
use App\Cat;

class ImportCat extends Command {

    // php artisan import:cat
    protected $signature = 'import:cat';
    protected $description = 'Categories import';
    public function __construct()    {        parent::__construct();    }
    public function handle(){
    echo "Get cats file skip\n";
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_cats.xml -O public\storage\data_cats.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');

    echo "Import Cats: ";
    // Cat::truncate();
        $data_cats = Storage::get('public\data_cats.xml');
        $data_cats_json1 = json_encode(  simplexml_load_string($data_cats) );
        $data_cats_array1 = json_decode($data_cats_json1,TRUE);
        // echo "<br>";
        print count($data_cats_array1["RK7Reference"]["Items"]['Item']);
        echo " = ";
        echo count(Cat::all());
        echo "\n";

    // FOREACH CATS
            foreach ($data_cats_array1["RK7Reference"]["Items"]['Item'] as $item) {
                if ($item['@attributes']['Ident']==0) {                    continue;                }
        // FIND ID
                $row = Cat::find($item['@attributes']['Ident']);
                if ($row === null) {
        // RANDOM
                    $arrXX = array("uploads/menu-title-burgers.jpg", "uploads/menu-title-desserts.jpg", "uploads/menu-title-drinks.jpg", "uploads/menu-title-pasta.jpg", "uploads/menu-title-pizza.jpg", "uploads/menu-title-sushi.jpg" );
                    $randIndex2 = array_rand($arrXX, 2);
        // CREATE
                    Cat::create(array('id' => $item['@attributes']['Ident'], 'name' => $item['@attributes']['Name'], 'ident' => $item['@attributes']['Ident'], 'image'=> $arrXX[$randIndex2[0]], 'xml_name' => $item['@attributes']['Name'], "parent_id" => (int) $item['@attributes']['MainParentIdent'] ));
                } else {
        // UPDATE
                    $row->update(array('ident' => $item['@attributes']['Ident'], 'xml_name' => $item['@attributes']['Name'], "parent_id" => (int) $item['@attributes']['MainParentIdent'] ));
                }
        // UNSET ROW
                unset($row);
                echo "+";
            }
            echo "\n";
    // FOREACH CATS END

    }
}
