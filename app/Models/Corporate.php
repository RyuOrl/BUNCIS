<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Corporate extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'date',
        'details',
    ];
    public function pic(): HasMany
    {
        return $this->hasMany(Pic::class, 'CorporateId');
    }
}
