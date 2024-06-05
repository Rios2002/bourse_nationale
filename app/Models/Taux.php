<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Taux
 *
 * @property $id
 * @property $CodePays
 * @property $CodeFiliere
 * @property $CodeAnneeEtude
 * @property $CodeAnneeAcademique
 * @property $taux
 * @property $created_at
 * @property $updated_at
 *
 * @property AnneeAcademique $anneeAcademique
 * @property AnneeEtude $anneeEtude
 * @property Filiere $filiere
 * @property Pay $pay
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Taux extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodePays', 'CodeFiliere', 'CodeAnneeEtude', 'CodeAnneeAcademique', 'taux'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function anneeAcademique()
    {
        return $this->belongsTo(\App\Models\AnneeAcademique::class, 'CodeAnneeAcademique', 'CodeAnneeAcademique');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function anneeEtude()
    {
        return $this->belongsTo(\App\Models\AnneeEtude::class, 'CodeAnneeEtude', 'CodeAnneeEtude');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filiere()
    {
        return $this->belongsTo(\App\Models\Filiere::class, 'CodeFiliere', 'CodeFiliere');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pay()
    {
        return $this->belongsTo(\App\Models\Pay::class, 'CodePays', 'CodePays');
    }
    
}
