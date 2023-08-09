<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    /**
     * The database table used by the model.
     * @var string $table.
     */
    protected $table = 'product_translations';

    /**
     * Define which attributes are mass assignable (for security)
     * Fillable array includes all keys that are fillable.
     * @var array $fillable
     */
    protected $fillable = [
        'product_id',
        'locale',
        'heading',
        'page_title',
        'meta_description',
        'description',
        'slug'
    ];
}
