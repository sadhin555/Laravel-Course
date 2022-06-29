<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // protected $table = "our_table";
    // protected $primaryKey = "";

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    // protected $fillable = ["name","email","password","bio","age"];
    protected $guarded = [];
}
