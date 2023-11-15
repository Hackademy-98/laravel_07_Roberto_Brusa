<?php

namespace App\Models;

use App\Models\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function rules(){
        return $this->hasMany(Rule::class);
    }
    public function getRouteKeyName(){
        return 'name';
    }
}
