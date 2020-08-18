---
title: "Mysql Alter Column"
date: 2020-08-18T17:16:02+08:00
draft: true
---

前情提要
1400w Rows的表
不停機情況下增加欄位

* mysql 5.6(含) 使用innoDb 可以線上改欄位格式
不鎖表

* 若為 5.6以下(不含) 可考慮使用 pt-online-schema-change 

* 或考慮土法煉鋼
	* 複製表結構後產新表
	* 移除key
	* 複製資料
	* 加key
	* 停機
	* 同步第二次
	* rename && del oldTable
	
	
