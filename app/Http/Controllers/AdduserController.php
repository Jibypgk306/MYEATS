<?php

namespace App\Http\Controllers;
use App\Models\Adduser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdduserController extends Controller
{
    public function index(Request $request)
    {    
        $addusers = Adduser::when(
            $request->input('firstname'),
            function ($query) use ($request) {
                $query->where('firstname', 'like', '%'.$request->input('firstname').'%');
    }
        ) ->orderBy('created_at', 'desc')->paginate(5);

        $request->flash();

        return view('admin.addusers.index',compact('addusers'));
}
    public function create()
    {

        Adduser::class;

        return view('admin.addusers.create');
        
    }
    
    public function store()
    {
        
        Request()->validate([
            'firstname'=>['required'],
            'lastname'=>['required'],
            'email'=>['required'],
            'mobile'=>['required'],
            'password'=>['required']

        ]);
            Adduser::create([
                'firstname'=> (request('firstname')),
                'lastname'=> (request('lastname')),
                'email'=> (request('email')),
                'mobile'=> (request('mobile')),
                'password'=> (request('password')),

               
            ]);
       
       

        session()->flash('user-created-message', 'User with title was created ');

        return redirect()->route('adduser.index');

    }



    public function edit(Adduser $adduser){

       
        return view('admin.addusers.edit', ['adduser'=> $adduser]);
    }
    public function show(Adduser $adduser){

       
        return view('admin.addusers.show', ['adduser'=> $adduser]);
    }
    
    public function update(Adduser $adduser)
    {    
        $adduser->firstname = request('firstname');
        $adduser->lastname = request('lastname');
        $adduser->email=request('email');
        $adduser->mobile = request('mobile');
        $adduser->password = request('password');
        $adduser->save();
        session()->flash('user-updated-message', 'User was updated ');
        return redirect()->route('adduser.index');

    }
}