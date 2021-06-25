<?php

namespace App\Http\Controllers;
use App\Models\Addcitie;
use Illuminate\Http\Request;

class AddcitieController extends Controller
{
    public function index(Request $request)
    {    
        $addcities = Addcitie::when(
            $request->input('name'),
            function ($query) use ($request)
            {
                $query->where('name', 'like', '%'.$request->input('name').'%');
        }
        ) ->orderBy('created_at', 'desc')->paginate(5);

        $request->flash();

        return view('admin.addcities.index',compact('addcities'));
}
public function create()
{

    Addcitie::class;

    return view('admin.addcities.create');
    
}
    
    public function store()
    {
        
        Request()->validate([
            'name'=>['required'],
            
        ]);
            Addcitie::create([
                'name'=> (request('name')),
                
            ]);
        session()->flash('citie-created-message', 'Citie  was created ');

        return redirect()->route('addcitie.index');

    }

    public function edit(Addcitie $addcitie)
    {  
        return view('admin.addcities.edit', ['addcitie'=> $addcitie]);
    }
    public function show(Addcitie $addcitie)
    {   
        return view('admin.addcities.show', ['addcitie'=> $addcitie]);
    }
    
    public function update(Addcitie $addcitie)
    {  
         Request()->validate([
            'name'=>['required'],
            
        ]);  
        $addcitie->name = request('name');
        

        $addcitie->save();
        session()->flash('citie-updated-message', 'Citie was updated ');
        return redirect()->route('addcitie.index');

    }
}