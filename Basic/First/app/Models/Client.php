<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory,SoftDeletes;

    // protected $table = "our_table";
    // protected $primaryKey = "";

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    // protected $fillable = ["name","email","password","bio","age"];


    protected $guarded = [];

}
