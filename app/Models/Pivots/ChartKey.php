<?php

namespace App\Models\Pivots;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ChartKey extends Pivot
{
    public $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;
}
