<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Posko extends Model
{
    use HasFactory;
    protected $table = 'posko';
    protected $guarded = ['id'];
    
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }


    public function users()
    {
        return $this->belongsTo(Lembaga::class, 'name');
    }
    public function lembaga()
    {
        return $this->belongsTo(User::class, 'name');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'name');
    }
}
