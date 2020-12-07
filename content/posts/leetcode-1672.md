---
title: "Leetcode 1672.Richest Customer Wealth"
date: 2020-12-07T17:06:52+08:00
draft: true
---

>You are given an *m x n* integer grid *accounts* where *accounts[i][j]* is the amount of money the *i​​​​​​​​​​​<sup>th</sup>*​​​​ customer has in the *j<sup>​​​​​​​​​​​th</sup>*​​​​ bank. Return the wealth that the richest customer has.
>
>A customer's wealth is the amount of money they have in all their bank accounts. The richest customer is the customer that has the maximum wealth.

## v0

```php
class Solution
{
    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts)
    {
        $max = 0;
        foreach ($accounts as $list) {
            $tmpSum = array_sum($list);
            $max    = $max > $tmpSum ? $max : $tmpSum;
        }
        return $max;
    }
}
```

## leetcode

```php
class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $add = [];
        $output = 0;
        foreach ($accounts as $key => $value) {
            $add[] = array_sum($accounts[$key]);
            $output = max($add);
        }
        return $output;
    }
}
```

註 leetcode的最佳解沒有比較快
v0在本機上實測300次約略為 0.08ms
leetcode為 0.2ms