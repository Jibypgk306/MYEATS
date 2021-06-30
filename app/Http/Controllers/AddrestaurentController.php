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

        session()->flash('restaurent-created-message', 'Restaurent with title was created ');

        return redirect()->route('addrestaurent.index');

    }
    public function show(Addrestaurent $addrestaurent)
    {   
        return view('admin.addrestaurents.show', ['addrestaurent'=> $addrestaurent]);
    }
    
    public function edit(Addrestaurent $addrestaurent)
    {  
       
        return view('admin.addrestaurents.edit', ['addrestaurent'=> $addrestaurent]);
    }
    public function update(Addrestaurent $addrestaurent)
    {  
        $inputs = request()->validate([
           

            'name'=>['required'],
            'about'=>['required'],
            'adress' => 'required',
            
            'location'=>['required'],
            
            'minvalue'=>['required'],
            'cost'=>['required'],
            'time'=>['required'],
             
             'billing' => ['required'],
            'mobile'=>['required']
            
        ]);
        $addrestaurent->name = request('name');
        $addrestaurent->about = request('about');
        $addrestaurent->adress=request('adress');
        $addrestaurent->location = request('location');
        $addrestaurent->minvalue = request('minvalue');
        $addrestaurent->cost = request('cost');
        $addrestaurent->time = request('time');
        $addrestaurent->billing = request('billing');
        $addrestaurent->mobile=request('mobile');

        $addrestaurent->save();
        session()->flash('restaurent-updated-message', 'Restaurent was updated ');
        return redirect()->route('addrestaurent.index');

    }
    
}