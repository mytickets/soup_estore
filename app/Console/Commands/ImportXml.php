<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;
// use ;
use App\Product;
use App\Cat;

// namespace App\Jobs;
// use Kalnoy\Nestedset\NodeTrait;

// use Illuminate\Bus\Queueable;
// use Illuminate\Foundation\Bus\Dispatchable;
// use Illuminate\Support\Facades\Storage;
// use App\Product;
// use App\Cat;
/* the use section you are going to need */
// use Illuminate\Events\Dispatcher;
// use Illuminate\Database\Eloquent\Model;


function saveFile($urlf, $saveFolder){
    $url = rawurldecode($urlf);
    echo $url." \n";

    echo "file_get_contents \n";
    $img = file_get_contents($url);
    $nname = basename($url);
    file_put_contents($saveFolder . $nname, $img);
    echo $saveFolder . $nname ." \n";
}


class ImportXml extends Command
{

    // use Dispatchable, Queueable;
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:xml';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // var_dump();
        echo "Do something\n";
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_cats.xml -O public\storage\data_cats.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_prices.xml -O public\storage\data_prices.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_items.xml -O public\storage\data_items.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');
        // exec('wget --secure-protocol=TLSv1 --no-check-certificate --header="Content-Type: text/xml" --http-user=18 --http-password=18 --post-file=post_pricetypes.xml -O public\storage\data_pricetypes.xml -q https://46.39.29.2:2244/rk7api/v0/xmlinterface.xml');


        
    }
}
