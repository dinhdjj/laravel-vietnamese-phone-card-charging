<?php

declare(strict_types=1);

namespace Dinhdjj\VietnamesePhoneCardCharging\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dinhdjj\VietnamesePhoneCardCharging\VietnamesePhoneCardCharging
 */
class VietnamesePhoneCardCharging extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dinhdjj\VietnamesePhoneCardCharging\VietnamesePhoneCardCharging::class;
    }
}
