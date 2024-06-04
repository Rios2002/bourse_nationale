<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pay
 *
 * @property $CodePays
 * @property $LibellePays
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pay extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['CodePays', 'LibellePays'];

    protected $primaryKey = 'CodePays';
    public $incrementing = false;
    public $keyType = 'string';
}
