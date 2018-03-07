<?php
    error_reporting(1);

    $target = '/www/wwwroot/discovery.panisme.com'; // 生产环境web目录

    $token = 'git_pull_webhook';
    $wwwUser = 'www';
    $wwwGroup = 'www';
    $content = $_REQUEST;
echo 321;    
$cmd = "cd $target && echo \"".json_encode($content)."\" >> public/webhook.log";
echo 654;
echo exec($cmd);
exit('0000');
    if (empty($content['token']) || $content['token'] !== $token) {
        exit('error request');
    }

//    $repo = $json['repository']['name'];

    //$cmd = "cd $target && git pull";
    echo shell_exec($cmd);

