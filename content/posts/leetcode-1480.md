---
title: "Leetcode 1480"
date: 2020-09-01T16:36:33+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["solve"]
---

#1480. Running Sum of 1d Array

>Given an array *nums*. 

>We define a *running sum of an array as runningSum[i] = sum(nums[0]…nums[i])*.

>Return the running sum of *nums*.

這是道簡單的題目
第一個想法是 *foreach* 就好
但要略過 index = 0 或是去判斷

判斷的所需秒數 12ms

`
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $ans = [];
        foreach($nums as $index => $num){
            if($index === 0){
                $ans[$index] = $num;
            }else{
                $ans[$index] = $ans[$index - 1] + $num;
            }
        }
        return $ans;
    }
}
`

for迴圈略過為 4ms

`
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $result[] = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            $result[$i] = $nums[$i] + $result[$i - 1];
        }
        
        return $result;
    }
}
`