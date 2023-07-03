<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table = 'staffs';
    protected $primaryKey  = 'id';
    protected $fillable = ['staffName', 'staffAddress', 'email', 'phoneNumber', 'gender', 'user_id'];
    protected $attributes = ['petStatus' => 'Notes'];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
