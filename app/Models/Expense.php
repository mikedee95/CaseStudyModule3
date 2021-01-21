<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Expense extends Model
{
    use HasFactory;
    public function setEntryDateAttribute($input)
    {
        $this->attributes['entry_date'] =
            Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
    }
}
