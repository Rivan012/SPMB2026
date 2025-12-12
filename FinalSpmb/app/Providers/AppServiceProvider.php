<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Cache;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('settings')) {
            
            // Ambil semua settings dan simpan di cache
            $settings = Cache::rememberForever('all_settings', function () {
                return Setting::all()->mapWithKeys(function ($item) {
                    // Casting manual sederhana agar di blade bisa langsung dipakai
                    $val = $item->value;
                    if($item->type == 'boolean') $val = (bool) $val;
                    if($item->type == 'integer') $val = (int) $val;
                    
                    return [$item->key => $val];
                });
            });
            // Di Blade, panggil dengan: {{ $settings['app_name'] }}
            View::share('settings', $settings);
        }
    }
}
