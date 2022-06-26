<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donate extends Model
{
    use HasFactory;
    protected $fillable = ['donate_amount','quantity','payment_method','name','email','phone','address','Month'];
}
