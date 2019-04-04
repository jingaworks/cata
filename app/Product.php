<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
use Str;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'price_1', 'price_2', 'price_3', 'category_id',  
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the product images.
     *
     * @return string
     */
    function getImagesAttribute() {
        $result = [];
        $files = File::files(storage_path('app/public/products'));
        foreach($files as $f){
            if(Str::startsWith($f->getRelativePathname(), [$this->cod.'-'])){
                $result[] = $f->getRelativePathname();
            }
        }
        
        return $result;
    }
}
