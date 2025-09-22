<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books'; // Optional: if your table name is not the plural of the model name

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'type',
        'condition',
        'edition',
        'price',
        'copies',
        'description',
        'published',
        'status',
        'cover_image',
        'spirit_id',
        'language_id',
        'publisher_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>

    protected $casts = [
        'publication_year' => 'integer',
    ];*/
}
