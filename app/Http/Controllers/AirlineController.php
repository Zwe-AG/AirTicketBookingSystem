<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AirlineController extends Controller
{
    // airline list
    public function list()
    {
        $datas = Airline::when(request('searchKey'),function($query){
            $key = request('searchKey');
            $query->where('name','like','%'.$key.'%');
        })->orderBy('created_at','asc')->paginate(5);
        $datas->appends(request()->all());
        return view('admin.airline.list',compact('datas'));
    }

    // airline create
    public function airlineCreate(Request $request)
    {
        $this->airlineValidation($request);
        $data = $this->airlineData($request);
        Airline::create($data);
        return redirect()->route('admin#airlinelist')->with('success','Success Create');
    }

    // airline delete
    public function airlineDelete($id)
    {
        Airline::where('id',$id)->delete();
        return redirect()->route('admin#airlinelist')->with('success','Success Delete');
    }

    // airline edit page
    public function airlineEditPage($id)
    {
        $airlines = Airline::where('id',$id)->first();
        return view('admin.airline.edit',compact('airlines'));
    }

    // airline update
    public function airlineUpdate(Request $request)
    {
        $this->airlineValidation($request);
        $id  = $request->airlineId;
        $data = $this->airlineData($request);
        Airline::where('id',$id)->update($data);
        return redirect()->route('admin#airlinelist')->with('success','Success Update');
    }

    // airline data store
    private function airlineData($request)
    {
        $response = [
            'name' => $request->airlineName,
            'seats' => $request->airlineSeats,
        ];
        return $response;
    }

    // airline data validation
    private function airlineValidation($request)
    {
        $response = [
            'airlineName' => 'required|unique:airlines,name,'.$request->airlineId,
            'airlineSeats' => 'required',
        ];
        Validator::make($request->all(),$response)->validate();
    }
}
