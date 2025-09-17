<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persion_model extends Model
{
    use HasFactory;

    protected $table = 'person';
    protected $primaryKey = 'id_person';
    public $timestamps = true;
    protected $fillable = [
        'full_name', 'gender', 'cccd', 'date_of_birth', 
        'address', 'email', 'phone', 'id_person_type', 'id_class', 'is_active'
    ];

} 