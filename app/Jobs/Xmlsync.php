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
        echo "Task: ";
        echo $this->message;
        echo "<br>";

// php artisan job:dispatch Xmlsync



    }
}
