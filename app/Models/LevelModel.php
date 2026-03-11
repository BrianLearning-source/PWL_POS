<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    protected $table = 'm_level'; // Pastikan sesuai nama tabel di DB
    protected $primaryKey = 'level_id';
    protected $fillable = ['level_kode', 'level_nama'];

    public function user(): HasMany{
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}
