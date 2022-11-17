<?php
/**
 * @filename ImgCaptcha.php
 *
 * @author key
 * @copyright http://www.iitphp.com 2022
 * @version 1.0
 *
 * Modified at : 2022-11-17 22:40
 *
 * 门面
 */
namespace imgcaptcha\facade;

use think\Facade;

class ImgCaptcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \imgcaptcha\ImgCaptcha::class;
    }
}
