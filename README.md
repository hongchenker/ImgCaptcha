# ImgCaptcha
thinkphp6前后端分离验证码

## 安装
> composer require hck/img-captcha

## 使用

### 在控制器中输出验证码

在控制器的操作方法中使用

~~~
public function imgcaptcha($id = '')
{
	return imgcaptcha($id);
}
~~~

### 控制器里验证

手动验证
~~~
if(!imgcaptcha_check($captcha)){
 //验证失败
};
~~~
