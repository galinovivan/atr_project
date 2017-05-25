<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24.05.17
 * Time: 12:04
 */

/**
 * @param $key
 * @return String
 */
//function langs($key) {
//    if (function_exists('qtrans_getLanguage')) {
//        $lang = qtrans_getLanguage();
//        $key = strtolower($key);
//        $e = '';
//        if ($lang == 'ru') {
//           $e = require_once get_template_directory() . '/languages/!18n_ru.php';
//        }
//        elseif ($lang == 'en') {
//           $e = require_once get_template_directory() . '/languages/!18n_en.php';
//        }
//
//        else {
//            $e = require_once get_template_directory() . '/languages/!18n_ru.php';
//        }
//        return $e[$key];
//    }
//
//
//    return $key;
//}

function lang($key) {
    $key = strtolower($key);
    global $arhLang;
    if (!isset($arhLang[$key])) {
        return $key;
    }

    return $arhLang[$key];
}

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
