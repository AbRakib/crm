<?php

if (!function_exists('alertMessage')) {
    /**
     * session message
     * @param string $message show in display
     */
    function alertMessage($type, $message) {
        flash()
            ->option('position', 'bottom-center')
            ->option('timeout', 4000)
            ->$type($message);
    }
}