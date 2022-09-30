<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proprietaire;
class Propriete extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function proprietaire()
    {
        return $this->hasMany(Proprietaire::class);
    }


}
