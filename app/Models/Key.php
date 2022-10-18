<?php

namespace App\Models;

use App\Models\Pivots\ChartKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Key extends Model
{
    use HasFactory;

    /**
     * The charts that belong to the Key
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function charts(): BelongsToMany
    {
        return $this->belongsToMany(Chart::class)
            ->withPivot('id')
            ->using(ChartKey::class);
    }
}
