---
title: "Leetcode 1389"
date: 2020-09-11T16:51:59+08:00
draft: true
---

>Given two arrays of integers `nums` and `index`. Your task is to create target array under the following rules:

* Initially target array is empty.
* From left to right read nums[i] and index[i], insert at index `index[i]` the value `nums[i]` in target array.
* Repeat the previous step until there are no elements to read in nums and index.

>Return the target array.

>It is guaranteed that the insertion operations will be valid.


##v0
原本想法是 分成兩塊

a + nums[i] + b

* a = list[0] ... list[i-1]
* b = list[i] ... list[count(list)]

所以往分割陣列查


```php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index) {
        $list = [];
        for ($i = 0 ;$i < count($nums) ; $i++){
            array_splice($list,$index[$i],0,[$nums[$i]]);
        }
        return $list;
    }
}
```

##ex0
結果發現有趣的用法

###offset
offset >= 0 

用法是取offset的個數

```php
$a = [0,1,2,3,4,5,6,7,8,9];
array_splice($a,2);
array(2) {
    [0]=>
  int(0)
  [1]=>
  int(1)
}
```

offset < 0 

用法是倒回來不取的個數

```php
$a = [0,1,2,3,4,5,6,7,8,9];
array_splice($a,2);
array(8) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(2)
  [3]=>
  int(3)
  [4]=>
  int(4)
  [5]=>
  int(5)
  [6]=>
  int(6)
  [7]=>
  int(7)
}

```

###length

length >= 0

是掠過幾個不取

```php
$a = [0,1,2,3,4,5,6,7,8,9];
array_splice($a,2,3);
array(7) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(5)
  [3]=>
  int(6)
  [4]=>
  int(7)
  [5]=>
  int(8)
  [6]=>
  int(9)
}
```

`2,3,4被略過了`

length < 0

是只取 前 offset + 後 |length|

```php
$a = [0,1,2,3,4,5,6,7,8,9];
array_splice($a,2,-3);
array(5) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(7)
  [3]=>
  int(8)
  [4]=>
  int(9)
}
```

###replacement

是插入在 offset 跟 length 中間的
	所以可以看到

```php
$a = [0,1,2,3,4,5,6,7,8,9];
array_splice($a,2,0,['a']);
array(11) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  string(1) "a"
  [3]=>
  int(2)
  [4]=>
  int(3)
  [5]=>
  int(4)
  [6]=>
  int(5)
  [7]=>
  int(6)
  [8]=>
  int(7)
  [9]=>
  int(8)
  [10]=>
  int(9)
}
```



