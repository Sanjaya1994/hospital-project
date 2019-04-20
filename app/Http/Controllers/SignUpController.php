<?php

namespace App\Http\Controllers;
use\App\User;
use\App\Prescribe;
use\App\Patient;
use\App\Drug;
use\App\Lab;
use\App\Massege;
use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function getSignup(){
        return view('signup');
    
}
public function indexhome(){
    return view('welcome');
}
public function getwelcome(){
    return view('welcome');
}
public function getadmin(){
    return view('admin');
}
public function getdoctordash(){
    return view('doctordash');
}
public function getlabtech(){
    return view('labtech');
}
public function getpharmacist(){
    return view('pharmacist');
}
public function getreceiption(){
    return view('receiption');
}

public function getdoctormessage(){
    return view('doctormessage');
}

public function getrepmessage(){
    return view('receiptionmessage');
}

public function getphamessage(){
    return view('pharmacistmessage');
}
//getphasearch
public function getlabmessage(){
    return view('labtechmessage');
}
public function getphasearch(){
    return view('searchphadrug');
}
public function getissuedrug(){
    return view('issuedrug');
}

public function postSignUp(Request $request){

    $this->validate($request,  [
        'first_name'=>'required|max:20',
        'last_name'=>'required|max:20',
        'user_name'=>'required|min:4|unique:users',
        'phone_number'=>'required|min:10',
        'dob'=>'required|nullable|date'
        
        ]);

    $first_name=$request['first_name'];
    $last_name=$request['last_name'];
    $user_name=$request['user_name'];
    $identity=$request['identity'];
    $dob=$request['dob'];
    $phone_number=$request['phone_number'];
    $password=bcrypt($request['password']);
    $gender=$request['gender']? 1 : 0;
    $no=$request['no'];
    $street=$request['street'];
    $city=$request['city'];
    $email=$request['email'];
    $role=$request['role'];
    $Reg_No=$request['Reg_No'];

    $user=new User();
    $user->first_name=$first_name;
    $user->last_name=$last_name;
    $user->user_name=$user_name;
    $user->identity=$identity;
    $user->dob=$dob;
    $user->phone_number=$phone_number;
    $user->password=$password;
    $user->gender=$gender;
    $user->no=$no;
    $user->street=$street;
    $user->city=$city;
    $user->email=$email;
   $user->role=$role;
   $user->Reg_No=$Reg_No;
    $user->save();
    return redirect()->route('welcome');
    $user=User::all();
    return view('admindash')->with('users',$user);
    return view('adminremove')->with('users',$user);
}
public function updateTaskAsCompleted($id){
    $user=User::find($id);
    $user->active=1;
    $user->save();
    return redirect()->back();

}
public function updateTaskAsNotCompleted($id){
    $user=User::find($id);
    $user->active=0;
    $user->save();
    return redirect()->back();

}
public function deletetask($id){
    $user=User::find($id);
     $user->delete();
    return redirect()->back();

}
public function updatetaskview($id){
    $user=User::find($id);
    return view('updatetask')->with('taskdata',$user);
}

public function updatetask(Request $request){
   $id=$request->id;

   $first_name=$request->first_name;
   $last_name=$request->last_name;
   $identity=$request->identity;
   $user_name=$request->user_name;
   $dob=$request->dob;
   $gender=$request->gender;
   $phone_number=$request->phone_number;
   $no=$request->no;
   $street=$request->street;
   $city=$request->city;
   $email=$request->email;
   

    $user=User::find($id);
    $user->first_name=$first_name;
    $user->last_name=$last_name;
    $user->identity=$identity;
    $user->user_name=$user_name;
    $user->dob=$dob;
    $user->gender=$gender;
    $user->phone_number=$phone_number;
    $user->no=$no;
    $user->street=$street;
    $user->city=$city;
    $user->email=$email;
    
   
    $user->save();
    $users=User::all();
    return view('adminupdate')->with('users',$users);
}
public function postLogin(Request $request){
    $this->validate($request,  [
            
        'user_name'=>'required|min:4|',
        'password'=>'required|min:2|',
        
      
        ]);
        if (Auth::attempt(['user_name' => $request['user_name'], 'password' => $request['password'],'role' => "Admin",'active'=>1])) {
            return redirect()->route('admin');
        }
        if (Auth::attempt(['user_name' => $request['user_name'], 'password' => $request['password'],'role' => "Doctor",'active'=>1])) {
            return redirect()->route('doctordash');
        }
        if (Auth::attempt(['user_name' => $request['user_name'], 'password' => $request['password'],'role' => "Lab Technician",'active'=>1])) {
            return redirect()->route('labtech');
        }
        if (Auth::attempt(['user_name' => $request['user_name'], 'password' => $request['password'],'role' => "Pharmacist",'active'=>1])) {
            return redirect()->route('pharmacist');
        }
        if (Auth::attempt(['user_name' => $request['user_name'], 'password' => $request['password'],'role' => "Receiptionist",'active'=>1])) {
            return redirect()->route('receiption');
        }
        return redirect()->back()->with('message02','Login Failed please check user name and password');
}
public function getLogout(){
    Auth::logout();
    return redirect()->route('welcome');
}
}