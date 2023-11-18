<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cid extends Model
{
    protected $table = 'cids';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cid_codigo',
        'cid_descricao',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'cid_id';
}
