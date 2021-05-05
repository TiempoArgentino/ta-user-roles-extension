<?php

/**
*   Stablishes a set of capabilities for a given role
*   Must be runned before the 'wp_roles_init' action takes place. It doesn't affect the database
*   directly, so every change made will perdure only if the action hook is not removed
*   @param string $action_id                    Action identifier to store the action
*   @param string $role                         Role name
*   @param bool[] $capabilities                 Array of $capability_name => $value
*   @param int $priority                        Action hook priority
*/
function stablish_capabilities($role, $capabilities, $priority = 10){
    $hook_callback = function($wp_roles) use ($role, $capabilities){
        if( !is_string($role) || (!is_array($capabilities) && !empty($capabilities)) )
            return false;
        $role_object = $wp_roles->get_role($role);
        if($role_object){
            foreach($capabilities as $capability_name => $capability_value){
                $role_object->capabilities[$capability_name] = $capability_value;
            }
            return true;
        }
        return false;
    };

    add_action('wp_roles_init', $hook_callback, 1, $priority);
}
