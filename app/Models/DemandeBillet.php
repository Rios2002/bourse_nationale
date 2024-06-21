<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DemandeBillet
 *
 * @property $id
 * @property $type
 * @property $motif
 * @property $ville_depart
 * @property $ville_destination
 * @property $date_depart
 * @property $date_retour
 * @property $Adresse
 * @property $statut
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DemandeBillet extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['type', 'motif', 'ville_depart', 'ville_destination', 'date_depart', 'date_retour', 'Adresse', 'statut', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
