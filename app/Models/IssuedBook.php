<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuedBook extends Model
{
    use HasFactory;
    protected $fillable = ['issueDate','retDate','bookId','memId'];
    public function member(){
        return $this->belongsTo('App\Model\Member', 'memId', 'id');
    }
}
