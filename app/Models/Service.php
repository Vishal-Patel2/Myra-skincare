<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'mid_category_id',
        'name',
        'image',
        'video',
        'rating',
        'price',
        'duration',
        'highlight_points',
        'overview',
        'expected_results',
        'why_choose',
        'action',
    ];

    // No casting needed anymore since 'how_it_works' and 'faqs' are removed
    protected $casts = [
        'rating' => 'decimal:1',
        'price' => 'decimal:2',
    ];

    public function midCategory()
    {
        return $this->belongsTo(MidCategory::class);
    }

    public function topCategory()
    {
        return $this->hasOneThrough(
            TopCategory::class,
            MidCategory::class,
            'id',                // Foreign key on mid_categories
            'id',                // Foreign key on top_categories
            'mid_category_id',   // Local key on services
            'top_category_id'    // Local key on mid_categories
        );
    }

    public function gender()
    {
        return $this->hasOneThrough(
            Gender::class,
            TopCategory::class,
            'id', // top_categories.id
            'id', // genders.id
            'mid_category_id', // services.mid_category_id
            'gender_id' // top_categories.gender_id
        );
    }
}
