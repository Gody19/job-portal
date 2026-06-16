<?php

if (! function_exists('updateYear')) {
    /**
     * Return the current year or a year range from a given start year.
     *
     * @param  int|null  $startYear
     * @return string
     */
    function updateYear(int $startYear = null): string
    {
        $currentYear = (int) date('Y');

        if ($startYear === null || $startYear >= $currentYear) {
            return (string) $currentYear;
        }

        return "{$startYear} - {$currentYear}";
    }
}
