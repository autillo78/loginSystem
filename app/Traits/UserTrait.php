<?php

namespace App\Traits;

trait UserTrait 
{

    /**
     * Check out a user has a specific permission
     * 
     * @param  string $slugPermission
     * @return boolean
     */
    public function hasPermission($slugPermission)
    {
        foreach ($this->roles as $role) {
            
            if ($role->admin) {
                return true;
            }

            foreach ($role->permissions as $permission) {
                
                if ($slugPermission === $permission->slug) {
                    return true;
                }
            }
        }

        return false;
    }

}