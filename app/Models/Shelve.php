<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelve extends Model
{
    use HasFactory;
    
    protected $table = 'shelves';
    protected $casts = [
        'cupboard_id'       => 'integer',
        'create_account_id' => 'integer',
        'lastup_account_id' => 'integer',
    ];
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'qr_no',
        'barcode_no',
        'cupboard_id',
        'create_account_id',
        'lastup_account_id',
    ];
    
    // declare relationship to Cupboard: shelve belongs to cupboard
    public function cupboard()
    {
        return $this->belongsTo(Cupboard::class);
    }
}
