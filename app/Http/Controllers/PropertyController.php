<?php

namespace App\Http\Controllers;

use App\Account;
use App\GuideLine;
use App\Property;
use App\PropertySell;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{

    function my()
    {
        $property = Property::where('agent', Auth::id())->get()->all();
        return view('property.MyProperty', ['datas' => $property]);
    }

    function new()
    {
        return view('property.NewProperty');
    }

    function filter(Request $request)
    {
        $filter = [];
        if (isset($_GET['type']) && $_GET['type'] == "Beli") $filter[] = ['isSell', true];
        if (isset($_GET['type']) && $_GET['type'] == "Sewa") $filter[] = ['isRent', true];
        if (isset($_GET['km']) && $_GET['km'] != 0 && $_GET['km'] != 99) $filter[] = ['bath_room', $_GET['km']];
        if (isset($_GET['kamar']) && $_GET['kamar'] != 0 && $_GET['kamar'] != 99) $filter[] = ['bed_room', $_GET['kamar']];
        if (isset($_GET['land']) && $_GET['land'] != 0 && $_GET['land'] != 99) $filter[] = ['land_area', '<', $_GET['land']];
        if (isset($_GET['location']) && $_GET['location'] != '') $filter[] = ['address', 'LIKE', '%' . $_GET['location'] . '%'];
        return view('public.PropertyFilter')->with('properties', Property::where($filter)->get());
    }

    function detail($id)
    {
        return view('public.PropertyDetail', ['property' => Property::find($id)]);
    }

    protected function validator($data)
    {
        return Validator::make($data->all(), [
            'category' => ['required'],
//            'isSell' => ['required'],
//            'isRent' => ['required'],
            'name' => ['required'],
            'bath_room' => ['required'],
            'bed_room' => ['required'],
            'stories' => ['required'],
            'land_area' => ['required'],
            'building_area' => ['required'],
//            'location' => ['required'],
            'address' => ['required'],
        ]);
    }

    function onNew(Request $request)
    {
        $data = [
            'agent' => Auth::id(),
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
            'image' => HelperController::uploadImages('property', $request->file('image')),
        ];
        $data['main_image'] = explode(',', $data['image'])[0];
        $validator = $this->validator($request);

            if (!$validator->fails()) {
            if (count(explode(',', $data['image'])) > 7) return redirect()->back()->withErrors('Hanya 7 Gambar yang Diperbolehkan');
            Property::create($data);
            return redirect()->back();
        }
        return redirect()->back()->withErrors($validator);
    }

    function delete()
    {
        return redirect()->route('MyProperty');
    }
}
