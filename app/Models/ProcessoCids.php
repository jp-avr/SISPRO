<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessoCids extends Model
{
    protected $table = "processo_cids";

    protected $primaryKey = "processo_cid_id";

    protected $fillable = [
        "processo_id",
        "processo_id",
    ];
}
