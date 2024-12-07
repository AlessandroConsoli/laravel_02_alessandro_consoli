<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $title = 'Benvenuti nella Homepage';
        return view('Homepage',['titolo'=>$title]);
    }

    PUBLIC function usersList(){

        $arrayUsers = [
            ['name'=>'Vercinge', 'surname'=>'Torige',],
            ['name'=>'Ajeje', 'surname'=>'Brazov',],
            ['name'=>'Leonardo', 'surname'=>'Da Vinci',],
            ['name'=>'Mario', 'surname'=>'Rossi',],
        ];
    
        return view('about_us',['users'=>$arrayUsers]);
    }

    public function shopPage(){

        $arrayProducts = [
            ['brand'=>'Samsung', 'productName'=>'S24'],
            ['brand'=>'Huawei', 'productName'=>'Pura 70'],
            ['brand'=>'Xiaomi', 'productName'=>'13T Pro'],
            ['brand'=>'Apple', 'productName'=>'iPhone 16'],
        ];

        return view('shop', ['products'=>$arrayProducts]);
    }

    public function showServices(){ 
        return view('services');
    }

}
