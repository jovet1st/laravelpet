<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    use HasFactory;

    protected $table = 'pets';
    protected $primaryKey  = 'id';
    protected $fillable = ['petName', 'petAge', 'petBreed', 'petGender', 'user_id'];
    protected $attributes = ['petStatus' => 'Notes'];
    
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
