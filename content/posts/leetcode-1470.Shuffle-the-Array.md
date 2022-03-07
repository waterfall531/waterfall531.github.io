---
title: "Leetcode 1470 Shuffle_the_Array"
date: 2020-09-01T16:43:16+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["solve"]
---

#1470. Shuffle the Array

>Given the array *nums* consisting of *2n* elements in the form *[x1,x2,...,xn,y1,y2,...,yn]*.

>Return the array in the form *[x1,y1,x2,y2,...,xn,yn]*.


首先
>1 <= n <= 500
>
>nums.length == 2n
>
>1 <= nums[i] <= 10^3


2n 一定等於長度

也就是說

可以藉由循序 先插入 < n 的 再處理 >= n的

```
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $list = [];
        foreach($nums as $index => $num){
            if ($index < $n){
                $newIndex = $index * 2;
            }else{
                $newIndex = ($index - $n) * 2 + 1;
            }
            $list[$newIndex] = $num;
        }
        ksort($list);
        return $list;
    }
}
```
可這樣的做法問題在於 還要處理 array sort 又多花一點時間

所以又有下面的做法
直接分兩邊insert 陣列

```
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $tmp = array_chunk($nums,$n);
        $list = [];
        for($i = 0 ; $i < $n ; $i++){
            $list[] = $tmp[0][$i];
            $list[] = $tmp[1][$i];
        }
        return $list;
    }
} 
```

```
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $list = [];
        for($i = 0 ;$i < $n * 2 ;$i++){
            if ($i % 2 == 0){
                $list[] = $nums[$i / 2];
            }else{
                $list[] = $nums[$n + floor($i / 2)];
            }
        }
        return $list;
    }
}
```


```go
func shuffle(nums []int, n int) []int {
    size := len(nums);
    arr := make([]int,size);
    
    for i := 0; i < n; i++ {
        arr[2*i] = nums[i];
        arr[2*i+1] = nums[i+n];
    }
    
    return arr;
}
```