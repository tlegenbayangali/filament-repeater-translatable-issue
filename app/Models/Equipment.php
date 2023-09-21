<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Equipment extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [
        'id',
        'created_at'
    ];
    protected $translatable = [
        'exterior',
    ];
    protected $casts = [
        'exterior' => 'array'
    ];

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }
}
