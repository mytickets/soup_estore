<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProductRequest as StoreRequest;
use App\Http\Requests\ProductRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Product');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/product');
        $this->crud->setEntityNameStrings('product', 'products');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add a column, at the end of the stack

        // add multiple columns, at the end of the stack

        $column_definition_array = [
           'name' => 'image', // The db column name
           'label' => "Картинка", // Table column heading
           'type' => 'image',
            // 'prefix' => 'folder/subfolder/',
            // optional width/height if 25px is not ok with you
            // 'height' => '30px',
            // 'width' => '30px',
        ];

        $column_definition_array2 = [ 'name' => 'ident', // The db column name
           'label' => "ident", // Table column heading
           'type' => "number",
           // 'prefix' => "$",
           // 'suffix' => " EUR",
           // 'decimals' => 2,
           // 'dec_point' => ',',
           'thousands_sep' => '',
        ];

        $column_definition_array3 = [ 'name' => 'cat_id', // The db column name
           'label' => "cat_id", // Table column heading
           'type' => "number",
           // 'prefix' => "$",
           // 'suffix' => " EUR",
           // 'decimals' => 2,
           // 'dec_point' => ',',
           'thousands_sep' => '',
        ];

        $this->crud->addColumn($column_definition_array);
        $this->crud->addColumn($column_definition_array2);
        $this->crud->addColumn($column_definition_array3);

        $this->crud->addButtonFromView('line', 'remote_images', 'remote_images', 'beginning');


        // $column_definition_array = [
        //    'name' => 'count', // The db column name
        //    'label' => "count", // Table column heading
        //    'type' => 'image',
        //     // 'prefix' => 'folder/subfolder/',
        //     // optional width/height if 25px is not ok with you
        //     // 'height' => '30px',
        //     // 'width' => '30px',
        // ];
        // $this->crud->addColumn($column_definition_array);
        // $this->crud->addColumns([$column_definition_array, $another_column_definition_array]);

        $this->crud->addField([ // image
            'label' => "Картинка",
            'name' => "image",
            'type' => 'image',
            'upload' => true,
            'crop' => false, // set to true to allow cropping, false to disable
            'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
            // 'disk' => 'public', // in case you need to show images from a different disk
            // 'prefix' => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        $this->crud->removeColumns(['xml_name']);


        // add asterisk for fields that are required in ProductRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // if ($this->crud->entry->image) {
            # code...
        // }
        // $this->crud->price = 11;
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function moderate() 
    {
    // show a form that does something
    }
    public function remote_images() 
    {
    // show a form that does something
        
    }

}
