---
title: "Leetcode 1486. XOR Operation in an Array"
date: 2020-09-07T11:55:57+08:00
draft: true
---
>Given an integer *n* and an integer *start*.
>Define an array `nums` where `nums[i] = start + 2*i` (0-indexed) and `n == nums.length`.
>Return the bitwise XOR of all elements of `nums`.

## v0

$tmpNum算出當下的n

再算$tmp

^ 是運算 xor

xor 是邏輯 xor


```php
class Solution {

    /**
     * @param Integer $n
     * @param Integer $start
     * @return Integer
     */
    function xorOperation($n, $start) {
        $tmp = $start;
        for($i = 1 ; $i < $n ; $i++){
            $tmpNum = $start + 2 * $i;
            $tmp = $tmp ^ $tmpNum;
        }
        return $tmp;
    }
}
```

#v1

這邊直接算當下的nums 在直接xor

```php
class Solution {

    /**
     * @param Integer $n
     * @param Integer $start
     * @return Integer
     */
    function xorOperation($n, $start) {
        for($i=0; $i < $n ; $i++){
            $nums ^= $start + ( 2 * $i);
        }
        
        return $nums;
        
    }
}
```