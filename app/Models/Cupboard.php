<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupboard extends Model
{
    use HasFactory;
    protected $table = 'cupboards';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'qr_no',
        'barcode_no',
        'storage_house_id',
        'create_account_id',
        'lastup_account_id',
    ];

    protected $casts = [
        'storage_house_id'  => 'integer',
        'create_account_id' => 'integer',
        'lastup_account_id' => 'integer',
    ];


}

