<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plase extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'        ,  
        'address'      ,  
        'room_number' ,
        'phone'       ,  
        'email'       ,  
        'location'    ,
 
    ];

}
