<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Eligible
 *
 * @property $Num_table
 * @property $CodeAnneeAcademique
 * @property $Nom
 * @property $Prenoms
 * @property $Numero
 * @property $Sexe
 * @property $Serie
 * @property $LieuNaissance
 * @property $Moyenne
 * @property $Mention
 * @property $DateNaissance
 * @property $created_at
 * @property $updated_at
 *
 * @property AnneeAcademique $anneeAcademique
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Eligible extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Num_table', 'user_id','CodeAnneeAcademique', 'Nom', 'Prenoms', 'Numero', 'Sexe', 'Serie', 'LieuNaissance', 'Moyenne', 'Mention', 'DateNaissance'];

    protected $primaryKey = 'Num_table';
    public $incrementing = false;
    public $keyType = 'string';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function anneeAcademique()
    {
        return $this->belongsTo(\App\Models\AnneeAcademique::class, 'CodeAnneeAcademique', 'CodeAnneeAcademique');
    }
    
}
