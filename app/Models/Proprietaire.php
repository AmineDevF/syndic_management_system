<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propriete;

class Proprietaire extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function proprietes()
    {
       
        return $this->belongsTo(Propriete::class);
    }

}
