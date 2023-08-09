<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\ProductTranslation;

class Product extends Model implements TranslatableContract
{
    use Translatable;

    /**
     * The database table used by the model.
     * @var string $table.
     */
    protected $table = 'products';

    /**
     * Define which attributes are mass assignable (for security)
     * Fillable array includes all keys that are fillable.
     * @var array $fillable
     */
    protected $fillable = [
        'item_code',
        'price'
    ];

    /**
     * Define translatable fields 
     * @var array $translatedAttributes
     */
    public $translatedAttributes = [
        'locale',
        'heading',
        'page_title',
        'meta_description',
        'description',
        'slug'
    ];

    /**
     * Eloquent relation to product_translations table
     * @return Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function product_translations()
    {
        return $this->hasOne(ProductTranslation::class);
    }
}
