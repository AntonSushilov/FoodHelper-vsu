<?php

namespace App\Http\Controllers;

use App\Ration;
use App\User;

use Illuminate\Http\Request;

class SelectRationController extends Controller
{
    public function toggle(Request $request, Ration $ration)
    {
        $ration->selectUser()->toggle(auth()->user()->id);

        return redirect()->back();
    }

}
