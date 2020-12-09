---
title: "Leetcode 1614"
date: 2020-09-11T17:13:49+08:00
draft: true
---

>A string is a valid parentheses string (denoted VPS) if it meets one of the following:

* It is an empty string "", or a single character not equal to "(" or ")",
* It can be written as AB (A concatenated with B), where A and B are VPS's, or
* It can be written as (A), where A is a VPS.

>We can similarly define the nesting depth depth(S) of any VPS S as follows:
* depth("") = 0
* depth(C) = 0, where C is a string with a single character not equal to "(" or ")".
* depth(A + B) = max(depth(A), depth(B)), where A and B are VPS's.
* depth("(" + A + ")") = 1 + depth(A), where A is a VPS.

>For example, "", "()()", and "()(()())" are VPS's (with nesting depths 0, 1, and 2), and ")(" and "(()" are not VPS's.
>Given a VPS represented as string s, return the nesting depth of s.


## v0

```php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function maxDepth($s)
    {
        $tmp = 0;
        $n   = 0;
        for ($i = 0, $iMax = strlen($s); $i < $iMax; $i++) {
            if ($s[$i] === '(') {
                $n++;
            }

            if ($s[$i] === ')') {
                $tmp = $tmp > $n ? $tmp : $n;
                $n--;
            }
        }
        return $tmp;
    }
}
```
