---
title: "Leetcode 217"
date: 2023-06-08T10:10:25+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["Curated List of Top 75"]
---

# Intuition
<!-- Describe your first thoughts on how to solve this problem. -->
> Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

這題很簡單的題意, 檢驗陣列內是否有重複
就依照python dist 的方向去思考
# Approach
<!-- Describe your approach to solving the problem. -->
一開始其實是想寫成 do-while loop但發現
跳脫的條件
1. status 變化的時後
2. index 抵達陣列最大長度

想說好像沒必要就換回for-loop

# Complexity
- Time complexity:
<!-- Add your time complexity here, e.g. $$O(n)$$ -->
$$O(n)$$

- Space complexity:
<!-- Add your space complexity here, e.g. $$O(n)$$ -->
$$O(n)$$


# Code
```
function containsDuplicate(nums: number[]): boolean {
    let dist = [];
    let status = false;

    for (let index = 0 ; index < nums.length ; index++){
        if (!dist[nums[index]]){
            dist[nums[index]] = true;
        }else{
            status = true
            break;
        }
    }

    return status;
};
```