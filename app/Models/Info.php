<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';
    protected $primaryKey = 'id';
    protected $fillable = ['Idnumber', 'date_one', 'date_tow', 'count'];
    use HasFactory;
}
