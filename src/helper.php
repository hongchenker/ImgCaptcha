<?php
/**
 * @filename helper.php
 *
 * @author key
 * @copyright http://www.iitphp.com 2022
 * @version 1.0
 *
 * Modified at : 2022-11-17 19:44
 *
 */
use imgcaptcha\facade\ImgCaptcha;
use think\Response;

if (!function_exists('imgcaptcha')) {
    /**
     * @param string $config
     * @return \think\Response
     */
    function imgcaptcha($config = null): Response
    {
        return ImgCaptcha::create($config);
    }
}

if (!function_exists('imgcaptcha_check')) {
    /**
     * @param string $value
     * @return bool
     */
    function imgcaptcha_check($code, $key)
    {
        return ImgCaptcha::check($code, $key);
    }
}
