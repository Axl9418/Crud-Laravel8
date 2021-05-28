<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemEditRequest;

class ItemController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //All items of the table
        $items = Item::all();
        return view('items.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemCreateRequest $request)
    {

        //Validation
        /*$fields = [
            'code'=>'required|string|max:10',
            'description'=>'required|string|max:50',
            'quantity'=>'required|numeric|min:0|not_in:0',
            'price'=>'required|numeric|between:1,999.99'
        ];*/

        //$this->validate($request, $fields);

        //$request->validated();


        $items = new Item();

        $items->code = $request->get('code');
        $items->description = $request->get('description');
        $items->quantity = $request->get('quantity');
        $items->price = $request->get('price');

        //Save on database
        $items->save();

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemEditRequest $request, $id)
    {
        $item = Item::find($id);

        $item->code = $request->get('code');
        $item->description = $request->get('description');
        $item->quantity = $request->get('quantity');
        $item->price = $request->get('price');

        //Update on database
        $item->save();

        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('/items');
    }
}
