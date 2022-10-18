<?php

namespace App\Models;

use App\Models\Pivots\ChartKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chart extends Model
{
    use HasFactory;

    /**
     * The keys that belong to the Chart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function keys(): BelongsToMany
    {
        return $this->belongsToMany(Key::class)
            ->withPivot('id')
            ->using(ChartKey::class);
    }
}
