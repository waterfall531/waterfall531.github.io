---
title: "Leetcode 1221"
date: 2020-09-11T17:13:49+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["solve"]
---

>Balanced strings are those who have equal quantity of 'L' and 'R' characters.
>
>Given a balanced string `s` split it in the maximum amount of balanced strings.
>
>Return the maximum amount of splitted balanced strings.

Input: s = "RLRRLLRLRL"

Output: 4

Explanation: s can be split into "RL", "RRLL", "RL", "RL",each substring contains same number of 'L' and 'R'.

## v0

```php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit($s)
    {
        $start    = '';
        $tmp      = 0;
        $tmpCount = 0;
        for ($i = 0, $iMax = strlen($s); $i < $iMax; $i++) {
            if ($start === '') {
                $start = $s[$i];
                $tmpCount++;
            }else{
                if ($s[$i] === $start) {
                    $tmpCount++;
                } else {
                    $tmpCount--;
                }
            }

            if ($tmpCount === 0) {
                $tmp++;
                $start = '';
            }
        }
        return $tmp;
    }
}
```
