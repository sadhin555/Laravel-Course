<?php

namespace App\Models;

use App\Models\Upazila;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function upazilas()
    {
        return $this->hasMany(Upazila::class);
    }
}
