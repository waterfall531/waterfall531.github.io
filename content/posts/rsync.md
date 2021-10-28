---
title: "Rsync"
date: 2021-10-28T11:22:47+08:00
draft: true
tags: ["Devops"]
series: ["rsync"]
categories: ["Base"]
---

# Rsync

1.   增量同步
2.   `rsync -avz --delete --progress "${SRC}" "/backup/$(hostname)"`
3.   --progress 會顯示有進行同步的檔案
4.   --delete 會刪除來源也刪除的檔案
5.   -a
     1.   封裝備份模式
     2.   遞迴備份所有子目錄下的目錄與檔案，保留連結檔、檔案的擁有者、群組、權限以及時間戳記
     3.   `-rlptgoD`
6.   -v
     1.   verbose 模式，輸出比較詳細的訊息
7.   -z
     1.   啟用壓縮
8.   -r
     1.   遞迴
9.   -t
     1.   preserve modification times
     2.   保留修改時間
10.   -o
      1.   preserve owner
11.   -p
      1.   preserve permissions
12.   -g
      1.   preserve group
13.   -l
      1.   copy symlinks as symlinks
14.   -D
      1.   是"--device --specials"選項的組合，即也拷貝裝置檔案和特殊檔案。

