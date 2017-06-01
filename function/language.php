<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24.05.17
 * Time: 12:04
 */


/**
 * @param $key
 * @param bool $capitalize
 * @return string
 */
function lang($key, $capitalize = false) {
    $key = strtolower($key);
    global $arhLang;
    if (!isset($arhLang[$key])) {
        return $key;
    }

    if ($capitalize != false) {
        return mbUcfirst($arhLang[$key]);
    }

    return $arhLang[$key];
}

/**
 * @param $lang
 */
function loadTranslate($lang) {
    global $arhLang;
    switch ($lang) {
        case ('ru'):
         $arhLang = require_once get_template_directory() . '/languages/18n_ru.php';
          break;
        case ('en'):
          $arhLang = require_once get_template_directory() . '/languages/18n_en.php';
          break;
        default:
          $arhLang = require_once get_template_directory() . '/languages/18n_ru.php';
          break;
    }
}

function mbUcfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}
