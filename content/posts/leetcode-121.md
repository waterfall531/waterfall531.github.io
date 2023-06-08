---
title: "Leetcode 121"
date: 2023-06-06T15:44:30+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["Curated List of Top 75"]
---

> You are given an array `prices` where `prices[i]` is the price of a given stock on the i<sup>th</sup> day.
>
> You want to maximize your profit by choosing a **single day** to buy one stock and choosing a **different day** in the future to sell that stock.
>
> Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return `0`.

## V0

當下看完題目就覺得這樣想
但實際上會造成 O(N<sup>2</sup>/2)

```typescript
function maxProfit(prices: number[]): number {
    let maxProfit = 0;
    for(let i = 0 ; i < prices.length ; i++){
        for (let j = i+1 ; j < prices.length ; j++){
            let tmp = prices[j] - prices[i]
            if (tmp > maxProfit){
                maxProfit = tmp
            }
        }
    }

    return maxProfit;
};
```

## V1

替換成 O(n)
```typescript
function maxProfit(prices: number[]): number {
    var min = prices[0];
    var max = 0;

    for(let i = 0 ; i < prices.length ; i++){
        min = Math.min(min, prices[i]);
        max = Math.max(max, prices[i] - min);
    }

    return max;
};
```

## V_faster

```typescript
function maxProfit(prices: number[]): number {
    let profit = 0;

    let left = 0;
    let right = 1;

    while (right < prices.length) {
        const potentialProfit = prices[right] - prices[left];
        profit = Math.max(profit, potentialProfit);
        
        if (prices[right] < prices[left]) {
            left = right;
        }

        right++;
    }

    return profit;
};
```

## V_Mem

```typescript
function maxProfit(prices: number[]): number {
  let largestDiff = 0;
  let minPrice = prices[0];

  for (let i = 0; i < prices.length; i++) {
    if (prices[i] < minPrice) minPrice = prices[i];

    if (prices[i] - minPrice > largestDiff) largestDiff = prices[i] - minPrice;
  }

  return largestDiff;
};
```

### Test

```javascript
function maxProfitV1(prices) {
  var min = prices[0];
  var max = 0;

  for (let i = 0; i < prices.length; i++) {
    min = Math.min(min, prices[i]);
    max = Math.max(max, prices[i] - min);
  }

  return max;
}

function maxProfitV2(prices) {
  let profit = 0;

  let left = 0;
  let right = 1;

  while (right < prices.length) {
    const potentialProfit = prices[right] - prices[left];
    profit = Math.max(profit, potentialProfit);

    if (prices[right] < prices[left]) {
      left = right;
    }

    right++;
  }

  return profit;
}

function generateRandomArray(length) {
  let arr = [];
  for (let i = 0; i < length; i++) {
    arr.push(Math.floor(Math.random() * (length + 1))); // 生成0~1000的隨機整數
  }
  return arr;
}

var version = 0;
for (let i = 0; i < 100; i++) {
  let randomArray = generateRandomArray(10000000); // 產生長度為10的亂數array

  let start = Date.now(); // 獲取開始時間
  maxProfitV1(randomArray);
  let end = Date.now(); // 獲取結束時間
  // console.log(randomArray); // 打印亂數array
  let V1_time = end - start;
  // console.log("V1 Time elapsed:", V1_time, "ms"); // 打印時間差

  start = Date.now(); // 獲取開始時間
  maxProfitV2(randomArray);
  end = Date.now(); // 獲取結束時間
  let V2_time = end - start;
  // console.log("V2 Time elapsed:", V2_time, "ms"); //
  if (V2_time > V1_time) {
    version++;
  } else {
    version--;
  }
  if (i % 10 == 0) {
    console.log(i);
  }
}
if (version > 0) {
  console.log(`V2 fast then V1 ${version} times`);
} else {
  console.log(`V1 fast then V2 ${version} times`);
}
```

當陣列長度大過一定值時ex `10000000`
V2 快於 V1
小於 `100000` V1 > V2


### Explain

兩種演算法都在解決同樣的問題：在給定的股票價格陣列中，找出最大的利潤。在這種情況下，買賣規則為先買後賣，且只能進行一次交易。

這兩種演算法在時間複雜度上都是 O(n) ，其中 n 是價格陣列的長度。因為兩種演算法都採用了單次掃描的方式，所以時間複雜度是相同的。

在空間複雜度上，兩種演算法都是 O(1) ，因為都只使用了固定數量的變數，並沒有使用到與輸入大小相關的額外空間。

兩種演算法的主要差異在於，maxProfitV1 演算法在每次迴圈中同時更新了最小價格和最大利潤，而 maxProfitV2 演算法則是使用兩個指標來跟蹤可能的買入和賣出點，當找到更低的價格時更新買入點。

從實用角度來看，兩種演算法在效率上是相當的。選擇哪一種主要取決於你對代碼風格的個人偏好。

> 所以看起來問題出在存儲io

### 改進

```javascript
function maxProfitV1(prices) {
  let left = 0;
  let right = 1;
  let profit = 0;

  while (right < prices.length) {
    profit = Math.max(profit, prices[right] - prices[left]);

    if (prices[right] < prices[left])left = right

    right++
  }

  return profit;
}
```
因為存的值剩下了`profit`
後面是使用指標紀錄左右範圍就不用頻繁變動去存取io（？）