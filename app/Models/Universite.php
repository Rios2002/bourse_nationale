<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Universite
 *
 * @property $CodeUniversite
 * @property $LibelleUniversite
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Universite extends Model
{
    
    protected $perPage = 20;

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodeUniversite', 'LibelleUniversite'];

    protected $primaryKey = 'CodeUniversite';
    public $incrementing = false;
    public $keyType = 'string';
}
