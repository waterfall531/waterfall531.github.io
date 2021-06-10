---
title: "1689_Partitioning Into Minimum Number Of Deci-Binary Numbers"
date: 2021-01-06T11:05:03+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["solve"]
---

## Question

>A decimal number is called deci-binary if each of its digits is either 0 or 1 without any leading zeros. For example, 101 and 1100 are deci-binary, while 112 and 3001 are not.
>
>Given a string n that represents a positive decimal integer, return the minimum number of positive deci-binary numbers needed so that they sum up to n.

## 白話就是

>用最少的次數 加到 題目的 n
>
>加上的數字 不能有2~9 
>
>ex 101 111 ,but not 121 3001

```php
class Solution {

    /**
     * @param String $n
     * @return Integer
     */
    function minPartitions($n) {
        return max(str_split($n));
    }
}
```

### 題外話

發現leetCode的時間很扯
同樣解法有16ms 也有124ms...
