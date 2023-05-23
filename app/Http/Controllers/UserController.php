<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Message;
use App\Models\Plase;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userProfile() :View
    {
        $age = \Carbon\Carbon::parse(Auth::user()->age)->diff(\Carbon\Carbon::now())->format('%y');
     
        return view('user.profile' , compact('age') );
    } 

    public function donation_date(): View
    {

        $places = DB::table('plases')->get() ;
        return view('user.donation_dates' , compact('places'));
    } 

    public function messages() 
    {

        $message2  = DB::table('messages')
        ->where('from_id', Auth::User()->id)
        ->orderBy('created_at', 'DESC')
        ->get() ;

        $messages = $message2->unique('to_id') ;

        $users = User::get() ;

        return view('user.messages' ,compact('messages','users'));
    } 

    public function message($id)
    {

        if(User::find($id) ){

            $lastmessage  = DB::table('messages')
            ->where('id', $id)
            ->get()->first() ;
    
            // return $lastmessage;
    
            $allmessages  = DB::table('messages')
    
            ->where('to_id','=' , Auth::User()->id )
            ->where('from_id', '=' ,$id)
            ->orWhere('from_id','=' , Auth::User()->id )
            ->Where('to_id','=' , $id )
    
            ->orderBy('created_at', 'asc')
            ->get() ;
            
           $user = User::where('id', $id)->get()->first() ;
    
            return view('user.message' , compact('allmessages' ,'user'));

        }else{
            return redirect()->route('error');   

        }
 
    } 

    public function Instructions(): View
    {
        return view('user.Instructions');
    } 

    public function my_date()
    {

        $datess  =  Date::orderBy('date', 'asc')->get() ;
        $dates = $datess->where('user_id', Auth::User()->id) ;
        $places = DB::table('plases')->get() ;

        return view('user.my_date' , compact('dates', 'places'));
    } 

    public function place_detailes($id) : view
    {


        if(DB::table('plases')->get()->where('id' , $id) && DB::table('users')->get()->where('state' , $id)->first() ){

            $place = DB::table('plases')->get()->where('id' , $id) ;
            $id = DB::table('users')->get()->where('state' , $id)->first() ;
    
            return view('user.place_detailes',compact('place','id'));

        }else{
            return redirect()->route('error');   

        }
    } 


    public function changepw(): View
    {
        return view('user.change_pw');
    } 

}
