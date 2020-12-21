<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attdance extends Model
{
    use HasFactory;
    protected $guarded =[];


    public function employees(){
        return $this-> belongsTo(Employee::class,'user_id', 'id');
    }
}
