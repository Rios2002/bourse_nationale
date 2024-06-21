<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DemandePaiement
 *
 * @property $id
 * @property $CodeBanque
 * @property $CodeGuichet
 * @property $NumCompte
 * @property $CleRIB
 * @property $IBAN
 * @property $CodeSwift
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
class DemandePaiement extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodeBanque', 'CodeGuichet', 'NumCompte', 'CleRIB', 'IBAN', 'CodeSwift', 'Adresse', 'statut', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
