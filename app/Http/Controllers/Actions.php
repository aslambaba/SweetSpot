<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class Actions extends Controller
{
    public function AddNewProuct(Request $req){
        
        //Save Record Into DB
        $new_product = new Product();
        $new_product->ProductName = $req->Product_Name;
        $new_product->ProductPrice = $req->Product_Price;
        $new_product->ProductDescription = $req->Product_Description;
        $new_product->save();
        
        return redirect('/admin');
    }
}
