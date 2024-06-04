<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Etablissement
 *
 * @property $CodeEtablissement
 * @property $LibelleEtablissement
 * @property $CodeUniversite
 * @property $created_at
 * @property $updated_at
 *
 * @property Universite $universite
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Etablissement extends Model
{
    
    protected $perPage = 20;

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodeEtablissement', 'LibelleEtablissement', 'CodeUniversite'];

    protected $primaryKey = 'CodeEtablissement';
    public $incrementing = false;
    public $keyType = 'string';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function universite()
    {
        return $this->belongsTo(\App\Models\Universite::class, 'CodeUniversite', 'CodeUniversite');
    }
    
}
