---
title: "Leetcode 1476. Subrectangle Queries"
date: 2020-12-10T16:58:52+08:00
draft: true
---

>Implement the class SubrectangleQueries which receives a rows x cols rectangle as a matrix of integers in the constructor and supports two methods:

1. *updateSubrectangle*(int row1, int col1, int row2, int col2, int newValue)
    * Updates all values with newValue in the subrectangle whose upper left coordinate is (row1,col1) and bottom right coordinate is (row2,col2).
2. *getValue*(int row, int col)

    * Returns the current value of the coordinate (row,col) from the rectangle.

## v0

```php
class SubrectangleQueries
{
    private $list;

    /**
     * @param Integer[][] $rectangle
     */
    function __construct($rectangle)
    {
        $this->list = $rectangle;
    }

    /**
     * @param Integer $row1
     * @param Integer $col1
     * @param Integer $row2
     * @param Integer $col2
     * @param Integer $newValue
     * @return NULL
     */
    function updateSubrectangle($row1, $col1, $row2, $col2, $newValue)
    {
        for ($i = $row1; $i <= $row2; $i++) {
            for ($j = $col1; $j <= $col2; $j++) {
                $this->list[$i][$j] = $newValue;
            }
        }
    }

    /**
     * @param Integer $row
     * @param Integer $col
     * @return Integer
     */
    function getValue($row, $col)
    {
        return $this->list[$row][$col];
    }

    function getList()
    {
        var_dump($this->list);
        echo '</br>';
    }
}
```

## LeetCode

```php
class SubrectangleQueries
{
    private $list;
    private $history;

    /**
     * @param Integer[][] $rectangle
     */
    function __construct($rectangle)
    {
        $this->list = $rectangle;
    }

    /**
     * @param Integer $row1
     * @param Integer $col1
     * @param Integer $row2
     * @param Integer $col2
     * @param Integer $newValue
     * @return NULL
     */
    function updateSubrectangle($row1, $col1, $row2, $col2, $newValue)
    {
        $this->history[] = func_get_args();
    }

    /**
     * @param Integer $row
     * @param Integer $col
     * @return Integer
     */
    function getValue($row, $col)
    {
        $a = array_reverse($this->history);
        foreach ($a as $value) {
            if ($value[0] <= $row &&
                $value[2] >= $row &&
                $value[1] <= $col &&
                $value[3] >= $col) {
                return $value[4];
            }
        }

        return $this->list[$row][$col];
    }
}
```

## 後記

* leetcode版的優點在於
getValue的次數較少時
才能發揮優勢
* 反之則是v0的較快