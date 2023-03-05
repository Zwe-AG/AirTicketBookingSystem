<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    // City list
    public function list()
    {
       $datas = City::when(request('searchKey'),function($query){
        $key = request('searchKey');
        $query->where('name','like','%'.$key.'%');
       })->orderBy('created_at','asc')->paginate(5);
       $datas->appends(request()->all());
       return view('admin.city.list',compact('datas'));
    }

    // City Create Page
    public function cityCreatePage()
    {
        return view('admin.city.create');
    }

    // City Create Page
    public function cityCreate(Request $request)
    {
        $this->cityValidation($request);
        $data = $this->cityData($request);
        City::create($data);
        return redirect()->route('admin#citylist')->with('success','Success Create');
    }

    // city Delete
    public function cityDelete($id)
    {
        City::where('id',$id)->delete();
        return redirect()->route('admin#citylist')->with('success','Success Delete');
    }

    // city Edit Page
    public function cityEditPage($id)
    {
        $cities = City::where('id',$id)->first();
        return view('admin.city.edit',compact('cities'));
    }

    // city Update
    public function cityUpdate(Request $request)
    {
        $this->cityValidation($request);
        $id = $request->cityId;
        $data = $this->cityData($request);
        City::where('id',$id)->update($data);
        return redirect()->route('admin#citylist')->with('success','Success Update');
    }

    // city data store
    private function cityData($request)
    {
        $response = [
            'name' => $request->cityName,
            'airport' => $request->airportName,
        ];
        return $response;
    }

    // city data validation
    private function cityValidation($request)
    {
        $response = [
            'cityName' => 'required|unique:cities,name,'.$request->cityId,
            'airportName' => 'required',
        ];
        Validator::make($request->all(),$response)->validate();
    }
}
