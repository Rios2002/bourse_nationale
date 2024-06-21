<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification_boursier extends Model
{
    use HasFactory;

    protected $perPage = 20;

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['NumeroDeTable', 'DateNaissance', 'AnneeObtention'];
}
