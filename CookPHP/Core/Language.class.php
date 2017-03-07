<?php

/**
 * CookPHP Framework
 * @name CookPHP Framework
 * @package CookPHP
 * @author CookPHP <admin@cookphp.org>
 * @version 0.0.1 Beta
 * @link http://www.cookphp.org
 * @copyright cookphp.org
 * @license <a href="http://www.cookphp.org">CookPHP</a>
 */

namespace Core;

/**
 * 语言类
 * @author CookPHP <admin@cookphp.org>
 *
 */
class Language {

    static $_language = [];

    /**
     * 返回语言
     * @access public
     * @param string $key
     * @return mixed
     */
    public static function get($key, $default = null) {
        $file = strstr($key, '.', true) ?: $key;
        $key = trim(strrchr($key, '.'), '.');
        !isset(self::$_language[$file]) && (self::$_language[$file] = Loader::loadFile(__LANGUAGE__ . strtolower(LANGUAGE) . DS . $file . '.php'));
        return empty($key) ? self::$_language[$file] : (self::$_language[$file][$key] ?? $default);
    }

    /**
     * 设置语言
     * @access public
     * @param array|string $key
     * @param string    $range  作用域
     * @param mixed        $value
     */
    public static function set($key, $value = null) {
        if (is_array($key)) {
            $keys = array_change_key_case($key, CASE_LOWER);
            foreach ($keys as $key => $value) {
                $file = strstr($key, '.', true);
                $key = trim(strrchr($key, '.'), '.');
                self::$_language[$file][$key] = $value;
            }
        } else {
            if (!empty($key)) {
                $file = strstr($key, '.', true);
                $key = trim(strrchr($key, '.'), '.');
                self::$_language[$file][$key] = $value;
            }
        }
    }

}
