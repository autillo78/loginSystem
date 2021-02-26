<?php

namespace App\Models\Privileges;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'desc'
    ];


    /**
     * Get the roles with the permission
     * 
     */
    public function roles()
    {        
        return $this->belongsToMany(Role::class);
    }
}
