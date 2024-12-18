<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_trackingSeries extends Model
{
    use HasFactory;
    
    protected $table = 'assr_trackingseries';
    protected $fillable = [
        'Date',
        'DeptCode',
        'Series'
    ];
}
