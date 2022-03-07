---
title: "Interview 1126"
date: 2021-11-30T11:24:49+08:00
draft: true
tags: ["interview"]
series: ["2021"]
categories: ["interview"]
---

## 問題

    1.兩數相加
    2.數字反轉

## Two Sum

> 簡單的給一陣列
> 找出陣列中能加總到對應的 target 數值之 index

問題點

1. 兩數相同時取的 index

```php
function fineComper($list,$target){
    foreach($list as $index => $item){
        $tmpIndex = $index;
        $nextTarget = $target - $item;

        //find
        $tmpList = $list;
        unset($tmpList[$index]);
        $tmpIndex2 = array_search($nextTarget, $tmpList);
        if ($tmpIndex2 != false) {
            return [$index,$tmpIndex2];
        }
    }
}

$list = [2,7,11,15];
$target = 9;
print_r(fineComper($list,$target));

$list = [3,2,4];
$target = 6;
print_r(fineComper($list,$target));

$list = [3,3];
$target = 6;
print_r(fineComper($list,$target));
```

## Reverse Integer

> 簡單的給一數
> 反轉數字 補上千分位 補上正負

問題點

1. 負號
2. 千分位
3. 反轉

> 這邊一開始不知道有 number_format
> 卡在千分位一段時間
> 後面再思考負號/反轉
> 卡太久(_20min_)

```php
<?php
function numToStr($num){
    $tmp = number_format($int);
    $tmp = str_split($tmp);
    $tmp = array_reverse($tmp);
}

function getList($list){
    $transNum = [];
    foreach ($list as $ele){
        $transNum[] = numToStr($ele);
    }
    return $transNum;
}

$input = [123, 1234, -1234, 123456, 12345600, 123405600];
$ans = ["321", "4,321", "-4,321", "654,321", "654,321", "6,504,321"];

$tmp = -123456;
// $tmp = number_format($int);
// var_dump($tmp);
if ($int * -1){
    $status = true;
    $tmp *= -1;
}
$tmp = str_split($tmp);
// var_dump($tmp);
$tmp = array_reverse($tmp);
// var_dump($tmp);

if ($status){

}
```

## Alb /Nlb / GLB (L7 / L4 / L3+L4)

> 當下不會

1.  https://qazwsxedccsqzse.blogspot.com/2018/06/blog-post.html
2.  https://aws.amazon.com/tw/elasticloadbalancing/features/?nc=sn&loc=2&dn=1

-   ALB
    -   默認不保留 client ip
    -   反向代理
    -   DNS /IP
    -   Https
    -   功能更多
    -   可轉發相同 domain 到不同主機
        -   主機 1
            -   domain/1
        -   主機 2
            -   domain/2
-   NLB
    -   直連目標 ip
    -   DNS
    -   TCP
    -   速度更快
    -   只能切 domain 到不同主機
        -   主機 1
            -   domain1/
        -   主機 2
            -   domain2/
