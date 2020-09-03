---
title: "Leetcode 1431"
date: 2020-09-03T17:30:44+08:00
draft: true
---

>Given the array *candies* and the integer *extraCandies*, where *candies[i]* represents the number of candies that the **ith** kid has.

>For each kid check if there is a way to distribute extraCandies among the kids such that he or she can have the **greatest** number of candies among them. Notice that multiple kids can have the **greatest** number of candies.


##v0
test 1000 times with 0.28ms

```php 
class Solution
{

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies)
    {
        $max    = max($candies);
        $result = [];
        foreach ($candies as $candy) {
            if ($candy + $extraCandies >= $max) {
                $result[] = true;
            } else {
                $result[] = false;
            }
        }
        return $result;
    }
}
```

##v1
test 1000 times with 0.257ms
true to 1
false to 2

```php
class Solution
{

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies)
    {
        $max    = max($candies);
        $result = [];
        foreach ($candies as $candy) {
            if ($candy + $extraCandies >= $max) {
                $result[] = 1;
            } else {
                $result[] = 0;
            }
        }
        return $result;
    }
}
```

##v2
test 1000times with 0.253ms
add ()

```php
class SolutionC
{

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies)
    {
        $max    = max($candies);
        $result = [];
        foreach ($candies as $candy) {
            if (($candy + $extraCandies) >= $max) {
                $result[] = 1;
            } else {
                $result[] = 0;
            }
        }
        return $result;
    }
}
```

|  version  |time |desc|
| ----------- | ----------- |----------- |
| v0      | 0.27ms       |origin|
| v1      | 0.257ms        |replace true and false|
| v2      | 0.253ms        | add ()|