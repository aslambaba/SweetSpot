<?php

namespace App\Http\Controllers;

use App\Product;
use App\Messege;
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
    public function AddMessege(Request $req){
        
        $new_messege = new Messege();
        $new_messege->Messege_Sender_Name = $req->Name;
        $new_messege->Messege_Sender_Email = $req->Email;
        $new_messege->Messege_Body = $req->Messege;

        return redirect('/contactus');
        
    }
}
