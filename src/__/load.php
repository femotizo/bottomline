<?php

namespace __;

/*                                                 *\
 *                   bottomline                    *
 *                                                 *
 ___________________________________________________
 ***************************************************

 ** Arrays                                       [10]
 ** Collections                                  [28]
 ** Functions                                    [3]
 ** Objects                                      [8]
 ** Utilities                                    [2]
 ** Strings                                      [13]
 ** Sequences                                    [1]

 ***************************************************
 * bottomline v0.1.1                               *
 * bottomline is licensed under the MIT license    *
 * Copyright (c) 2014 Maciej A. Czyzewski          *
\***************************************************/

if (\version_compare(PHP_VERSION, '5.4.0', '<')) {
    throw new \Exception('Your PHP installation is too old. Bottomline requires at least PHP 5.4.0', 1);
}

/** 'Given enough eyeballs, all bugs are shallow' -- Eric Raymond */

/**
 * @method static array append(array $input, $item) <code>__::append([1, 2, 3], 4)</code> >> [1, 2, 3, 4]
 * @method static array chunk(array $input, $size = 1, $preserveKeys = false) Creates an array of elements split into groups the length of size. If array can't be split evenly, the final chunk will be the remaining elements. <code>__::chunk([1, 2, 3, 4, 5], 3)</code> >> [1, 2, 3], [4, 5]
 * @method static array compact(array $input) Returns a copy of the array with falsy values removed. <code>__::compact([0, 1, false, 2, '', 3])</code> >> [1, 2, 3]
 * @method static array drop(array $input, int $number = 1) Creates a slice of array with n elements dropped from the beginning.
 * @method static array flatten(array $input, bool $shallow = false) Flattens a multidimensional array. If you pass shallow, the array will only be flattened a single level.
 * @method static array patch(array $input, array $patches) Patches array with list of xpath-value pairs.
 * @method static array prepend(array $input, $item)
 * @method static array randomize(array $input) Returns shuffled array ensuring no item remains in the same position.
 * @method static array range(int $startOrCount, int $stop = null, int $step = null) Returns an array of integers from start to stop (exclusive) by step.
 * @method static array repeat($input, int $times = 0) Returns an array of input repeated $times times.
 *
 * @method static array|object assign(array|object $collection1, [array|object $... ]) Combines and merge collections provided with each others.
 * @method static array|object concat(array|object $collection1, [array|object $... ]) Combines and concat collections provided with each others.
 * @method static array|object concatDeep(array|object $collection1, [array|object $... ]) Recursively combines and concat collections provided with each others.
 * @method static array ease(array $input, string $glue = '.')
 * @method static array filter(array|\Traversable $input, \Closure $func = null) Returns the values in the collection that pass the truth test.
 * @method static array|mixed first(array $input, int $count = null) Gets the first element of an array. Passing n returns the first n elements.
 * @method static null doForEach(array|object $collection, \Closure $iteratee) Iterate over elements of the collection and invokes iteratee for each element.
 * @method static null doForEachRight(array|object $collection, \Closure $iteratee) Iterate over elements of the collection, from right to left, and invokes iteratee for each element.
 * @method static bool every(array|object $collection, \Closure $iteratee) Checks if predicate returns truthy for all elements of collection.
 * @method static array|mixed get(array|object $collection, string $path, \Closure|mixed $default = null)
 * @method static array groupBy(array $input, int|float|string|\Closure $key) Returns an associative array where the keys are values of $key.
 * @method static bool has($collection, $key) Returns true if $collection contains the requested $key.
 * @method static bool hasKeys(array $input, array $keys, $strict = false) Returns if $input contains all requested $keys. If $strict is true it also checks if $input exclusively contains the given $keys.
 * @method static bool isEmpty($value) Check if $value is an empty array or object.
 * @method static array|mixed last(array $input, int $count = null) Gets the last element of an array. Passing n returns the last n elements.
 * @method static array map(array|object $collection, \Closure $func = null) Returns an array of values by mapping each in collection through the iterator.
 * @method static array mapKeys(array $input, \Closure $func = null) Returns an array with keys being mapped through the iterator
 * @method static array mapValues(array $input, \Closure $func = null) Returns an array with values being mapped through the iterator
 * @method static array max(array|\Traversable $input) Returns the maximum value from the collection. If passed an iterator, max will return max value returned by the iterator.
 * @method static array|object concatDeep(array|object $collection1, [array|object $... ]) Recursively combines collections provided with each others.
 * @method static array min(array|\Traversable $input) Returns the minimum value from the collection. If passed an iterator, min will return min value returned by the iterator.
 * @method static array pluck(array|object $input, string $key) Returns an array of values belonging to a given property of each item in a collection.
 * @method static mixed reduce(array|\Traversable $input, \Closure $iteratee, mixed $accumulator = null) Reduces a collection to a value which is the $accumulator result of running each element in the collection thru $iteratee, where each successive invocation is supplied the return value of the previous.
 * @method static mixed reduceRight(array|\Traversable $input, \Closure $iteratee, mixed $accumulator = null) Reduces a collection to a value which is the $accumulator result of running each element in the collection - from right to left - thru $iteratee, where each successive invocation is supplied the return value of the previous.
 * @method static array set(array|object $collection = [], string $key = '', $value = null, $strict = false) Set item of an array by index to given value, aceepting nested index
 * @method static array pick(array $array = [], array $paths = [], $default = null) Returns an array having only keys present in the given path list.
 * @method static array unease(array $input, string $separator = '.')
 * @method static array where(array|\Traversable $input, mixed $itemParams = '')
 *
 * @method static array slug(string $input, array $options = []) Default options: <code>array('delimiter' => '-', 'limit' => null, 'lowercase' => true, 'replacements' => array(), 'transliterate' => true)</code>
 * @method static array truncate(string $input, int $wordsCount)
 * @method static array urlify(string $input) <code> __::urlify('I love https://google.com') </code> >> 'I love <a href="https://google.com">google.com</a>'
 *
 * @method static bool isArray($var)
 * @method static bool isEmail($var)
 * @method static bool isFunction($var)
 * @method static bool isNull($var)
 * @method static bool isNumber($var)
 * @method static bool isObject($var)
 * @method static bool isString($var)
 * @method static bool isCollection($var)
 *
 * @method static int now()
 * @method static mixed identity()
 *
 * @method static string camelCase(string $input)
 * @method static string capitalize(string $input)
 * @method static string kebabCase(string $input)
 * @method static string lowerCase(string $input)
 * @method static string lowerFirst(string $input)
 * @method static string snakeCase(string $input)
 * @method static array split(string $input, string $delimiter[, int $limit]) Split a string by string.
 * @method static string startCase(string $input)
 * @method static string toLower(string $input)
 * @method static string toUpper(string $input)
 * @method static string upperCase(string $input)
 * @method static string upperFirst(string $input)
 * @method static array words(string $input, string $pattern = null)
 *
 * @method static \BottomlineWrapper chain(mixed $input)
 */
class __
{
    private static $modules = [
        'arrays',
        'collections',
        'functions',
        'objects',
        'utilities',
        'strings',
        'sequences'
    ];

    private static $functions = [];

    public static function __callStatic($name, $arguments)
    {
        return self::__loader($name, $arguments);
    }

    public function __call($name, $arguments)
    {
        return self::__loader($name, $arguments);
    }

    private static function __loader($name, $arguments)
    {
        if (isset(self::$functions[$name])) {
            return \call_user_func_array(self::$functions[$name], $arguments);
        }

        foreach (self::$modules as $moduleName) {
            $file = __DIR__ . DIRECTORY_SEPARATOR . $moduleName . DIRECTORY_SEPARATOR . $name . '.php';
            if (\file_exists($file)) {
                $func = require $file;
                self::$functions[$name] = $func !== 1 ? $func : $moduleName . '\\' . $name;
                break;
            }
        }

        if (isset(self::$functions[$name])) {
            return \call_user_func_array(self::$functions[$name], $arguments);
        }

        throw new \Exception('Invalid function: ' . $name);
    }
}
