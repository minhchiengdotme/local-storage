<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $cast = [
        'product_type_id'   => 'integer',
        'cupboard_id'       => 'integer',
        'create_account_id' => 'integer',
        'lastup_account_id' => 'integer',
    ];

    protected $fillable = [
        'sku',
        'product_name',
        'product_type_id',
        'cupboard_id',
        'barcode_no',
        'qr_no',
        'create_account_id',
        'lastup_account_id',
    ];

    // declare relationship to ProductType: product belongs to product type
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    // declare relationship to Cupboard: product belongs to cupboard
    public function cupboard()
    {
        return $this->belongsTo(Cupboard::class);
    }

}
