<?php
class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        return self::has($key) ? $_REQUEST[$key] : $default;
    }

    /**
     * @return bool Returns true if the current request is a POST request
     */
    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    /**
     * Prevent the creation of instances of this class
     */
    private function __construct()
    {

    }
    public static function getString($key, $min = null, $max = null)
    {
        if (!static::has($key)) {
            throw new OutOfRangeException("Inputted key does not exist.");
        }
        if (!(is_string($key)) && (is_numeric($min) && is_numeric($max))) {
            throw new InvalidArgumentException("One or more inputs do not match the specified type.");
        }
        if (static::get($key) == null)
        {
            throw new Exception("Requested string does not exist.");
        }
        if (isset($min) && (strlen($key) < $min)) {
            throw new LengthException("Number given does not have enough digits.  Min: $min");
        }
        if (isset($max) && (strlen($key) > $max)) {
            throw new LengthException("Number given has too many digits.  Max: $max");
        }
        return static::get($key);
    }
    public static function getNumber($key, $min = null, $max = null)
    {
        if(!static::has($key)) {
            throw new OutOfRangeException("Inputted key does not exist.");
        }
        if (!(is_string($key)) && (is_numeric($min) && is_numeric($max))) {
            throw new InvalidArgumentException("One or more inputs do not match the specified type.");
        }
        if (static::get($key) == null || !is_numeric(static::get($key)))
        {
            throw new DomainException("Not numeric.");
        }
        if (isset($min) && (strlen($key) < $min)) {
            throw new LengthException("Number given does not have enough digits.  Min: $min");
        }
        if (isset($max) && (strlen($key) > $max)) {
            throw new LengthException("Number given has too many digits.  Max: $max");
        }
        return intval((static::get($key)));
    }

}