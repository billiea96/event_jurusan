<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        $gate->define('admin', function ($user) {
            if ($user->hak_akses == 'Admin') {
                return true;
            }
            else {
                return false;
            }
        });
        $gate->define('mahasiswa', function ($user) {
            if ($user->hak_akses == 'Mahasiswa') {
                return true;
            }
            else {
                return false;
            }
        });
        $gate->define('dosen', function ($user) {
            if ($user->hak_akses == 'Dosen') {
                return true;
            }
            else {
                return false;
            }
        });
        //
    }
}
