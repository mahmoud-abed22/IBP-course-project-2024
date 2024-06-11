<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Message;
use App\Models\Plase;
use App\Models\repor;
use App\Models\User;
use App\Models\warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;

class AllController extends Controller
{

//  Users

    public function change_pass(Request $request){

        $request->validate([

            'password' => 'required|max:255',
            'conpass' => 'required|max:255',
        ]);

        if ($request->password == $request->conpass )   {

            $user = User::find(Auth::user()->id);         
            $user->update([
                'password' =>Hash::make($request->password),
    
            ]);

        }else{
            return Redirect::back()->withErrors("The password field confirmation does not match ");
        }
        return redirect()->back()->with('addmessage' , 'The Password Changed Successfully : )');  

    }  

    public function deleteUser($id){
        User::destroy($id); 
        return redirect()->route('welcome') ;
    }

    // get a Date
    public function AddDate(Request $request ){


        $request->validate([

            'place_id' => 'required|max:255',
            'date' => 'required|max:255',
            'hour' => 'required|max:255',
        ]);

        Date::create([
            'place_id' => $request->place_id,
            'user_id' => Auth::User()->id,
            'date' => $request->date,
            'hour' => $request->hour,


        ]);
        return redirect()->back()->with('addmessage' , 'The Appointment Booked Successfully : )');  
    } 

    public function deleteDate($id){
        Date::destroy($id); 
        return redirect()->back()->with('addmessage' , 'The Appointment Deleted Successfully : )');  

    }

    public function addWarehouse(Request $request , $id){

        if(Date::find($id)  ) {
        
            $date = Date::find($id);
            $user = User::find ($date->user_id) ;
    
            $request->validate([
    
                'blood_type' => 'required|max:255',
                'quantity' => 'required|max:255|numeric',
            ]);
    
            $warehouse = warehouse::find($request->blood_type);         
            $warehouse->update([
                'quantity' => $warehouse->quantity + $request->quantity,
            ]);
    
            repor::create([
                'blood_type' => $request->blood_type,
                'quantity' => $request->quantity,
                'from' => $user->name .' '. $user->surname,
                'to' => 'Warehouse',
    
            ]);
    
            Date::destroy($id);
    
            return redirect()->route('donation_dates');   


        }else{
            return redirect()->route('error');   
        }

    }


    public function deleteDate2($id){
        Date::destroy($id); 
        return redirect()->route('donation_dates');   
    }

    public function deleteWarehouse(Request $request){

        $request->validate([

            'to' => 'required|max:255',
            'blood_type' => 'required|max:255',
            'quantity' => 'required|max:255|numeric',
        ]);

        $warehouse = warehouse::find($request->blood_type); 
        
        if ($warehouse->quantity >= $request->quantity ) {

            $warehouse->update([
                'quantity' => $warehouse->quantity - $request->quantity,
            ]);
            
            repor::create([
                'blood_type' => $request->blood_type,
                'quantity' => $request->quantity,
                'from' =>  'Warehouse',
                'to' =>  $request->to,
                
            ]);
            
            return redirect()->back()->with('addmessage' , 'The Request Done : )');  
        }else{

            return redirect()->back()->with('addmessage2' , 'There Is Not Enough Blood Group :(');  

        }

    }

        
    public function newmessage(Request $request , $id) 
    {

        $request->validate([

            'message' => 'required|max:255',
        ]);

        Message::create([
            'from_id' =>  Auth::User()->id ,
            'to_id' =>  $id,
            'message' => $request->message ,
            
        ]);

        return redirect()->back();   

    } 


    public function add_place(Request $request ) 
    {

        $request->validate([

            'name' => 'required|max:255',
            'adress' => 'required|max:255',
            'room' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => 'required|confirmed|max:255',
            'location' => 'required ',

        ]);

        Plase::create([
            'name' => $request->name ,
            'address' => $request->adress ,
            'room_number' => $request->room ,
            'phone' => $request->phone ,
            'email' => $request->email ,
            'location' => $request->location ,
            
        ]);

        $place  = DB::table('plases')
        ->where('email', $request->email )
        ->get()->first() ;


       User::create([
            'name' => $request->name ,
            'surname' => '' ,
            'age' =>'',
            'phone' =>'',
            'gender' =>'',
            'state' => $place->id ,
            'email' => $request->email ,
            'password' => Hash::make($request->password),

            
        ]);

        return redirect()->back()->with('addmessage' , 'The Place Added Successfully : )');  

    } 

    public function error( ) 
    {
        return view('error');

    } 

}

