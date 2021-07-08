<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {    
        $cities = City::when(
            $request->input('name'),
            function ($query) use ($request)
            {
                $query->where('name', 'like', '%'.$request->input('name').'%');
        }
        ) ->orderBy('created_at', 'desc')->paginate(5);

        $request->flash();

        return view('admin.addcities.index',compact('cities'));
}
public function create()
{

    City::class;

    return view('admin.addcities.create');
    
}
    
    public function store()
    {
        
        Request()->validate([
            'name'=>['required'],
            
        ]);
            City::create([
                'name'=> (request('name')),
                
            ]);
        session()->flash('citie-created-message', 'Citie  was created ');

        return redirect()->route('addcitie.index');

    }

    public function edit(City $citie)
    {  
        return view('admin.addcities.edit', ['citie'=> $citie]);
    }
    public function show(City $citie)
    {   
        return view('admin.addcities.show', ['citie'=> $citie]);
    }
    
    public function update(City $citie)
    {  
         Request()->validate([
            'name'=>['required'],
            
        ]);  
        $citie->name = request('name');
        
        $citie->save();
        session()->flash('citie-updated-message', 'Citie was updated ');
        return redirect()->route('addcitie.index');

    }
}