---
title: "Leetcode 1282 Group the People Given the Group Size They Belong To"
date: 2020-12-11T18:18:19+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["solve"]
---

>There are n people that are split into some unknown number of groups. Each person is labeled with a unique ID from 0 to n - 1.
>
>You are given an integer array groupSizes, where groupSizes[i] is the size of the group that person i is in. For example, if groupSizes[1] = 3, then person 1 must be in a group of size 3.
>
>Return a list of groups such that each person i is in a group of size groupSizes[i].
>
>Each person should appear in exactly one group, and every person must be in a group. If there are multiple answers, return any of them. It is guaranteed that there will be at least one valid solution for the given input.

## 題目

主要是說3,3,3,3,1,3

3=>這組最多3人
3只會跟3一組

```php
class Solution
{

    /**
     * @param Integer[] $groupSizes
     * @return Integer[][]
     */
    function groupThePeople($groupSizes)
    {
        $group    = [];
        $tmpGroup = [];
        foreach ($groupSizes as $index => $item) {
            $group[$item][] = $index;
            if (count($group[$item]) === $item) {
                $tmpGroup[] = $group[$item];
                unset($group[$item]);
            }
        }
        return array_values($tmpGroup);
    }
}
```

