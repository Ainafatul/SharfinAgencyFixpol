<?php

namespace App\Http\Controllers;

use App\Account;
use App\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PropertyController extends Controller
{
    function onRegisterProperty(Request $request)
    {
        $data = [
            'agent' => Auth::user()->id,
            'category' => $request['category'],
            'isSell' => $request['isSell'] == 'on',
            'isRent' => $request['isRent'] == 'on',
            'name' => $request['name'],
            'bath_room' => $request['bath_room'],
            'bed_room' => $request['bed_room'],
            'stories' => $request['stories'],
            'land_area' => $request['land_area'],
            'building_area' => $request['building_area'],
            'location' => $request['location'],
            'address' => $request['address'],
            'description' => $request['description'],
//            'image' => $request['image'],
//            'main_Image' => $request['main_Image'],
        ];

        Property::create($data);
        return redirect()->back();
    }
}
