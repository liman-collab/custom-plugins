<?php

/**
 * @package Gif Generator
 */

namespace Inc;

final class Init
{

    /**
     * Store all the classes inside an arrayc
     * @return array full list of classes
     */
    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
            Base\DisableLogin::class,
            Base\TransferFile::class,
            Base\LoginController::class,
//            Base\ForgotPasswordController::class,

            ];
    }

    /**
     * Loop through the classes, initialize them, and call the register() method if it exists
     * @return
     */
    public static function register_services()
    {
        foreach (self::get_services() as $class){
            $service = self::instantiate($class);
            if (method_exists($service,'register')){
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class class from the services array
     * @return class instance new instance of the calss
     */

    private static function instantiate($class)
    {
        $service = new $class();
        return $service;
    }
}


