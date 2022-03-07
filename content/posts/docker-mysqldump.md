---
title: "Docker mysqldump"
date: 2021-06-08T17:30:54+08:00
draft: true
tags: ["devops"]
series: ["docker"]
categories: ["init"]
---

## script

```
docker exec [mysql] mysqldump -u [root] -p"[password]" --default-character-set=latin1 [database] > bak.sql
```

## Replace

1.  search `latin1`
2.  replace to `utf8`
3.  run
