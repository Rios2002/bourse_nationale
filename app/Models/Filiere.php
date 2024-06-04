<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Filiere
 *
 * @property $CodeFiliere
 * @property $LibelleFiliere
 * @property $CodeEtablissement
 * @property $created_at
 * @property $updated_at
 *
 * @property Etablissement $etablissement
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Filiere extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodeFiliere', 'LibelleFiliere', 'CodeEtablissement'];

    protected $primaryKey = 'CodeFiliere';
    public $incrementing = false;
    public $keyType = 'string';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etablissement()
    {
        return $this->belongsTo(\App\Models\Etablissement::class, 'CodeEtablissement', 'CodeEtablissement');
    }
    
}
