---
title: "Leetcode 1528"
date: 2020-09-03T17:00:16+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["solve"]
---

>Given a string *s* and an integer array *indices* of the same length.

>The string *s* will be shuffled such that the character at the *ith* position moves to *indices[i]* in the shuffled string.

>Return the shuffled string.

v1

```php
class Solution {
    function restoreString($s, $indices) {
        $list = [];
        foreach ($indices as $index=>$item){
            $list[$item] = $s[$index];
        }
        ksort($list);
        return join('',$list);
    }
}
```

v2

```php
class Solution {
    /**
     * @param String $s
     * @param Integer[] $indices
     * @return array
     */
    function restoreString($s, $indices) {
        $list = '';
        foreach ($indices as $index=>$item){
            $list[$item] = $s[$index];
        }
        return $list;
    }
}
```