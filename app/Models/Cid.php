<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cid extends Model
{
    protected $table = "cids";

    protected $primaryKey = "cid_id";

    protected $fillable = [
        "cid_codigo",
        "cid_descricao",
    ];
}
