---
title: "230302writeup"
date: 2023-03-02T13:48:25+08:00
draft: true
tags: ["devops"]
series: ["Mariadb"]
categories: ["init"]
---

## mysql对外开放
edit `/etc/mysql/mysql.conf.d/mysqld.cnf`
注释掉
#bind-address = 127.0.0.1
> service mysql restart


## Mysql User Login

- `ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';`
- host 改 `%`
- `flush privileges;`更新權限

### auth_socket

- 首先，这种验证方式不要求输入密码，即使输入了密码也不验证。这个特点让很多人觉得很不安全，实际仔细研究一下这种方式，发现还是相当安全的，因为它有另外两个限制；
- 只能用 UNIX 的 socket 方式登陆，这就保证了只能本地登陆，用户在使用这种登陆方式时已经通过了操作系统的安全验证；
- 操作系统的用户和 MySQL 数据库的用户名必须一致，例如你要登陆  MySQL 的 root 用户，必须用操作系统的 root 用户登陆。