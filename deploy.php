<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'laravel-shop');
set('cleanup_use_sudo', true);
set('writable_use_sudo', false);
set('branch', 'master');    // 发布代码时候默认使用的分支
set('shared_files', []);    // 共享文件列表   这里面列出的文件会被移动到项目根目录的shared目录下，并做软链
set('shared_dirs', []);     // 共享目录    同上
set('writable_mode', 'chmod');  // 采用哪种方式控制可写权限，有4中：chown、chgrp、chmod、acl（默认方式）
set('writable_chmod_mode', '0755'); // 当使用chmod控制可写权限的时候，赋予的可写权限值
set('writable_dirs', []);

//允许您选择要部署的默认
//set('default_stage', 'prod');
// Project repository
set('repository', 'git@github.com:dongshangtong/laravel-shop.git');

host('120.24.241.188')
    ->user('deployer') // 这里填写 deployer
      // 并指定公钥的位置
    ->identityFile('~/.ssh/deployerkey.pub')

    ->set('deploy_path', '/var/www/laravel-shop');




    // 自定义任务：重启 php-fpm 服务
    task('php-fpm:restart', function () {
        run('systemctl restart php-fpm.service');
    });

    // 自定义任务：supervisor reload
    task('supervisor:reload', function () {
        run('sudo supervisorctl reload');
    });


    // 执行自定义任务，注意时间点是 current 已经成功链向新部署的目录之后
    after('deploy:symlink', 'php-fpm:restart');
    after('deploy:symlink', 'supervisor:reload');

    // 部署成功后重置 opcache 缓存
    after('deploy:symlink', 'opcache_reset');


    // [Optional] if deploy fails automatically unlock.
    after('deploy:failed', 'deploy:unlock');
