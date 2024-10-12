<?php

namespace App\Http\Controllers;

class listController extends Controller
{
    public function showItem(){
        $items = [
            ['name' => 'apple','price'=>3.00,'quantity'=>5 ,'total'=>15.00],
            ['name' => 'orange','price'=>5.00,'quantity'=>6 ,'total'=>30.00],
            ['name' => 'banana','price'=>6.00,'quantity'=>2 ,'total'=>12.00],
            ['name' => 'mango','price'=>8.00,'quantity'=>3 ,'total'=>24.00],
            ['name' => 'Dates','price'=>9.00,'quantity'=>1 ,'total'=>9.00],
        ];
        $total = 0;
        foreach ($items as $item) {
            $total = $total +$item['total'];
        }
        return view('welcome',compact('items','total'));
    }
}
