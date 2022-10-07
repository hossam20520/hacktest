<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registerd;
class ShopController extends Controller
{
  public function sendData(Request $request){
        $registerd = Registerd::create($request->all());
        //return redirect('https://www.facebook.com/');
    }
}
