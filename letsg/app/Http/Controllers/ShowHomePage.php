<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ShowHomePage
 * @package App\Http\Controllers
 * @property-read CrudPanel $crud
 */
class ShowHomePage extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Product');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/');
        $this->crud->setEntityNameStrings('product', 'products');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        /*$this->crud->setFromDb();*/
        $this->crud->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addColumn(['name' => 'sku', 'type' => 'text', 'label' => 'SKU / Product Unique ID']);
        $this->crud->addColumn(['name' => 'price', 'type' => 'text', 'label' => 'Price / €']);
        $this->crud->addColumn(['name' => 'status', 'type' => 'text', 'label' => 'Status']);
        $this->crud->addColumn(['name' => 'user.name', 'type' => 'text', 'label' => 'User Name']);
        $this->crud->addColumn(['name' => 'category.name', 'type' => 'text', 'label' => 'Category']);
        $this->crud->addColumn(['name' => 'publish_date', 'type' => 'text', 'label' => 'Publish Date']);
        $this->crud->addColumn(['name' => 'blocking_date', 'type' => 'text', 'label' => 'Blocking Date']);
        $this->crud->addColumn(['name' => 'created_at', 'type' => 'text', 'label' => 'Created Om']);
        $this->crud->addColumn(['name' => 'updated_at', 'type' => 'text', 'label' => 'Updated On']);
    }

    public function show(Request $request)
    {
        $this->setup();
        $this->setupListOperation();
        //print_r($this->crud);
        //$this->crud->allowAccess('list');
        $products = \App\Models\Product::all();
        $this->data['crud'] = $this->crud;
        //print_r($this->crud);
        //return view('home', ['crud' => $this->crud]);
        return view('home', $this->data);
    }
}
