---
title: "Dev Mariadb"
date: 2021-06-09T11:34:06+08:00
draft: true
tags: ["devops"]
series: ["Mariadb"]
categories: ["init"]
---

## getMariadb

```
yum install mariadb-server
```

## active

```
systemctl enable mariadb
systemctl start mariadb
```

## init

```
mysql_secure_installaion
```

## deBug

```
cd /var/lib;
rm -rf mysql;
yum remove mariadb-server
```
