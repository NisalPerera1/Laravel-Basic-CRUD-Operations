<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ItemController extends Controller
{
   
    public function index()
    {
        $data = ItemModel::get();
      //item variable created and fetched data from model into item variable
      return view('Items.Index', compact('data'));
      
      
    }

    public function create()
    {
        return view ('Items.Create');
    }

    public function store(Request $request)
{
    // Validate the input fields
    $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);

    // Create a new item record in the database
    ItemModel::create($request->all());

    // Redirect to the index page with a success message
    return redirect()->route('items.index')->with('success', 'Item added successfully.');
}


    public function show(ItemModel $itemModel)
    {
        //
    }

    public function edit(ItemModel $itemModel)
    {
        //
    }

    
    public function update(Request $request, ItemModel $itemModel)
    {
        //
    }

    public function destroy(ItemModel $itemModel)
    {
        //
    }
}
