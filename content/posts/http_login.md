---
title: "Http_login"
date: 2023-06-17T15:51:29+08:00
draft: true
tags: ["devops"]
series: [""]
categories: [""]
---

登入

git clone https:// **username** @github.com/ **username** /repository**.git**

這樣的話會詢問password 且不會記錄在 history

如果貪圖方便

可以弄成

actual URL: `https://usern@me:p@ssword@git/reponame.git`

Solution URL to use: `https://usern%40me:p%40ssword@git/reponame.git`

實際上跑的是 `encodeURIComponent`
