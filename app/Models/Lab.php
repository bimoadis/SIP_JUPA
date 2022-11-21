<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;

    protected $table = 'labs';

    protected $fillable = [
        'name',
        'code'
    ];

    protected $primaryKey = 'id';

    public function final_projects() {
        return $this->hasMany(FinalProject::class);
    }
}
