---
title: "Leetcode 238"
date: 2023-06-13T14:53:00+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["Curated List of Top 75"]
---

# Intuition
<!-- Describe your first thoughts on how to solve this problem. -->
>Given an integer array nums, return an array answer such that answer[i] is equal to the product of all the elements of nums except nums[i].
>
>The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.
>
>You must write an algorithm that runs in O(n) time and without using the division operation.

題意也很簡單, 傳遞陣列並將陣列的內容求和
不過要略過自己的index 意即,

$$ Ans[i] = \prod_{n=0}^n \frac{Nums[n]}{{Nums[i]}} \quad $$

# Approach
<!-- Describe your approach to solving the problem. -->

# Complexity
- Time complexity:
<!-- Add your time complexity here, e.g. $$O(n)$$ -->
要求是 $O(n)$
- Space complexity:
<!-- Add your space complexity here, e.g. $$O(n)$$ -->
$O(n+2)$
# Code

1. 首先用abcde表達
   1. $a\prime = b * c * d * e$
   1. $b\prime = a * c * d * e$
   1. $c\prime = a * b * d * e$
   1. $d\prime = a * b * c * e$
   1. $e\prime = a * b * c * d$
2. 所以可以看出一個規律是
   1. $a\prime = 1 * b * c * d * e$
   1. $b\prime = a * 1 * c * d * e$
   1. $c\prime = a * b * 1 * d * e$
   1. $d\prime = a * b * c * 1 * e$
   1. $e\prime = a * b * c * d * 1$
3. 所以分隔成2組一左一右
   1. $a\prime = (1) * (b * c * d * e)$
   1. $b\prime = (a * 1) * (c * d * e)$
   1. $c\prime = (a * b * 1) * (d * e)$
   1. $d\prime = (a * b * c * 1) * (e)$
   1. $e\prime = (a * b * c * d * 1)$
4. 但這樣的話還是需要$O(n^2)$
   1. 但我們可以看到規律
   2. 左側的從a✖️到bcd
   3. 右側的從e✖️到dcb
5. 所以我們可以設計一個loop
   1. left i = 1 to length - 1
   2. right i = length - 1 - i to 0
6. 讓他們✖️上去

```Typescript
function productExceptSelf(nums: number[]): number[] {
    // 提前產生匯入數字1
    const ans:number[] = Array(nums.length).fill(1)
    const numsLen:number = nums.length
    // 匯入數字1
    const curr:number[] = Array(2).fill(1)

    for (let i = 1 ; i < nums.length ; i++){
        // 陣列左邊
        curr[0] *= nums[i-1] 
        // 陣列右邊
        curr[1] *= nums[numsLen-i]
        // i = 與陣列左邊相乘
        ans[i] *= curr[0]
        // numsLen-i-1 = 與陣列右邊相乘
        ans[numsLen-i-1] *= curr[1]
    }
    return ans;
};
```