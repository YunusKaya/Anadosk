<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    public function getCategory()
    {
        return $this->hasOne('App\Models\category','id','catagory_id');
    }
}
