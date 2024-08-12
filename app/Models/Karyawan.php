<?php

namespace App\Models;

use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawans';
    protected $fillable = ['name', 'phone', 'division_id', 'position', 'image'];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
