<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'domain_id'
    ];

    public function domain(){
        return $this->belongsTo(Domain::class, 'domain_id');
    }

}
