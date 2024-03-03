<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProcessoCids extends Pivot
{
    protected $table = "processo_cids";

    protected $primaryKey = "processo_cid_id";

    protected $fillable = [
        "processo_id",
        "cid_id",
    ];
}
