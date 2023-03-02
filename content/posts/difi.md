---
title: "220317writeup"
date: 2022-03-17T13:48:25+08:00
draft: true
tags: ["cryptocurrency"]
series: ["ETH"]
categories: ["init"]
---

1.   ZK(零知識證明)
     1.   Tornado
          1.   匿名傳送代幣
2.   Lending
     1.   compoud
          1.   借貸模型
               1.   $$ 兌換率 = \frac{未被借走的數量+應償還的數量-保留金額}{總額} $$
               2.   使用率 ＝ $$ \frac{總借款}{總金額+傯借款}$$
               3.   借款年利率 = 基礎利率 + (使用率 x 加給利率)
                    1.   ![img](https://miro.medium.com/max/1400/1*Cra1_66PfGVNPBWdk47Yrw.png)
               4.   放貸年利率 ≈ 借款年利率 x 使用率 x (1-保留利率)
               5.   借款越多 / 未被借走數量越多利息越高
          2.   雖然使用者年利率會是以每小時計價但存入DAI 後拿到的代幣cDAI 卻不一定能換取更多的DAI回來
               1.   DAI to cDAI => 1:40
               2.   放貸一段時間
               3.   DAI to cDAI => 1:50
               4.   等同於憑空消失 1/4的本金
     2.   Maker DAO，穩定幣模式，類比當舖，只貸不借
     3.   Compound，流動池交易模式，類比銀行，隨存隨取
     4.   Dharma，P2P 撮合模式，類 P2P 貸款，無法隨借隨還
     5.   Aave，閃貸，無抵押貸款，轉為套利而準備。
3.   Deri
     1.   dydx
     2.   perp
4.   Oracle
     1.   chainLink
5.   MEV
6.   uniswap
     1.   錢包
     2.   status
     3.   加速
     4.   react
7.   seal
8.   DAO
     1.   分散式自治組織
     2.   MK
     3.   合約審計
          1.   提前計算合約失敗後能賺多少錢
9.   



## 房地產碎片化投資

### Lofty.ai

### realt.co

### ERC1155 / ERC721

#### Polygol / ERC / TRC

