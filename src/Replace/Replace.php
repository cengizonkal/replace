<?php


namespace Replace;


class Replace
{
    public static function recursive(&$target, array $map)
    {
        if (is_array($target)) {
            foreach ($target as $key => $item) {
                if (is_array($item) || is_object($item)) {
                    self::recursive($target[$key], $map);
                } elseif (isset($map[$item])) {
                    $target[$key] = $map[$item];
                }
            }
        } elseif (is_object($target)) {
            $values = get_object_vars($target);
            foreach ($values as $key => $item) {
                if (is_array($item) || is_object($item)) {
                    self::recursive($target->{$key}, $map);
                } elseif (isset($map[$item])) {
                    $target->{$key} = $map[$item];
                }
            }
        } elseif (isset($map[$target])) {
            $target = $map[$target];
        }

    }
}