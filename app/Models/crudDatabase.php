<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class crudDatabase extends Model
{
    protected $table = 'product';
    public function getAllData(){
        $listProduct =DB::table($this->table)->get();
        return $listProduct;
    }
    public function getDataToEdit($id){
        $Product = DB::table($this->table)->where('id_product',[$id])->get();
        return $Product;
    }
    public function InsertData($arr)
    {
        DB::table('product')->insert($arr);
    }
    public function UpdateData($id,$arr)
    {   
        DB::table('product')
            ->where('id_product', [$id])
            ->update($arr); 
        echo("đã update thanh cong");
    }
    public function DeleteData($id)
    {
        DB::table('product')
        ->where('id_product', [$id])
            ->delete();
    }


}
