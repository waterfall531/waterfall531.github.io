---
title: "Lcd Guide"
date: 2021-06-16T06:21:55+08:00
draft: true
---

## size

1. 24"(29.88 * 53.69) => 1604cm^2
2. 27"(33.62 * 59.77) => 2009cm^2
3. 32"(39.84 * 70.84) => 2822cm^2

挑選對應主要是 `解析度` 等等談
其次是桌深

最後是小Tips 是

24" * 1.25 = 27"
24" * 1.75 = 32"

## 解析度 / DPI

Apple推出的retina 標準為
2560x1440 @ 27 Apple iMac 27
2880x1800 @ 15.4 Apple Retina MacBook Pro 15"

其實主要就是螢幕尺寸對應的解析度

1.(2560^2 * 1440^2)^-2 / 27" => 108.79 PPI

為何要這麼高的`解析度`?

主要是為了解決像素點
如果`解析低`、`螢幕太大`就會看到小點點
![image](https://upload.wikimedia.org/wikipedia/commons/3/3e/%27Map%27_on_Retina_Display.jpg)

不想看到點點
就要拉`高解析`、`縮小螢幕`
![image](https://upload.wikimedia.org/wikipedia/commons/6/63/Retina_Display.jpg)

所以可以推論出
![32](https://latex.codecogs.com/svg.image?\bg_white&space;\inline&space;\tfrac{\sqrt{3840^2&space;&plus;&space;2160^2}}{32})

1. 27"建議2k
2. 24"建議1080p
3. 32"建議4k

## 亮度

亮度主要影響兩點
一個是`低`、`高`光源下是否會變成 PWM 調光

另一點為-[HDR](##HDR)

## PWM

1. PWM調光
   1. 原理是由每秒n次閃爍調光
   2. 低光源下眼睛容易`疲勞`
   3. 便宜
2. DC調光
   1. 原理是直流變頻
   2. 不易疲勞
   3. 貴

相關認證為

1. TÜV Eyesafe Display (2020/06)
2. TÜV Flicker-free
3. TÜV Low Blue Light
   1. 原理是將415~455nm的能量強度降低50%

[link](https://eyesafe.com/wp-content/uploads/2020/09/Eyesafe-Display-Requirements-2020.pdf)

## HDR

1. [HDR Video](https://vdn3.vzuu.com/HD/8c15292e-9fc6-11ea-9051-baa8aa473bfe.mp4?disable_local_cache=1&auth_key=1623801874-0-0-02a1dc06532995c7f542166ca55dca94&f=mp4&bu=http-com&expiration=1623801874&v=tx)
2. 要通過HDR標準才能稱得上HDR

![HDR](https://pic1.zhimg.com/50/v2-02cda8de35848c2c8ac84c52f9a5eea4_hd.jpg?source=1940ef5c)

由上圖所知
亮度低於400 連HDR400都稱不上

但為何市面上都在宣稱自己是
HDR 10
HDR 400
因為

DisplayHDR 400 高於 HDR 10

[更多詳情](https://www.zhihu.com/question/325302989)

## MPRT
## G2G
## Input Lag

1. 接下來3個一起提
2. MPRT 螢幕反應時間
3. G2G 螢幕顏色從 `灰色` 到 `白色` 到 `灰色` 時間
4. 輸入延遲

為何要說MPRT越低越好
因為 

>以 60hz螢幕舉例   就是1秒鐘  顯示 60張畫面  平均每張畫面 存在0.016秒=16ms
>
>那5ms跟1ms的螢幕  最大的差別在哪裡呢?
>
>差別在於  螢幕可接受畫面訊號 的時間
>
>16毫秒中 1ms用來顯示畫面  所以我可接受訊號時間為15毫秒
>
>16毫秒鐘 5ms用來顯示畫面 所以我可接受訊號時間為11毫秒
>
>[link](https://forum.gamer.com.tw/Co.php?bsn=60030&sn=2018653)

那g2g又為何而來?

因為 MPRT 可以作弊 而 g2g不行

1. MPRT 為 `黑` 到 `白` 到 `黑`
2. 那就有人想到拉 `全開`、`全關`、`全開`
3. 那我只要電壓(加速度)開到最大就好拉
4. 也就有了作弊的方式
5. 也就延伸出`g2g`


g2g測試方式為

![g2g](https://i.rtings.com/assets/products/ZO4kW1zv/acer-nitro-xv272u-kvbmiiprzx/tables-max-large.jpg)

[link](https://zh.wikipedia.org/wiki/%E5%8F%8D%E6%87%89%E6%99%82%E9%96%93)


>其實還有各個灰階之間的變化。
>
>以8-bit色階而言，最亮到最暗共有256個刻度
>
>0為最暗，255為最亮（最紅、最綠、或最藍）
>
>假如今日是從「灰階值為5的藍」轉成「灰階值為120的藍」

[inputlag Video](https://youtu.be/Amc2-HongSo)

由影片得知兩款螢幕
同時間下
顯示的時間不盡相同
所以也是越低越好