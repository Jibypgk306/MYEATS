<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Addrestaurent;
use App\Models\Addcity;
use App\Models\Addcuisine;
use App\Models\Addzone;

class AddrestaurentController extends Controller
{
    public function index(Request $request)
    {   
        $addrestaurents = Addrestaurent::when(
            $request->input('name'),
            function ($query) use ($request)
            {
                $query->where('name', 'like', '%'.$request->input('name').'%');
        }
        ) ->orderBy('created_at', 'desc')->paginate(5);

        $request->flash();


        return view('admin.addrestaurents.index',compact('addrestaurents'));
}
    public function create(Request $request)
    {
        $addcities=Addcity::all();
        $addzones=Addzone::all();
        $addcuisines=Addcuisine::all();

        Addrestaurent::class;
        return view('admin.addrestaurents.create')->with(compact('addcities','addzones','addcuisines'));
        
    }
    
    public function store(Request $request)
    {
        $inputs = request()->validate([
            'addcity_id' => ['required', 'exists:addcities,id'],
            'addzone_id' => ['required', 'exists:addzones,id'],
            'addcuisine_id' => ['required', 'exists:addcuisines,id'],

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
       
        Addrestaurent:: create($inputs);

        session()->flash('restaurent-created-message', 'Restaurent  was created ');

        return redirect()->route('addrestaurent.index');

    }
    public function show(Addrestaurent $addrestaurent)
    {   
        return view('admin.addrestaurents.show', ['addrestaurent'=> $addrestaurent]);
    }
    
    public function edit(Addrestaurent $addrestaurent)
    {  
        $addcities=Addcity::all();
        $addzones=Addzone::all();
        $addcuisines=Addcuisine::all();
        return view('admin.addrestaurents.edit', ['addrestaurent'=> $addrestaurent])->with(compact('addcities','addzones','addcuisines'));
    }
    public function update(Addrestaurent $addrestaurent,Request $request)
 { 
       $inputs = request()->validate([
 
      'addcity_id' => ['required', 'exists:addcities,id'],
      'addzone_id' => ['required', 'exists:addzones,id'],

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
 
 
        $addrestaurent->update($inputs);
        session()->flash('restaurent-updated-message', 'Restaurent was updated ');
        return redirect()->route('addrestaurent.index');
      }
    
}