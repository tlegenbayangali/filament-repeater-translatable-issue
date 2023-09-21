<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CarModel extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [
        'id',
        'created_at'
    ];
    protected $translatable = ['title'];

    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }
}
