---
title: "Interview0508"
date: 2021-05-08T12:03:59+08:00
draft: true
tags: ["interview"]
series: ["2021"]
categories: ["0508"]
---

## 問題

    1.[static](https://jaceju.net/php-static/)
    2.Mongo vs Mysql
    3.設計模式(單例)

### Static

static 會把變數存起來

```php
function getCount()
{
    static $count = 0;
    $count ++;
    return $count;
}

for ($i = 0; $i < 10; $i ++) {
   echo getCount(), "\n";
}
/* output:
1
2
3
4
5
6
7
8
9
10
*/
```

ex

```php
function fibV2($n)
{
    static $result = array();
    if (!isset($result[$n])) {
        if ($n <= 2) {
            $result[$n] = 1;
        } else {
            $result[$n] = fibV2($n - 2) + fibV2($n - 1);
        }
    }
    return $result[$n];
}
```

$result 會存所以不會遞迴下去太多次 O(n)?

### Mongo

    格式統一性
        加欄位時遇到大表 mysql GG

### 設計模式(單例)

    永遠回傳一個同一個實例
