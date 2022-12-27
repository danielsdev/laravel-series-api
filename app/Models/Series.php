<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $table = 'series';
    protected $fillable = ['name', 'cover'];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    // protected static function booted()
    // {
    //     self::addGlobalScope('ordered', function (Builder $queryBuilder) {
    //         $queryBuilder->orderBy('name');
    //     });
    // }
}
