<?php

use Carbon\Carbon;

if (!function_exists('format_date')) {
    /**
     * Format a date using Carbon.
     *
     * @param string|\DateTimeInterface|null $date
     * @param string $format
     * @return string|null
     */
    function format_date($date, string $format = 'd M Y'): ?string
    {
        if (empty($date)) {
            return null;
        }

        try {
            return Carbon::parse($date)->format($format);
        } catch (\Exception $e) {
            return null;
        }
    }
}

if (!function_exists('diff_for_humans')) {
    /**
     * Return a human-readable time difference.
     *
     * @param string|\DateTimeInterface|null $date
     * @return string|null
     */
    function diff_for_humans($date): ?string
    {
        if (empty($date)) {
            return null;
        }

        try {
            return Carbon::parse($date)->diffForHumans();
        } catch (\Exception $e) {
            return null;
        }
    }
}

// in blade:
// {{ format_date($user->created_at) }}
// {{ format_date($user->birthday, 'd F Y') }}
// {{ diff_for_humans($user->updated_at) }}

// in controller:
// $date = format_date($user->created_at, 'd-m-Y');
// $ago = diff_for_humans($user->created_at);
