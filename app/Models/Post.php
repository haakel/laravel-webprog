<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // use HasFactory,SoftDeletes;
    use HasFactory;
    protected $table = 'posts';

    // protected $fillable = [
    //     'title',
    //     'content',
    //     'is_published',
    // ];

    protected $guarded = [];
    
    // protected static function booted()
    // {
    //     static::addGlobalScope('is_published', function ($query) {
    //         $query->where('is_published', 1);
    //     });
    // }

    // public function scopePublished($query, $value)
    // {
    //     // dd($value);
    //     return $query->where('is_published', $value);
    // }
    // public function title (){
    //     return Attribute::make(
    //         // get: fn ($value) => strtoupper($value),
    //         // set: fn ($value) => strtolower($value),

    //         function ($value) {
    //             return ucfirst($value);
    //         }
    //     );
    // }

    public function gettitleAttribute($value)
    {
        return strtolower($value);
    }

}