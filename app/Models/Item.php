<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    
    protected $cast = [
        'create_account_id' => 'integer',
        'lastup_account_id' => 'integer',
    ];

    protected $fillable = [
        'sku',
        'product_name',
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
}
