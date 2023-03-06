<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //in view--> Items folder--> showitem.blade.php file returning
        return view ('Items.Show');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Items.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //can get all inputs to the controller  dd($request->all());    
       dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemModel  $itemModel
     * @return \Illuminate\Http\Response
     */
    public function show(ItemModel $itemModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemModel  $itemModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemModel $itemModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemModel  $itemModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemModel $itemModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemModel  $itemModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemModel $itemModel)
    {
        //
    }
}
