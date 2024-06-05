<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pv
 *
 * @property $CodePV
 * @property $Reference_PV
 * @property $DateDebutSession
 * @property $DateFinSession
 * @property $AnneeCivile
 * @property $NoteBasPage
 * @property $DateTransmissionListe
 * @property $RefLettreTransmissionListe
 * @property $statut
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pv extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodePV', 'Reference_PV', 'DateDebutSession', 'DateFinSession', 'AnneeCivile', 'NoteBasPage', 'DateTransmissionListe', 'RefLettreTransmissionListe', 'statut'];

    protected $primaryKey = 'CodePV';
    public $incrementing = false;
    public $keyType = 'integer';

}
