<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $fillable = ["nome", "description", "prix", "image", "tags", "category_id"];

    public static function getjoin()
    {
        $prd = self::join("categories", "produits.category_id", "=", "categories.id")
            ->select("produits.*", "categories.id as categories_id", "categories.nom")->get();
        return $prd;
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
