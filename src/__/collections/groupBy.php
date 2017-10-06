<?php

namespace collections;

/**
 * Returns an associative array where the keys are values of $key.
 *
 * Based on {@author Chauncey McAskill}'s {@link https://gist.github.com/mcaskill/baaee44487653e1afc0d array_group_by()}
 * function.
 *
 * @param array $array
 * @param int|float|string|\Closure $key
 *
 * @return array
 *
 */
function groupBy(array $array, $key)
{
    if (!\is_bool($key) && !\is_scalar($key) && !\is_callable($key)) {
        return $array;
    }

    $grouped = [];
    foreach ($array as $value) {
        $groupKey = null;

        if (\is_callable($key)) {
            $groupKey = call_user_func($key, $value);
        } elseif (\is_object($value) && \property_exists($value, $key)) {
            $groupKey = $value->{$key};
        } elseif (\is_array($value) && isset($value[$key])) {
            $groupKey = $value[$key];
        }

        if ($groupKey === null) {
            continue;
        }

        $grouped[$groupKey][] = $value;
    }

    if (($argCnt = func_num_args()) > 2) {
        $args = func_get_args();

        foreach ($grouped as $_key => $value) {
            $params = array_merge([$value], array_slice($args, 2, $argCnt));
            $grouped[$_key] = call_user_func_array('__::groupBy', $params);
        }
    }

    return $grouped;
}
