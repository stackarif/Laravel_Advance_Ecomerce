<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AttributeValueProductAttribute extends Model
{
    use HasFactory;
    public function attrtibuteValue(){

        return $this->BelongsTo(AttributeValue::class,'attribute_value_id');


    }
   public function productAttribute(){

       return $this->BelongsTo(ProductAttribute::class,'product_attribute_id');


   }

}
