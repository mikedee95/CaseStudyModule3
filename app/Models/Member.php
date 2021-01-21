<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['memName', 'email', 'contact', 'dept', 'address', 'memType', 'password'];


    public function issuedBooks(){
        return $this->hasMany('App\Model\IssuedBook');
    }

    public function returnBooks(){
        return $this->hasMany('App\Model\ReturnedBook');
    }

}
