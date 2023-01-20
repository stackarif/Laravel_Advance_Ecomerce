<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue2 extends Model
{
    use HasFactory;
    public function productAttributes()
{
    return $this->belongsToMany(ProductAttribute::class);
}
}
