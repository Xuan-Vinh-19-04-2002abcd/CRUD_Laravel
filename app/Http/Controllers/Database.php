<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crudDatabase;
use App\Http\Requests\demoformrequest;
class Database extends Controller
{
   public function showDatabase(){
        $product = new crudDatabase();
        $listProduct = $product -> getAllData();
        return view('ReadDatabase',compact('listProduct'));
    }
    public function addDatabase()
    {
        return view('FromAddData');
    }
    public function PostDatabase(Request $request,demoformrequest $requestform)
    {
        $product = new crudDatabase();
        $arr = [
            'name_product' => $request->input('name'),
            'price_product' => $request->input('price'),
            'image_product' => $request->input('img')
        ];
        $product->InsertData($arr); 
        return redirect()->route('showproduct');
    }
    public function getID($id){
        $product = new crudDatabase();
        $sp =$product->getDataToEdit($id);
        foreach($sp as $value){
            $item = [
                'id' => $value->id_product,
                'name' => $value->name_product,
                'price' => $value->price_product,
                'img' => $value->image_product
            ];
        }
        dd($item);
        return view('FormEdit',compact('item'));
        
    }
    public function edit(Request $request,$id,demoformrequest $requestform)
    {
        $arr = [
            'name_product' => $request->input('name'),
            'price_product' => $request->input('price'),
            'image_product' => $request->input('img')
        ];
        
        // dd($arr,$id);
        $product = new crudDatabase();
        $product ->UpdateData($id,$arr);
        return redirect()->route('showproduct');
    }   
    public function delete($id){
        $product = new crudDatabase();
        $product->DeleteData($id);
        return redirect()->route('showproduct');
    }
}
