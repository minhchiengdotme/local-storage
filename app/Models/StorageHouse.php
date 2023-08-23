<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageHouse extends Model
{
    use HasFactory;

    protected $table = 'storage_houses';
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    protected $cast = [
        'create_account_id' => 'integer',
        'lastup_account_id' => 'integer',
    ];
    
    public function cupboard() {
        return $this->hasMany(Cupboard::class);
    }
}
