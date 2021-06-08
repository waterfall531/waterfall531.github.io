---
title: "Dev Ssh"
date: 2021-06-08T17:52:54+08:00
draft: true
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
vim /etc/ssh/sshf_config
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
