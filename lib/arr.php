<?php

class Arr
{
    public static function get (array $arr, $key, $default = null)
    {
        if ($key === null) return $arr;

        $keys = explode('.', $key);
        $topkey = array_shift($keys);

		if (! isset($arr[$topkey])) return $default;

        if (count($keys) === 0) return $arr[$topkey];

        return static::get($arr[$topkey], implode('.', $keys), $default);
    }

    public static function set (array &$arr, $key, $value = null)
    {
        if ($key === null) {
            $arr = $value;
            return;
        }

        $keys = explode('.', $key);

        while (count($keys) > 1) {
            $topkey = array_shift($keys);
            if (! isset($arr[$topkey]) or ! is_array($arr[$topkey])) {
                $arr[$topkey] = array();
            }
            $arr =& $arr[$topkey];
        }
        $arr[$keys[0]] = $value;
    }

}
