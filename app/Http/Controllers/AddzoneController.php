<?php

namespace App\Http\Controllers;
use App\Models\Addzone;
use Illuminate\Http\Request;

class AddzoneController extends Controller
{
    public function index(Request $request)
    {    
        $addzones = Addzone::when(
            $request->input('name'),
            function ($query) use ($request)
            {
                $query->where('name', 'like', '%'.$request->input('name').'%');
        }
        ) ->orderBy('created_at', 'desc')->paginate(5);

        $request->flash();

        return view('admin.addzones.index',compact('addzones'));
}
public function create()
{

    Addcitie::class;

    return view('admin.addzones.create');
    
}
    
    public function store()
    {
        
        Request()->validate([
            'name'=>['required'],
            
        ]);
            Addzone::create([
                'name'=> (request('name')),
                
            ]);
        session()->flash('zone-created-message', 'Zone  was created ');

        return redirect()->route('addzone.index');

    }

    public function edit(Addzone $addzone)
    {  
        return view('admin.addzones.edit', ['addzone'=> $addzone]);
    }
    public function show(Addzone $addzone)
    {   
        return view('admin.addzones.show', ['addzone'=> $addzone]);
    }
    
    public function update(Addzone $addzone)
    {  
         Request()->validate([
            'name'=>['required'],
            
        ]);  
        $addzone->name = request('name');
        

        $addzone->save();
        session()->flash('zone-updated-message', 'Zone was updated ');
        return redirect()->route('addzone.index');

    }
    public function destroy(Addzone $addzone ,Request $request)
    {
        $addzone->delete();

        $request->session()->flash('message', 'Zone was deleted');

        return back();
    }
}