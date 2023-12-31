<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'Staff';
    protected $primaryKey = 'id';
    protected $fillable = ['title','birthate','salary','photo','phone'];

}
