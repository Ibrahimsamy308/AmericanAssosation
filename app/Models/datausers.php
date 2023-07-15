<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datausers extends Model
{
    use HasFactory;
    protected $table ="datausers";

    protected $fillable = [
        'fname', 'lname', 'pay'
    ];

}
