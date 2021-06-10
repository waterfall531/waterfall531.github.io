---
title: "Selenium / ChromeDrive / PHP base / Html CSS selector"
date: 2021-05-07T00:49:47+08:00
draft: true
tags: ["crawler"]
series: ["Selenium"]
categories: ["init"]
---

## Selenium

1. 有多版本
   1. Python
   2. NodeJs
   3. Java
   4. [Php](https://github.com/php-webdriver/php-webdriver)

2. Selenium 需要 Browser 支援
   1. Chrome
   2. Firefox

3. 而中間需要 Driver 控制
   1. [Chrome](https://chromedriver.storage.googleapis.com/index.html?path=91.0.4472.19/)
      1. Linux
      2. Mac
      3. Mac_M1
      4. Windows
   2. Firefox
      1. [Geckodriver](https://github.com/php-webdriver/php-webdriver/wiki/Firefox)
4. 而執行端需要 Chrome / Firefox
   1. Linux

        ```shell
        wget https://dl.google.com/linux/direct/google-chrome-stable_current_x86_64.rpm
        sudo yum install ./google-chrome-stable_current_*.rpm
        ```

   2. Mac
       1. 我相信你有裝Chrome
5. 執行Selenium 前必須啟動 Driver
   1. Mac/Linux
      1. ./chromedriver_mac --port=4444
6. 執行Selenium
7. 若在Linux/Docker環境下須先執行變數定義
   1. '--disable-dev-shm-usage'
      1. docker上必備
   2. '--headless'
      1. 無畫面系統下必備
   3. 'blink-settings=imagesEnabled=false'
   4. '--disable-gpu'
   5. '--no-sandbox'
      1. 無畫面系統下必備
