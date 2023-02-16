<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'name','writer','years','category','desc'
    ];


    public function writer(){
        return $this->belongsTo(Writer::class,'writer' , 'id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category','id');
    }
}
