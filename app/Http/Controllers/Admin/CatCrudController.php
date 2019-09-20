<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CatRequest as StoreRequest;
use App\Http\Requests\CatRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class CatCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CatCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Cat');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/cat');
        $this->crud->setEntityNameStrings('cat', 'cats');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();


        $column_definition_array = [
           'name' => 'image', // The db column name
           'label' => "Картинка", // Table column heading
           'type' => 'image',
            // 'prefix' => 'folder/subfolder/',
            // optional width/height if 25px is not ok with you
            // 'height' => '337px',
            // 'width' => '990px',
        ];
        $this->crud->addColumn($column_definition_array);

        // $this->crud->addColumn([
        //     'type' => 'checkbox',
        //     'name' => 'menu',
        //     'label' => ' <input type="checkbox" class="crud_bulk_actions_main_checkbox" style="width: 16px; height: 16px;" />',
        //     'priority' => 1,
        //     'searchLogic' => false,
        //     'orderable' => false,
        //     'visibleInModal' => false,
        // ])->makeFirstColumn();

        $this->crud->addField([   // Checkbox
            'name' => 'menu',
            'label' => 'В меню',
            'type' => 'checkbox'
        ]);

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

        // $this->crud->removeColumns(['xml_name']);
        $this->crud->addButtonFromView('line', 'remote_images_cats', 'remote_images_cats', 'beginning');


        $column_definition_array2 = [ 'name' => 'ident', // The db column name
           'label' => "ident", // Table column heading
           'type' => "number",
           // 'prefix' => "$",
           // 'suffix' => " EUR",
           // 'decimals' => 2,
           // 'dec_point' => ',',
           'thousands_sep' => '',
        ];
        $column_definition_array4 = [ 'name' => 'parent_id', // The db column name
           'label' => "parent", // Table column heading
           'type' => "number",
           'thousands_sep' => '',
        ];
        $column_definition_array3 = [
            'name'        => 'menu',
            'label'       => 'Меню',
            'type'        => 'radio',
            'options'     => [
                                0 => "Нет",
                                1 => "Главная"
                            ]
        ];

        $this->crud->addColumn($column_definition_array2);
        $this->crud->addColumn($column_definition_array3);
        $this->crud->addColumn($column_definition_array4);


        // add asterisk for fields that are required in CatRequest
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
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function remote_images_cats($value='')
    {
        # code...
        dd($value);
        // remote_images_cats()
    }
}
