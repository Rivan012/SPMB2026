<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'type', 'description'];
    public static function getValue($key, $default = null)
    {
        // SEBELUMNYA (Hapus/Komentari ini jika ingin direct DB):
        // $setting = Cache::rememberForever("setting_{$key}", function () use ($key) {
        //     return self::where('key', $key)->first();
        // });

        // SEKARANG (Langsung Query ke Database):
        $setting = self::where('key', $key)->first();

        if (!$setting) {
            return $default;
        }

        return self::castValue($setting->value, $setting->type);
    }

    /**
     * Konversi tipe data berdasarkan kolom 'type' di database.
     */
    private static function castValue($value, $type)
    {
        switch ($type) {
            case 'boolean':
                return filter_var($value, FILTER_VALIDATE_BOOLEAN);
            case 'integer':
            case 'number':
                return intval($value);
            case 'date':
            case 'datetime':
                return $value; 
            case 'json':
            case 'array':
                return json_decode($value, true);
            default:
                return $value;
        }
    }

    /**
     * Update value
     */
    public static function setValue($key, $value)
    {
        $setting = self::where('key', $key)->first();
        if ($setting) {
            $setting->update(['value' => $value]);
            // Cache::forget tidak lagi diperlukan jika kita tidak pakai cache
            return true;
        }
        return false;
    }
}