<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    public $table = "sellers";
    public $primaryKey = "id";
    public $timestamps = false;

    public function product()
    {
      return $this->hasMany("App\product","id");
    }
}
