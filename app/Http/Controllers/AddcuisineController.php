<?php

namespace App\Http\Controllers;
use App\Models\Addcuisine;
use Illuminate\Http\Request;

class AddcuisineController extends Controller
{
    public function index(Request $request)
    {    
        $addcuisines = Addcuisine::when(
            $request->input('name'),
            function ($query) use ($request)
            {
                $query->where('name', 'like', '%'.$request->input('name').'%');
        }
        ) ->orderBy('created_at', 'desc')->paginate(5);

        $request->flash();

        return view('admin.addcuisines.index',compact('addcuisines'));
}
public function create()
{

    Addcuisine::class;

    return view('admin.addcuisines.create');
    
}
    
    public function store()
    {
        
        Request()->validate([
            'name'=>['required'],
            
        ]);
            Addcuisine::create([
                'name'=> (request('name')),
                
            ]);
        session()->flash('cuisine-created-message', 'Cuisine  was created ');

        return redirect()->route('addcuisine.index');

    }

    public function edit(Addcuisine $addcuisine)
    {  
        return view('admin.addcuisines.edit', ['addcuisine'=> $addcuisine]);
    }
    public function show(Addcuisine $addcuisine)
    {   
        return view('admin.addcuisines.show', ['addcuisine'=> $addcuisine]);
    }
    
    public function update(Addcuisine $addcuisine)
    {  
         Request()->validate([
            'name'=>['required'],
            
        ]);  
        $addcuisine->name = request('name');
        

        $addcuisine->save();
        session()->flash('cuisine-updated-message', 'Cuisine was updated ');
        return redirect()->route('addcuisine.index');

    }
}