<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function catagories(){

        return $this-> belongsTo(Category::class, 'cat_id', 'id');
    }


}
