<?php

namespace App\Http\Controllers;
use App\Models\Adduser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdduserController extends Controller
{
    public function index(){
        return view('admin.addusers.index', [
            'addusers' => DB::table('addusers')->paginate(5)
            
        ]);
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
    public function destroy(Adduser $adduser ,Request $request){



        $adduser->delete();

        $request->session()->flash('message', 'User was deleted');

        return back();
    }


    public function update(Adduser $adduser){

        
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