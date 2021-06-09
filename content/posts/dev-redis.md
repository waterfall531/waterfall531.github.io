---
title: "Dev Redis"
date: 2021-06-09T10:17:51+08:00
draft: true
---

## install redis

```
yum install wget gcc
wget http://download.redis.io/releases/redis-5.0.3.tar.gz

tar -zxvf redis-5.0.3.tar.gz
cd redis-5.0.3
make install

#test
echo $?
```

## setup

```
mkdir -p /usr/local/redis
cp redis-benchmark redis-check-aof redis-check-rdb redis-cli redis
-sentinel redis-server /usr/local/redis/
cp /root/redis-5.0.3/redis.conf  /usr/local/redis/
cp /root/redis-5.0.3/sentinel.conf  /usr/local/redis/

#test
redis-server /usr/local/redis/redis.conf
```

## backup

1. RDB

依據時間/key值變化數量去做快照

2. AOF

依據每單位時間做的log

3. 優點

RDB 還原快 數據量小
AOF 時間節點多 

## 淘汰

1. 有設定時間
  *. 依據使用量
  *. 靠近過期時間
  *. 隨機

2. 無設定時間
  *. 依據使用量
  *. 隨機
  *. 不刪除

## 主從架構

1. start
server 0 掛掉
搜尋最快的
推舉出新master
其他的改地址

2. link
server 0 掛掉
1 為master
2 複製 1
n 複製 n-1

## ha / 哨兵

藉由ping 個節點 了解狀況
主節點掛了
之後選舉出新主節點
自動替換
原節點上線後更替回來



