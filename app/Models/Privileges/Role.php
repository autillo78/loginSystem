<?php

namespace App\Models\Privileges;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
        'desc',
        'admin'
    ];


    public function permissions()
    {        
        return $this->belongsToMany(Permission::class);
    }
    
    
    public function users() 
    {        
        return $this->belongsToMany(\App\Models\User::class);
    }
}
