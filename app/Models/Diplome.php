<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Diplome
 *
 * @property $CodeDiplome
 * @property $LibelleDiplome
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Diplome extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodeDiplome', 'LibelleDiplome'];

    protected $primaryKey = 'CodeDiplome';
    public $incrementing = false;
    public $keyType = 'string';
}
