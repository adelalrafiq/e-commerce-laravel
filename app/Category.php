<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categories()
    {

        return $this->hasmany('App\Category', 'parent_id');
    }
}
