<?php

declare(strict_types=1);

namespace Dinhdjj\VietnamesePhoneCardCharging;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VietnamesePhoneCardChargingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('vietnamese-phone-card-charging')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_vietnamese-phone-card-charging_table')
        ;
    }
}
