# docker-ansible-centos-php

    // 前準備
    % brew install ansible docker docker-machine-docker-compose
    % brew cask install virtualbox

    // vmを作成、起動と確認
    % docker-machine create -d virtualbox dev
    % docker-machine start dev
    % docker-machine ls

    // 環境変数設定と確認
    % eval $(docker-machine env dev)
    % env | grep DOCKER


    // コンテナ起動と確認
    % docker-compose up -d
    % docker-compose ps

    // 試しに接続
    % ansible -i hosts centos6 -m ping -c docker

    // dockeriイメージの作成と確認
    % ansible-playbook -i hosts setup.yml -vv  --extra-vars PHP_VERSION=56
    % docker images | gerp php
    % docker push oppara/centos6-php56:latest 

    // コンテナ削除
    % docker-compose down

sshを使わずにDockerコンテナのbashを起動

    % docker exec -it コンテナ名 bash


## 参考

[Dockerfileを書かずにAnsibleでプロビジョニングする](http://labs.timedia.co.jp/2016/07/dockerfileansible.html)
