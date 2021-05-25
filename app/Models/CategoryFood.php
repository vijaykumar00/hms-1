<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryFood extends Model
{
    use HasFactory;
    protected $table="category_food";
    public function getFood(){
        return $this->HasMany(food::class,'idCategory','id');
    }

}
