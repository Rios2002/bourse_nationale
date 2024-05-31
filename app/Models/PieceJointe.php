<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PieceJointe
 *
 * @property $id
 * @property $LibellePieceJointe
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PieceJointe extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['LibellePieceJointe'];


}