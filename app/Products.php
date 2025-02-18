<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Products Model
 */
class Products extends Model
{
    public function attributes()
    {
        return $this->hasMany('App\ProductsAttributes', 'product_id');
    }
}
