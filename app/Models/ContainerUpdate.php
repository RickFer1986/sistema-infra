<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContainerUpdate extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'worker_name',
        'update_date',
        'analyst_name',
        'status',
    ];
}
