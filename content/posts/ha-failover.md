---
title: "Ha failover"
date: 2021-10-25T15:12:19+08:00
draft: true
tags: ["devops"]
series: ["SRE"]
categories: ["base"]
---

# HAProxy

1.  HA(High Availability)
2.  Load Balance
3.  自動加密
4.  聽 tcp socket，連 server，然後把 socket 接在一起讓雙向流通
5.  可做 Http reverse-proxy (Http gateway)，自己作為代理 server，把接受到的 connection 傳到後端的 server。
6.  SSL 終端，可支援 client-side 與 server-side 的 ssl/tls
7.  當 tcp/http normalizer
8.  更改 http 的 request 與 response
9.  當 switch，決定 request 後送的目標
10. 做 load balancer，為後端 server 做負載均衡
11. 調節流量，設定 rate limit，或是根據內容調整流量

ref:[link](https://ithelp.ithome.com.tw/articles/10223626)

# failover cluster

1. 主次明顯
2. 一個掛掉另一個馬上接手

# docker swarm

1.  Load Balance
2.  可斷線後重連
3.  可復原
4.  可以設定主次
