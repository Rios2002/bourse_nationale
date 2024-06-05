<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lot
 *
 * @property $id
 * @property $CodePV
 * @property $Numero
 * @property $created_at
 * @property $updated_at
 *
 * @property Pv $pv
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lot extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodePV', 'Numero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pv()
    {
        return $this->belongsTo(\App\Models\Pv::class, 'CodePV', 'CodePV');
    }
    
}
