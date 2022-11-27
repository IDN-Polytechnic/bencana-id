<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posko extends Model
{
    use HasFactory;
    protected $table = 'poskos';
    protected $guarded = ['id'];
    
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }


    // public function users()
    // {
    //     return $this->belongsTo(Lembaga::class, 'name');
    // }
    // public function lembaga()
    // {
    //     return $this->belongsTo(User::class, 'name');
    // }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    // public function satuan()
    // {
    //     return $this->belongsTo(Satuan::class, 'name');
    // }
}
