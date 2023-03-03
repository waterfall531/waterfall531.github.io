---
title: "Mysqlx"
date: 2023-03-03T15:50:44+08:00
draft: true
tags: ["Mysql"]
series: ["Optimization"]
categories: ["AlterColumn"]
---

# Mysql Json Import

> 想以json格式匯入資料到mysql

## Setup

1. 預設應該是開啟的可以先藉由`show plugins`sql語句了解有沒有開啟mysqlx
2. 可以先安裝mysqlsh 詳情看[ref_mysqlsh install](#ref)
3. 若沒有開啟可執行`mysqlsh -u user -h localhost --classic --dba enableXProtocol`
4. 若無法連線可以嘗試
    1. 看port有沒有通`telnet localhost 33060`
    2. ufw(防火牆)有沒有擋
    3. `select @@mysqlx_port` 看port開在哪
    4. 檢驗 mysqlx 有沒有綁host `/etc/mysql/mysql.conf.d/mysqld.cnf`
5. `mysqlsh user@localhost:33060/database --import file.json table`
6. 成功後發現只能匯入field type 為json的一欄tableQQ

## ref

- [mysql setting up](https://dev.mysql.com/doc/refman/5.7/en/document-store-setting-up.html)
- [mysqlsh install](https://dev.mysql.com/doc/mysql-shell/8.0/en/mysql-shell-install.html)
- [mysqlsh port](https://stackoverflow.com/questions/64326446/how-to-enable-x-protocol-for-mysql-8-docker-container)
- [mysqlsh port2](https://blog.csdn.net/qq_36171645/article/details/89321492)
- [json data error](https://python.plainenglish.io/mysql-document-store-json-import-error-72b790e0ccb0)
