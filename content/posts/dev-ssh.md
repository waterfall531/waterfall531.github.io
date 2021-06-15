---
title: "Dev Ssh"
date: 2021-06-08T17:52:54+08:00
draft: true
tags: ["devops"]
series: ["Ssh"]
categories: ["init"]
---

## install

```
yum install openssh openssh-server
yum install policycoreutils-python
yum install vim-enhanced -y
yum install net-tools
```

## conf sshd

```
vim /etc/ssh/sshd_config
```

```
Port 2222
PermitRootLogin yes
``` 

```
semanage port -a -t ssh_port_t -p tcp 2222
systemctl restart sshd.service
```

## firewall

```
firewall-cmd -—permanent —-zone=public —-add-port=2222/tcp
firewall-cmd —-reload
```

## SSH Key

```
mkdir -p .ssh;
exit;

cat .ssh/id_rsa.pub | ssh root@192.168.183.50 'cat >> .ssh/authorized_keys'

ssh -p 2222 root@192.168.183.50
chmod 700 .ssh;
chmod 640 .ssh/authorized_keys

vim /etc/ssh/sshd_config
PermitRootLogin no
```