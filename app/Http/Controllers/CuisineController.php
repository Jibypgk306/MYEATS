<?php

namespace App\Http\Controllers;
use App\Models\Cuisine;
use Illuminate\Http\Request;

class CuisineController extends Controller
{
    public function index(Request $request)
    {    
        $cuisines = Cuisine::when(
            $request->input('name'),
            function ($query) use ($request)
            {
                $query->where('name', 'like', '%'.$request->input('name').'%');
            }
        ) ->orderBy('created_at', 'desc')->paginate(5);

        $request->flash();

        return view('admin.cuisines.index',compact('cuisines'));
}
public function create()
{

    Cuisine::class;

    return view('admin.cuisines.create');
    
}
    
    public function store()
    {
        
        Request()->validate([
            'name'=>['required'],
            
        ]);
            Cuisine::create([
                'name'=> (request('name')),
                
            ]);
        session()->flash('cuisine-created-message', 'Cuisine  was created ');

        return redirect()->route('cuisine.index');

    }

    public function edit(Cuisine $cuisine)
    {  
        return view('admin.cuisines.edit', ['cuisine'=> $cuisine]);
    }
    public function show(Cuisine $cuisine)
    {   
        return view('admin.cuisines.show', ['cuisine'=> $cuisine]);
    }
    
    public function update(Cuisine $cuisine)
    {  
         Request()->validate([
            'name'=>['required'],
            
        ]);  
        $cuisine->name = request('name');
        

        $cuisine->save();
        session()->flash('cuisine-updated-message', 'Cuisine was updated ');
        return redirect()->route('cuisine.index');

    }
}