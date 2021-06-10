---
title: "1315_Sum of Nodes with Even-Valued Grandparent"
date: 2021-01-06T17:59:39+08:00
draft: true
tags: ["algorithm"]
series: ["Leetcode"]
categories: ["solve"]
---

>Given a binary tree, return the sum of values of nodes with even-valued grandparent.  (A grandparent of a node is the parent of its parent, if it exists.)
>
>If there are no nodes with an even-valued grandparent, return 0.

## 翻譯

祖節點是偶數 則當前節點++

```php
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val   = $val;
        $this->left  = $left;
        $this->right = $right;
    }
}

class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public function sumEvenGrandparent($root)
    {
        $sum = 0;
        if (!is_null($root)) {
            if (!is_null($root->left)) {
                if ($root->val % 2 === 0) {
                    $sum += $this->deep2L($root->left);
                }

                $sum += $this->sumEvenGrandparent($root->left);
            }

            if (!is_null($root->right)) {
                if ($root->val % 2 === 0) {
                    $sum += $this->deep2L($root->right);
                }

                $sum += $this->sumEvenGrandparent($root->right);
            }
        }
        return $sum;
    }

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public function deep2L($root)
    {
        if (is_null($root)) {
            return 0;
        }
        if (is_null($root->left)) {
            $tmp = 0;
        } else {
            $tmp = $root->left->val;
        }

        if (is_null($root->right)) {
            $tmp += 0;
        } else {
            $tmp += $root->right->val;
        }

        return $tmp;
    }
}
```

## 檢討

該做法記憶體並不會吃比較少
且輪詢多次((()))

```php
class Solution
{
    private $sum = 0;
    
    public function sumEvenGrandparent(TreeNode $root): int
    {
        $this->printValues($root, null, null);
        
        return $this->sum;
    }
    
    private function printValues(TreeNode $root, ?TreeNode $parent, ?TreeNode $grandParentNode): void
    {
        if ($root) {            
            if ($grandParentNode && $grandParentNode->val % 2 === 0) {
                $this->sum += $root->val;
            }
            
            if ($root->left) {
                $this->printValues($root->left, $root, $parent);
            }

            if ($root->right) {
                $this->printValues($root->right, $root, $parent);
            }
        }
    }
}
```
