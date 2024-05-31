<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Universite
 *
 * @property $CodeUniversites
 * @property $LibelleUniversites
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Universite extends Model
{
    
    protected $perPage = 20;

    protected $primaryKey = 'CodeUniversite';
    public $incrementing = false;
    public $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodeUniversite', 'LibelleUniversite'];


}
