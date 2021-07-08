<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurent;
use App\Models\Cuisine;
use App\Models\Addzone;
use App\Models\City;

class RestaurentController extends Controller
{
    public function index(Request $request)
    {   
        $restaurents = Restaurent::when(
            $request->input('name'),
            function ($query) use ($request)
            {
                $query->where('name', 'like', '%'.$request->input('name').'%');
        }
        ) ->orderBy('created_at', 'desc')->paginate(5);

        $request->flash();


        return view('admin.restaurents.index',compact('restaurents'));
}
    public function create(Request $request)
    {
        $cuisines=Cuisine::all();
        $cities=City::all();
        $addzones=Addzone::all();

        Restaurent::class;
        return view('admin.restaurents.create')->with(compact('addzones','cuisines','cities'));
        
    }
    
    public function store(Request $request)
 {
 $inputs = request()->validate([
     'addzone_id' => ['required', 'exists:addzones,id'],
     'city_id' => ['required', 'exists:cities,id'],

 'name'=>['required'],
 'about'=>['required'],
 'adress' => 'required',
 'location'=>['required'],
 'logo' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
 'banner'=>['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
 'minvalue'=>['required'],
 'cost'=>['required'],
 'time'=>['required'],
 'is_open'=>['sometimes', 'in:1,0'], 
 'pickup'=>['sometimes', 'in:1,0'], 
 'open'=>['sometimes', 'in:1,0'], 
 'billing' => ['required'],
 'mobile'=>['required']
 
 ]);
 if(request('logo')){
 $inputs['logo'] = request('logo')->store('images', 'public');
 }
 if(request('banner')){
 $inputs['banner'] = request('banner')->store('images', 'public');
 }
 
 $restaurent=Restaurent:: create($inputs);
 if ($request->has('cuisine_id')) 
 {
    $restaurent->cuisine()->attach($request->input('cuisine_id'));
  } 
     
     session()->flash('restaurent-created-message', 'Restaurent was created ');
 
 return redirect()->route('restaurent.index');
 
 }
    public function show(Restaurent $restaurent)
    {   
        return view('admin.restaurents.show', ['restaurent'=> $restaurent],);
    }
    
    public function edit(Restaurent $restaurent)
    {  
        $addzones=Addzone::all();
        $cities=City::all();

        return view('admin.restaurents.edit', ['restaurent'=> $restaurent])->with(compact('addzones','cities'));
    }
    public function update(Restaurent $restaurent,Request $request)
 { 
       $inputs = request()->validate([
 
        'addzone_id' => ['required', 'exists:addzones,id'],
        'city_id' => ['required', 'exists:cities,id'],

      'name'=>['required'],
      'about'=>['required'],
      'adress' => 'required',
      'logo' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
      'banner'=>[ 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
      'location'=>['required'],
      'minvalue'=>['required'],
      'cost'=>['required'],
      'time'=>['required'],
      'billing' => ['required'],
      'mobile'=>['required'],
      'is_open'=>['sometimes', 'in:1,0'],
      'status'=>['required'] 
      ]);
      if ($request->has('logo')) {
        $inputs['logo'] = $request->file('logo')->store('images', 'public');
    }
        if ($request->has('banner')) {
            $inputs['banner'] = $request->file('banner')->store('images', 'public');
        }

        if ($request->has('is_open')) {
            $inputs['is_open'] = 1;
        } else {
            $inputs['is_open'] = 0;
        }

        if ($request->has('pickup')) {
            $inputs['pickup'] = 1;
        } else {
            $inputs['pickup'] = 0;
        }
 

        if ($request->has('open')) {
            $inputs['open'] = 1;
        } else {
            $inputs['open'] = 0;
        }
 
        $restaurent->update($inputs);
        
        session()->flash('restaurent-updated-message', 'Restaurent was updated ');
        return redirect()->route('restaurent.index');
      }
    
}