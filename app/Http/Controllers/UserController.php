<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function add(Request $request)
    {
        $user =new User;
        $user->name=$request->input('name');
        $user->lastname=$request->input('lastname');
        $user->email=$request->input('email');
        $user->telephone=$request->input('telephone');
        $user->role=$request->input('role');
        $user->adresse=$request->input('adresse');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        session()->flash('success','la nouvelle utlisateur a été enregistrer correctement!');
        return back()->withInput();
    }

    
    public function delete($id)
    {
        $user=User::find($id);
        if($user)
        {
            $user->delete();
            session()->flash('success','supprimer');
        }
        return back()->withInput();
    }

    public function toadmin($id)
    {
        $user=User::find($id);
        if($user && $user->role=="gerant")
        {
            $user->role="admin";
            $user->save();
            session()->flash('success','to admin');
        }
        return back()->withInput();
    }
    public function togerant($id)
    {
        $user=User::find($id);
        if($user && $user->role=="admin")
        {
            $user->role="gerant";
            $user->save();
            session()->flash('success','to gerant');
        }
        return back()->withInput();
    }

    public function search(Request $request)

    {
        $search=$request->input('text');
        $role=$request->input('role');
if($role && !$search)
{
        $users=User::where('role',$role)
        ->paginate(8);
}
else{
    $users=User::where('role','like','%'.$role.'%')
    ->where('name','like','%'.$search.'%')
    ->orwhere('lastname','like','%'.$search.'%')
    ->orwhere('email','like','%'.$search.'%')
    ->orwhere('telephone','like','%'.$search.'%')
    ->orwhere('adresse','like','%'.$search.'%')
    ->orderBy('created_at', 'desc')
    ->paginate(8);  
}   
return view('home')->with('users',$users);  
    }
    public function deconnection(){
        Auth::logout();
        return view ('hello');
    }
}
