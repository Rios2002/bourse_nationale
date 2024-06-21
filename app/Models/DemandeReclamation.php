<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DemandeReclamation
 *
 * @property $id
 * @property $objet
 * @property $contenu
 * @property $statut
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DemandeReclamation extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['objet', 'contenu', 'statut', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
