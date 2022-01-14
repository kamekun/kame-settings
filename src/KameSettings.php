<?php

namespace kamekun\KameSettings;

use App\Models\KameSettings as SettingModel;

class KameSettings
{
    /**
     * Set value against a key.
     *
     * @param string $key
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function set($key, $value, $readOnly = false)
    {
        $setting = SettingModel::create(
            [
                'key' => $key,
                'value' => $value,
                'read_only' => $readOnly
            ]
        );

        return $setting ? $value : false;
    }

    /**
     * Get value by a key.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get($key)
    {
        $setting = SettingModel::where('key', $key)->first();

        return $setting ? $setting->value : false;
    }
}