<?php

namespace App\Http\Controllers;

use App\Account;
use App\City;
use App\GuideLine;
use App\Like;
use App\Property;
use App\PropertyRent;
use App\PropertySell;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Integer;

class PropertyController extends Controller
{

    function my()
    {
        $property = Property::where('agent', Auth::id())->get()->all();

        return view('property.MyProperty', ['datas' => $property]);
    }

    function chart()
    {
        $datas = Like::where('user', Auth::id())->get()->all();
        $result = [];
        foreach ($datas as $data) {
            $result[] = Property::find($data->property);
        }
        return view('user.MyChart', ['datas' => $result]);
    }

    function new()
    {
        return view('property.NewProperty');
    }

    function filter(Request $request)
    {
        $filter = [];
//        $data->isSell = PropertySell::find($data->isSell);
//        $data->isRent = PropertyRent::find($data->isRent);
        $city = City::where('name', 'LIKE', '%' . $request->location . '%')->get()->first();
        if (isset($_GET['location']) && $_GET['location'] != '') $filter[] = ['location', 'LIKE', '%' . $city->id . '%'];
        if (isset($_GET['type']) && $_GET['type'] == "Beli") $filter[] = ['isSell', '!=', null];
        if (isset($_GET['type']) && $_GET['type'] == "Sewa") $filter[] = ['isRent', '!=', null];
        if (isset($_GET['km']) && $_GET['km'] != 0 && $_GET['km'] != 99) $filter[] = ['bath_room', $_GET['km']];
        if (isset($_GET['kamar']) && $_GET['kamar'] != 0 && $_GET['kamar'] != 99) $filter[] = ['bed_room', $_GET['kamar']];
        if (isset($_GET['land']) && $_GET['land'] != 0 && $_GET['land'] != 99) $filter[] = ['land_area', '<', $_GET['land']];
//        if (isset($_GET['location']) && $_GET['location'] != '') $filter[] = ['address', 'LIKE', '%' . $_GET['location'] . '%'];
//        $properties = Property::where($filter)->get();
//        if (isset($_GET['maxPrice']) && isset($_GET['minPrice']) && (int)$_GET['minPrice'] != 0 && (int)$_GET['maxPrice'] != 0 >= $_GET['minPrice']) $properties = $this->priceFilter($properties, $request->minPrice, $request->maxPrice);
        $properties = Property::where($filter)->get();
        if (isset($request->maxPrice) && isset($request->minPrice) && $request->minPrice != null && $request->maxPrice != null >= $_GET['minPrice']) $properties = $this->priceFilter($properties, $request->minPrice, $request->maxPrice);
        return view('public.PropertyFilter')->with('properties', $properties);
    }


    function priceFilter($properties, $min, $max)
    {
        $result = [];
        foreach ($properties as $property) {
            if ($property->isSell != null) $property->price = PropertySell::find($property->isSell)->price;
            else$property->price = PropertyRent::find($property->isRent)->price;
            if ($min <= $property->price && $property->price <= $max) $result[] = $property;
        }
        return $result;
    }

    function filter2(Request $request)
    {

        $filter = [];
        $city = City::where('name', 'LIKE', '%' . $request->location . '%')->get()->first();
        if (isset($_GET['location']) && $_GET['location'] != '') $filter[] = ['location', 'LIKE', '%' . $city->id . '%'];
        if (isset($_GET['type']) && $_GET['type'] == "Beli") $filter[] = ['isSell', '!=', null];
        if (isset($_GET['type']) && $_GET['type'] == "Sewa") $filter[] = ['isRent', '!=', null];

        $properties = Property::where($filter)->get();
        if (isset($request->maxPrice) && isset($request->minPrice) && $request->minPrice != null && $request->maxPrice != null >= $_GET['minPrice']) $properties = $this->priceFilter($properties, $request->minPrice, $request->maxPrice);

        return view('public.PropertyFilter')->with('properties', $properties);
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
        $data['location'] = $request['province'] . "," . $request['city'] . "," . $request['district'] . "," . $request['sub_district'];
        $data['main_image'] = explode(',', $data['image'])[0];
        $validator = $this->validator($request);
        if ($request['isSellSelected'] == 'on')
            if (isset($request['sellPrice'])) {
                PropertySell::create(['price' => $request->sellPrice]);
                $data['isSell'] = PropertySell::latest()->first()->id;
            }
        if ($request['isRentSelected'] == 'on')
            if (isset($request['rentPrice']) && ($request['minRent']) && ($request['typeRent'])) {
//            PropertyRent::create(['price'=>$request->rentPrice,'minRent'=>minRent,'timeType'=>typeRent]);
//            $data['isRent']= PropertyRent::latest()->first()->id;
                $rent = new PropertyRent();
                $rent->price = $request['rentPrice'];
                $rent->minRent = $request['minRent'];
                $rent->timeType = $request['typeRent'];
                $rent->save();
                $data['isRent'] = $rent->id;
            }
        if (!$validator->fails()) {
            if (count(explode(',', $data['image'])) > 7) return redirect()->back()->withErrors('Hanya 7 Gambar yang Diperbolehkan');
            Property::create($data);
            return redirect()->route('MyProperty');
        }
        return redirect()->back()->withErrors($validator);
    }

    function delete($id)
    {
        Property::destroy($id);
        return redirect()->route('MyProperty');
    }

    function update($id)
    {
        $data = Property::find($id);
        if (isset($data->isSell)) $data->isSell = PropertySell::find($data->isSell);
        if (isset($data->isRent)) $data->isRent = PropertyRent::find($data->isRent);
        return view('property.UpdateProperty')->with('data', $data);
//        print_r($data);
    }

    function onUpdate(Request $request, $id)
    {
        $property = Property::find($id);
        $property->name = $request['name'];
        $property->bath_room = $request['bath_room'];
        $property->bed_room = $request['bed_room'];
        $property->land_area = $request['land_area'];
        $property->building_area = $request['building_area'];
        if ($request['isSellSelected'] == 'on')
            if (isset($request['sellPrice'])) {
                $sell = PropertySell::find($property['isSell']);
                $sell->price = $request['sellPrice'];
                $sell->save();
            }
        if ($request['isRentSelected'] == 'on')
            if (isset($request['rentPrice']) && ($request['minRent']) && ($request['typeRent'])) {
                $rent = PropertyRent::find($property['isRent']);
                $rent->price = $request['rentPrice'];
                $rent->minRent = $request['minRent'];
                $rent->timeType = $request['typeRent'];
                $rent->save();
            }
        $property['main_image'] = explode(',', $property['image'])[0];
        if (isset($request['image']) != null) {
            $property->image = HelperController::uploadImages('property', $request->file('image'));
        }
        $property->save();
        return redirect()->route('MyProperty');

    }

    function onLiked(Request $request)
    {
        $data = [];
        $data['user'] = Auth::id();
        $data['property'] = $request->id;
        Like::create($data);
        return redirect()->back();
    }

    function onUnliked(Request $request)
    {
        $user = Auth::id();
        $query = ['user' => $user, 'property' => $request->id];
        Like::where($query)->get()->first()->delete();
        return redirect()->back();
    }

    static function like($id)
    {
        $user = Auth::id();
        $query = ['user' => $user, 'property' => $id];
        $result = Like::where($query)->get();
        return count($result);
    }


}
