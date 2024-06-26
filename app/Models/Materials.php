<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;

    protected $fillable = [
        'subjects_id',
        'users_id',
        'title',
        'content',
    ];
    

    //relationship with the users
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'users_id');
    // }

    //inverse
    public function subjects()
    {
        return $this->belongsTo(Subjects::class, 'subjects_id');
    }

}
