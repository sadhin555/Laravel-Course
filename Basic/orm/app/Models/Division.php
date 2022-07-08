<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Division extends Model
{
    use HasFactory;

    protected $guarded = [];

     public function thana(){
        return $this->hasOneThrough(Thana::class,District::class,"division_id","district_id"
     );
     }

     public function thanas() :HasManyThrough {
        return $this->hasManyThrough(Thana::class,District::class,"division_id","district_id"
     );
     }
}
