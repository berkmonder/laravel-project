<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

//    protected $guarded = []; //mass assignment korumasını komple kaldırıyor.

    public function children()
    {
        return $this->hasMany('App\Model\User', 'parent', 'id');
    }

    public function parent()
    {
        return $this->hasOne('App\Model\User', 'id', 'parent');
    }

    protected $fillable = [
        'name',

    ]; //hangi fillable alanların mass assignable olmasını sağlıyor.
}
