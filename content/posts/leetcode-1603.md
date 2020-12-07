---
title: "Leetcode 1603"
date: 2020-12-07T17:35:25+08:00
draft: true
---

>Design a parking system for a parking lot. The parking lot has three kinds of parking spaces: big, medium, and small, with a fixed number of slots for each size.

Implement the *ParkingSystem* class:
* *ParkingSystem(int big, int medium, int small)* Initializes object of the *ParkingSystem* class. The number of slots for each parking space are given as part of the constructor.
* *bool addCar(int carType)* Checks whether there is a parking space of *carType* for the car that wants to get into the parking lot. *carType* can be of three kinds: big, medium, or small, which are represented by *1*, *2*, and *3* respectively. *A car can only park in a parking space of its* carType. If there is no space available, return false, else park the car in that size space and return true.

## v0

```php
class ParkingSystem
{
    private $maxCount;

    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small)
    {
        $this->maxCount = [$big, $medium, $small];
    }

    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType)
    {
        if ($this->maxCount[$carType - 1] > 0) {
            $this->maxCount[$carType - 1]--;
            return true;
        }
        return false;
    }
}
```

## V0.5
```php
class ParkingSystem
{
    private $maxCount;

    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small)
    {
        $this->maxCount = [$big, $medium, $small];
    }

    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType)
    {
        return $this->maxCount[--$carType]-- > 0
    }
}
```

1. return 可以略過if
2. \$carType - 1 可以優化成--$carType
