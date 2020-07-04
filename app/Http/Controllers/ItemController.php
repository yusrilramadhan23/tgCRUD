<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    public function index(){
        $items = itemModel::get_all();
        //membawa seluruh data di item, cara melihat bisa menggunakan dd
        return view('item_index', compact('items'));
        //untuk membawa data items gunakan array assosiatif ['items' => $items]atau compact 
    }
    public function create() {
        return view('item.form');
    }
    public function store(Request $request) {
        //dd($request->all());
        unset($data["_token"]);
        $item = ItemModel::save($data);
        //dd($item);
        if($item) {
            return redirect('/items');
        }
    }
    public function show($id) {
        $item = ItemModel::find_by_id($id);
        return view('item.show', compact('item'));
    }

    public function edit($id){
        $item = ItemModel::find_by_id($id);
        return view('item.edit', compact('item'));
    }

    public function update($id, Request $request){
        $item = ItemModel::update($id, $request->all());
        return redirect('/items');
    }
    public function destroy($id) {
        $deleted = ItemModel::destroy($id);
        return redirect('/items');
    }
}

