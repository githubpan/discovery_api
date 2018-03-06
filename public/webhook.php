<?php
    error_reporting(1);

    $target = '/www/wwwroot/discovery.panisme.com'; // 生产环境web目录

    $token = 'git_pull_webhook';
    $wwwUser = 'www';
    $wwwGroup = 'www';

    $json = json_decode(file_get_contents('php://input'), true);

    if (empty($json['token']) || $json['token'] !== $token) {
        exit('error request');
    }

    $repo = $json['repository']['name'];

    //$cmd = "cd $target && git pull";
    $cmd = 'cd '.$target.' && echo "'.json_encode($json).'" >> webhook.log';
    echo shell_exec($cmd);
