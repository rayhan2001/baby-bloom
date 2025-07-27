<?php

namespace App\Helpers;

/**
 * ResponseHelper Class
 * 
 * Centralized helper for managing flash messages across the application.
 * Uses Laravel's session flash to store messages that will be displayed
 * using Toastr notifications via a Blade component.
 * 
 * @author Baby Bloom Team
 * @version 2.0.0
 */
class ResponseHelper
{
    /**
     * Set a flash message to be displayed on the next request
     * 
     * @param string $type Message type (success, error, info, warning)
     * @param string $message The message content
     * @return void
     */
    public static function message(string $type, string $message): void
    {
        // Validate message type
        $validTypes = ['success', 'error', 'info', 'warning'];
        
        if (!in_array($type, $validTypes)) {
            throw new \InvalidArgumentException("Invalid message type: {$type}. Valid types are: " . implode(', ', $validTypes));
        }

        // Store message in session using the type as the key
        session()->flash($type, $message);
    }

    /**
     * Set a success message
     * 
     * @param string $message The success message
     * @return void
     */
    public static function success(string $message): void
    {
        self::message('success', $message);
    }

    /**
     * Set an error message
     * 
     * @param string $message The error message
     * @return void
     */
    public static function error(string $message): void
    {
        self::message('error', $message);
    }

    /**
     * Set an info message
     * 
     * @param string $message The info message
     * @return void
     */
    public static function info(string $message): void
    {
        self::message('info', $message);
    }

    /**
     * Set a warning message
     * 
     * @param string $message The warning message
     * @return void
     */
    public static function warning(string $message): void
    {
        self::message('warning', $message);
    }
}