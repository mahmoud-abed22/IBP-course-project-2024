<?php

namespace App\Http\Controllers;
use App\Models\Date;
use App\Models\repor;
use App\Models\User;
use App\Models\warehouse;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function add_blood_request(): View
    {
        $warehouses = warehouse::all();         

        return view('doctor.add_blood_request' , compact('warehouses'));
    } 

    public function donation_dates(): view
    {
        $datess  =  Date::orderBy('date', 'asc')->get() ;
        $dates =$datess->where('place_id', Auth::User()->state);
        $users = User::all() ;
        return view('doctor.donation_dates' , compact('dates' , 'users'));

    } 

    public function date_detailes($id) :View
    {

        if(Date::find($id)) {
        
            $dates = Date::find($id);
            $users = User::all()->where('id' , $dates->user_id ) ;
            $age = \Carbon\Carbon::parse($users->first()->age)->diff(\Carbon\Carbon::now())->format('%y');

            return view('doctor.date_detailes', compact('dates','users','age'));

        }else{
            return view('error');
        }
    } 

    public function messages()
    {

        $message  = DB::table('messages')
        ->where('to_id', Auth::User()->id)
        ->orderBy('created_at', 'DESC')
        ->get() ;

        $messages = $message->unique('from_id') ;
        $users = User::get() ;
        return view('doctor.messages' ,compact('messages','users') );
    } 

    public function message($id) 
    {
        if( DB::table('messages')->find($id)){
    
            $lastmessage  = DB::table('messages')
            ->where('id', $id)
            ->get()->first() ;
    
            $allmessages  = DB::table('messages')
    
            ->where('to_id','=' , Auth::User()->id )
            ->where('from_id', '=' ,$lastmessage->from_id)
            ->orWhere('from_id','=' , Auth::User()->id )
            ->Where('to_id','=' , $lastmessage->from_id )
    
            ->orderBy('created_at', 'asc')
            ->get() ;
    
            $user = User::where('id', $lastmessage->from_id)->get()->first() ;
    
            return view('doctor.message' , compact('allmessages' ,'user'));

        }else{
            return redirect()->route('error');   
        }

    } 

    public function doctorProfile(): View
    {
        $place = DB::table('plases')->get()->where('id' , Auth::user()->state) ;
        return view('doctor.profile' , compact('place'));
    } 

    public function add_blood($id): View
    {
        $warehouses = warehouse::all();         
        return view('doctor.add_blood' , compact('id' , 'warehouses'));
    } 

    public function doctor_report(): View
    {
        $warehouses = warehouse::get(); 
        $repors = repor::get(); 

        return view('doctor.report' , compact('warehouses' , 'repors'));
    } 

    public function add_place(): View
    {

        return view('doctor.add_place' );
    } 

}
