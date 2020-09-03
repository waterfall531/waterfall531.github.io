---
title: "Leetcode 1512. Number of Good Pairs"
date: 2020-09-03T16:56:51+08:00
draft: true
---

>Given an array of integers *nums*.

>A pair *(i,j)* is called good if *nums[i] == nums[j]* and *i < j*.

>Return the number of good pairs.

```php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $ans = 0;
        for($i = 0; $i < count($nums) - 1 ; $i++){
            for($j = $i+1 ; $j < count($nums);$j++){
                if ($nums[$i] === $nums[$j]){
                    $ans++;
                }
            }
        }   
        return $ans;
    }
}
```