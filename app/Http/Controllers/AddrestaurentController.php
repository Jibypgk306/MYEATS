<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Addrestaurent;
use App\Models\Addcitie;
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
    public function create()
    {
        $addcities=Addcitie::all();
        $addzones=Addzone::all();
        $addcuisines=Addcuisine::all();
        Addrestaurent::class;

        return view('admin.addrestaurents.create')->with(compact('addcities','addzones','addcuisines'));
        
    }
    
    public function store(Request $request)
    {
        $validatedData =$request->validate([
            'addcitie_id' => ['required', 'exists:addcities,id'],
            'addzone_id' => ['required', 'exists:addzones,id'],
            'addcuisine_id' => ['required', 'exists:addcuisines,id'],

            'name'=>['required'],
            'about'=>['required'],
            'adress' => 'required',
            'citie'=>['required'],
            'zone'=>['required'],
            'location'=>['required'],
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'banner'=>['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'minvalue'=>['required'],
            'cost'=>['required'],
            'time'=>['required'],
            'cuisine' => 'required',
            'is_open'=>['sometimes', 'in:1,0'], 
            'pickup'=>['sometimes', 'in:1,0'], 
            'open'=>['sometimes', 'in:1,0'],    
             'billing' => ['required'],
            'mobile'=>['required']
        ]);
         Addrestaurent::create([
                'name'=> (request('name')),
                'about'=> (request('about')),
                'adress'=> (request('adress')),
                'citie'=> (request('citie')),
                'zone'=> (request('zone')),
                'location' => (request('location')),
                'logo'=> (request('logo')),
                'banner'=> (request('banner')),
                'minvalue'=> (request('minvalue')),
                'cost'=> (request('cost')),
                'time'=> (request('time')),
                'cuisine' => (request('cuisine')),
                'is_open'=> (request('is_open')),
                'pickup'=> (request('pickup')),
                'open'=> (request('open')),
                'billing'=> (request('billing')),
                'mobile'=> (request('mobile')),
            ]);
            if ($request->has('logo')) {
                $validatedData['logo'] = $request->file('logo')->store('images', 'public');
            }
            
            if ($request->has('banner')) {
                $validatedData['banner'] = $request->file('banner')->move('images', 'public');
            }
        session()->flash('restaurent-created-message', 'Restaurent  was created ');

        return redirect()->route('addrestaurent.index');

    }

    
}