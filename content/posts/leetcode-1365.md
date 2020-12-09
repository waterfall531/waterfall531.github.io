---
title: "Leetcode 1365"
date: 2020-09-11T17:13:49+08:00
draft: true
---

>Given the array nums, for each nums[i] find out how many numbers in the array are smaller than it. That is, for each nums[i] you have to count the number of valid j's such that j != i and nums[j] < nums[i].
>
>Return the answer in an array.




## v0

```php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums)
    {
        $sortArray = $nums;
        sort($sortArray);

        $resultC = [];
        foreach ($sortArray as $i => $iValue) {
            $resultC[$iValue] = !isset($resultC[$iValue]) ? $i : $resultC[$iValue];
        }

        $result = [];
        foreach ($nums as $value){
            $result[] = $resultC[$value];
        }

        return $result;
    }
}
```
