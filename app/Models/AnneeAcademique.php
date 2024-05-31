<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnneeAcademique
 *
 * @property $CodeAnneeAcademique
 * @property $LibelleAnneeAcademique
 * @property $DebutEcheance
 * @property $FinEcheance
 * @property $StatutAnneeAcademique
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AnneeAcademique extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodeAnneeAcademique', 'LibelleAnneeAcademique', 'DebutEcheance', 'FinEcheance', 'StatutAnneeAcademique'];


}
