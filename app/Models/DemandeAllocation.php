<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DemandeAllocation
 *
 * @property $CodeDemandeAllocation
 * @property $type
 * @property $statut
 * @property $CodePays
 * @property $CodeFiliere
 * @property $CodeAnneeAcademique
 * @property $CodeAnneeEtude
 * @property $CodeDiplome
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property AnneeAcademique $anneeAcademique
 * @property AnneeEtude $anneeEtude
 * @property Diplome $diplome
 * @property Filiere $filiere
 * @property Pay $pay
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DemandeAllocation extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodeDemandeAllocation', 'type', 'statut', 'CodePays', 'CodeFiliere', 'CodeAnneeAcademique', 'CodeAnneeEtude', 'CodeDiplome', 'user_id'];

    protected $primaryKey = 'CodeDemandeAllocation';
    public $incrementing = false;
    public $keyType = 'string';

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
    public function diplome()
    {
        return $this->belongsTo(\App\Models\Diplome::class, 'CodeDiplome', 'CodeDiplome');
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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
