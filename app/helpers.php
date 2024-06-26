<?php

if (!function_exists('formatModelName')) {
    function formatModelName($modelName)
    {
        return preg_replace('/(?<!\ )[A-Z]/', ' $0', $modelName);
    }
}
