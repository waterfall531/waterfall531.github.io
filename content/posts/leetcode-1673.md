---
title: "Leetcode 1673 Widest Vertical Area Between Two Points Containing No Points"
date: 2020-12-14T17:28:44+08:00
draft: true
---

# 題目

>Given n points on a 2D plane where points[i] = [xi, yi], Return the widest vertical area between two points such that no points are inside the area.
>
>A vertical area is an area of fixed-width extending infinitely along the y-axis (i.e., infinite height). The widest vertical area is the one with the maximum width.
>
>Note that points on the edge of a vertical area are not considered included in the area.

## 簡而言之

就是兩點之間最大值

```php
class Solution2
{

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points)
    {
        sort($points);

        $max = 0;
        foreach ($points as $i => $iValue) {
            $max = max($max, $points[$i + 1][0] - $iValue[0]);
        }

        return $max;
    }
}
```

## v0 

耗時500ms 算是不太好的解
領先24%人

## v1

移除二維陣列之後

```php
class Solution
{

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points)
    {
        $list = [];
        foreach ($points as $point) {
            $list[] = $point[0];
        }
        sort($list);

        $max = 0;
        foreach ($list as $i => $iValue) {
            $max = max($max, $list[$i + 1] - $iValue);
        }

        return $max;
    }
}
```

耗時400ms 領先74％
