<?php
if (!function_exists('hex_2_rgb')) {
    /**
     * @param $hexVal
     * @return array
     */
    function hex_2_rgb($hexVal)
    {
        list($r, $g, $b) = sscanf($hexVal, "#%02x%02x%02x");
        return [
            'r' => $r,
            'g' => $g,
            'b' => $b
        ];
    }
}
