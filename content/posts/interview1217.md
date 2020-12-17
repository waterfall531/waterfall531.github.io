---
title: "interview_1217"
date: 2020-12-17T14:50:21+08:00
draft: true
---

# 面試

## 寫出純api

> 不需要介面 只需要收傳參

* userLogin 帳號/手機號 + 密碼 > token
* userRegister 帳號/手機號 + 密碼 + email > token
* userMessage token + 訊息
* userReply token + 訊息ID + 訊息

## 演算法

> 一維陣列 n元素 轉n維陣列 並設置值

```php
class Solution
{
    function toArray($list, $value = 'value')
    {
        $list = array_reverse($list);
        return $this->add($list, $value);
    }

    function add(&$list, $setValue = 'value')
    {
        if (empty($list)) {
            return $setValue;
        }

        $value          = array_pop($list);
        $output[$value] = $this->add($list, $setValue);
        return $output;
    }
}
```

### 後記

>當下怎樣想怎樣怪
>
>離開公司就有點想法
>
>回到公司就寫出來了....
