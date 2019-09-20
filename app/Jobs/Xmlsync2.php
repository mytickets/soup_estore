<?php

namespace App\Jobs;
use Kalnoy\Nestedset\NodeTrait;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Cat;
/* the use section you are going to need */
use Illuminate\Events\Dispatcher;
use Illuminate\Database\Eloquent\Model;


class Xmlsync
{
    use Dispatchable, Queueable;
    use NodeTrait;

    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->message = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info($this->message);
        //
        // Storage::disk('local')->put('Date.txt', 'Date.txt');
        // // // Storage::put('avatars/1', $fileContents);
        // $contents = Storage::get('Date.txt');
        // var_dump($contents);

        echo "Task: ";
        echo $this->message;
        echo "<br>";
        // Log::info($this->message);
        // dd($this->message);
        // Storage::disk('local')->put('message1.txt', $this->message);

        // $totals = App\Models\DB::table('prices')->count();
        // App\Models


        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_cats.xml -O public\storage\data_cats.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_prices.xml -O public\storage\data_prices.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_items.xml -O public\storage\data_items.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_pricetypes.xml -O public\storage\data_pricetypes.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');

        $importFile1 = Storage::get('public\data_cats.xml');
        $importFile2 = Storage::get('public\data_prices.xml');
        $importFile3 = Storage::get('public\data_items.xml');
        $importFile4 = Storage::get('public\data_pricetypes.xml');


        $xml_string3 = $importFile3;
        $xml3 = simplexml_load_string($xml_string3);
        $json3 = json_encode($xml3);
        $array3 = json_decode($json3,TRUE);
        // dd($array1);
        // dd($array["RK7Reference"]);
        // dd($array1["RK7Reference"]["Items"]['Item'][1]['@attributes']);
        // dd($array3["RK7Reference"]["Items"]["Item"][1]);


        // var_dump($array3["RK7Reference"]["Items"]['Item'][1]['@attributes']["CategPath"]);
        // var_dump($array3["RK7Reference"]["Items"]['Item'][1]['@attributes']["HighLevelGroup1"]);
        // var_dump($array3["RK7Reference"]["Items"]['Item'][1]['@attributes']["HighLevelGroup3"]);
        // var_dump($array3["RK7Reference"]["Items"]['Item'][1]['@attributes']["HighLevelGroup4"]);

        // $priceTypes="PRICETYPES.xml";
        // $importFile = File::get(storage_path('app/' . $priceTypes));
        // echo asset('storage/PRICETYPES.xml');
        // var_dump($importFile);

        echo "<br>";
        echo "Cats";
        $json1 = json_encode(  simplexml_load_string($importFile1) );
        $array1 = json_decode($json1,TRUE);
        echo "<br>";
        print count($array1["RK7Reference"]["Items"]['Item']);
        echo "<br>";
        // var_dump( ($array1["RK7Reference"]["Items"]['Item'][0]['@attributes']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][0]['@attributes']['Ident']) );
        echo "<br>";
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][1]['@attributes']['Ident']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][1]['@attributes']['Name']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][1]['@attributes']['MainParentIdent']) );
echo "<br>";
        
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][2]['@attributes']['Ident']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][2]['@attributes']['Name']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][2]['@attributes']['MainParentIdent']) );
echo "<br>";
        
        
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][3]['@attributes']['Ident']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][3]['@attributes']['Name']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][3]['@attributes']['MainParentIdent']) );
echo "<br>";
        
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][4]['@attributes']['Ident']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][4]['@attributes']['Name']) );
        var_dump( ($array1["RK7Reference"]["Items"]['Item'][4]['@attributes']['MainParentIdent']) );
echo "<br>";
echo "<br>";

Cat::truncate();
// \App\Cat::query()->delete();


foreach ($array1["RK7Reference"]["Items"]['Item'] as $item) {
    print($item['@attributes']['Ident']." ");
    print($item['@attributes']['Name']." ");
    print('parent_id '.$item['@attributes']['MainParentIdent']. ' ');

    $c = Cat::firstOrNew(array('menu' => 0, 'id' => $item['@attributes']['Ident'], 'name' => $item['@attributes']['Name'], 'ident' => $item['@attributes']['Ident'], 'image'=> ' /soup2_files/menu-title-drinks.jpg', 'xml_name' => '/soup2_files/menu-title-drinks.jpg', "parent_id" => (int) $item['@attributes']['MainParentIdent'] ));
// $c = Cat::firstOrNew(array('menu' => 0, 'id' => $item['@attributes']['Ident'], 'name' => $item['@attributes']['Name'], 'ident' => $item['@attributes']['Ident'], 'image'=> ' /soup2_files/menu-title-drinks.jpg', 'xml_name' => '/soup2_files/menu-title-drinks.jpg', "parent_id" => (int) $item['@attributes']['MainParentIdent'] ));    

    // , "_lft" => 0, "_rgt" => 0

    // $c->parent_id = $item['@attributes']['MainParentIdent'];
    // $i=$item['@attributes']['MainParentIdent'];
    // $c->parent_id = ;
    // echo (int)$item['@attributes']['MainParentIdent'];
    // $c->name = $item['@attributes']['Name']; // $item['@attributes']['Name']

    // echo $c->name;
    // lft and rgt
    // $c->_rgt = 0;
    // $c->_lft = 0;

    // $c->parent_id = (int) $item['@attributes']['MainParentIdent'];
    // var_dump($item['@attributes']['MainParentIdent']);
    echo "<br>";

    /* the code to make the events fire */
    // Model::setEventDispatcher(new Dispatcher());

    $c->save();
    // echo $c->id;
    // if ($c->parent_id==NULL ) {
    //     # code...
    //     var_dump( $c->parent_id );
    //     $c->parent_id=1;
    // }

// $data = [
//   [ 'id' => 1, 
//     'children' => [ 'id' => 2 ] 
//   ],
//   [ 'id' => 3 ],
// ];
// Cat::rebuildTree($data, true);

}



// $demo = array( 'id'=> 841, 'ident'=> 65478, 'name'=> ' Салаты123' , 'image'=> ' /soup2_files/menu-title-drinks.jpg' , ' xml_name' => '  /soup2_files/menu-title-drinks.jpg' , ' _lft' => 0, ' _rgt' => 0, 'parent_id' => 2, ' created_at' => '  2019-08-28 07:43:46' , ' updated_at' => '  2019-08-28 07:43:46'  );
// $demo = 
// $demo = array( 'id': 4, 'ident': 65478, 'name': "Салаты", 'image': "/soup2_files/menu-title-drinks.jpg", "xml_name": "/soup2_files/menu-title-drinks.jpg", "_lft": 0, "_rgt": 0, "parent_id": 2, "created_at": "2019-08-28 07:43:46", "updated_at": "2019-08-28 07:43:46" );

// $data = array(
//     array('name'=>'Coder 1', 'rep'=>'4096'),
//     array('name'=>'Coder 2', 'rep'=>'2048'),
//     //...
// );

        // $cat = new Cat($demo);

   // $cat = new Cat();

        // $cat = new Cat();
        // $cat->name = $array1["RK7Reference"]["Items"]['Item'][4]['@attributes']['Name'];
        // $cat->parent_id = $array1["RK7Reference"]["Items"]['Item'][4]['@attributes']['MainParentIdent'];
        // $cat->image = "iimg";
        // $cat->xml_name = "xmln";
        // $cat->ident = $array1["RK7Reference"]["Items"]['Item'][4]['@attributes']['Ident'];
        // $cat->save();

// http://localhost:8000/soup2_files/product-burger.jpg




// $array1["RK7Reference"]["Items"]['Item']
// $array1["RK7Reference"]["Items"]['Item']
        // $flight = new Cat;
        // $flight->name = $array1["RK7Reference"]["Items"]['Item'][2]['@attributes']['Ident']['Name'];
        // $flight->ident = $array1["RK7Reference"]["Items"]['Item'][2]['@attributes']['Ident']['Ident'];

        // $flight->save();


        echo "<br>";

echo "<hr>";
        
        echo "<br>";
        echo "Price";

        $json2 = json_encode(  simplexml_load_string($importFile2) );
        $array2 = json_decode($json2,TRUE);
        print count($array2["RK7Reference"]["Items"]['Item']);
        echo "<br> Ident PriceType Value";
        // var_dump( ($array2["RK7Reference"]["Items"]["Item"][2]['@attributes']) );
        echo "<br>";
        var_dump( ($array2["RK7Reference"]["Items"]["Item"][2]['@attributes']['Ident']) );
        echo "<br>";
        var_dump( ($array2["RK7Reference"]["Items"]["Item"][2]['@attributes']['PriceType']) );
        echo "<br>";
        var_dump( ($array2["RK7Reference"]["Items"]["Item"][2]['@attributes']['Value']) );
        // ObjectID = item_id


        
        echo "<hr>";
        echo "<br>";
        echo "PriceType ";

        $json4 = json_encode(  simplexml_load_string($importFile4) );
        $array4 = json_decode($json4,TRUE);
        print count($array4["RK7Reference"]);
        echo "<br>Id ";
        var_dump( ($array4["RK7Reference"]["Items"]["Item"][0]['@attributes']["Ident"]) );
        echo "<br>Name ";
        var_dump( ($array4["RK7Reference"]["Items"]["Item"][0]['@attributes']["Name"]) );
        echo "<br>";
        echo "<br>Id ";
        var_dump( ($array4["RK7Reference"]["Items"]["Item"][1]['@attributes']["Ident"]) );
        echo "<br>Name ";
        var_dump( ($array4["RK7Reference"]["Items"]["Item"][1]['@attributes']["Name"]) );
        echo "<br>";
        echo "<br>";
        // var_dump( ($array4["RK7Reference"]["Items"]["Item"][1]) );
        // var_dump( ($array4["RK7Reference"]["Items"]) );
        echo "<br>";

        // var_dump( ($array4["RK7Reference"]["Items"]["Item"][2]) );
        

        echo "<br>";
        echo "Items: ";
        print count($array3["RK7Reference"]["Items"]['Item']);
        echo "<br>Ident ";
        var_dump($array3["RK7Reference"]["Items"]['Item'][1]['@attributes']['Ident']);
        echo "<br>Name ";
        var_dump($array3["RK7Reference"]["Items"]['Item'][1]['@attributes']['Name']);
        echo "<br>CategPath ";
        var_dump($array3["RK7Reference"]["Items"]['Item'][1]['@attributes']["CategPath"]);
        echo "<br>";


    }
}
