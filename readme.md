安装前准备:
1、确保当前laravel版本5.4
2、本机已经安装composer(http://www.phpcomposer.com/)
安装
Laravel 5.4
1、composer require encore/laravel-admin "1.4.*"
2、在config/app.php下的providers数组中加入中加入:
    Encore\Admin\Providers\AdminServiceProvider::class
然后进行发布资源
    php artisan vendor:publish --tag=laravel-admin
在执行该命令后，生成配置文件config/admin.php，可以在里面修改安装地址、数据库连接、以及表名
运行:
    php artisan admin:install
我们后台安装完毕.帐号密码均是admin




