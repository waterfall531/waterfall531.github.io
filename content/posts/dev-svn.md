---
title: "Dev Svn"
date: 2021-06-08T17:30:54+08:00
draft: true
---

## install

```
sudo yum install subversion
```

## create repo

```
cd /var;
mkdir svn;
sudo svnadmin create /var/svn/{$name}
```

## conf

### svnserve.conf

```
anon-access = none / write / read
auth-access = write / read / none
password-db = passwd
authz-db = authz
realm = {$repoName}
```

### passwd

```
[users]
account = password
```

### authz

```
[groups]
#群組 = 帳號1,帳號2
admin = account
tmp = tmp1,test2

[{$repoName}:/]
@admin = rw
[{$repoName}:/]
$tmp = r
```

## service

```
sudo svnserve -dr /var/svn

#check
ps aux|grep svnserve

#firewall
sudo firewall-cmd --permanent -add-port=3690/tcp
sudo firewall-cmd --reload

#123
sudo systemctl enable svnserve.service
sudo systemctl start svnserve.service
```

## use

```
svn co svn://192.168.199.224/demo
```
