<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRegion extends Model
{
    use HasFactory;
    protected $table = 'customer_region';
    public $timestamps = false;
}
