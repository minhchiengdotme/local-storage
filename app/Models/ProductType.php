<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'product_types';
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    protected $casts = [
        'create_account_id' => 'integer',
        'lastup_account_id' => 'integer',
    ];

    public function product() {
        return $this->hasMany(Product::class);
    }
}
