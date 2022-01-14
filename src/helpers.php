<?php

/**
 * Helper functions for Settings.
 * 
 */
if (!function_exists('setting')) {
    function setting($key = false, $isDefault = false)
    {
        $setting = app('Setting');

        if ($key === false) {
            return $setting;
        }

        $value = $setting->get($key);

        return $value ? $value : $isDefault;
    }
}