<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employies(){
        return $this-> belongsTo(Employee::class, 'emp_id', 'id');
    }


}
