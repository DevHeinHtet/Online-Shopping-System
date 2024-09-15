<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'description',
        'condition',
        'type',
        'status',
        'photo',
        'owner_name',
        'phone_no',
        'address',
        'latitude_logitude',
    ];

    protected $attributes = [
        'latitude_logitude' => '1213.12312,21312.1231'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
