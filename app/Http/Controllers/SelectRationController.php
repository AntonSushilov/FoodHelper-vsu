<?php

namespace App\Http\Controllers;

use App\Ration;
use App\User;

use Illuminate\Http\Request;

class SelectRationController extends Controller
{
    public function addRation(Request $request, Ration $ration)
    {
        $ration->user()->attach(auth()->user()->id);
        return redirect()->route('guest.rations');
    }

    public function deleteRation(Request $request, Ration $ration)
    {
        $ration->user()->detach();
        return redirect()->route('home');
    }
}
