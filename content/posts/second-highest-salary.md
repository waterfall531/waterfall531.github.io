---
title: "Second Highest Salary"
date: 2021-09-23T11:45:05+08:00
draft: true
tags: ["Mysql"]
series: ["Leetcode"]
categories: ["Base"]
---

>   Write an SQL query to report the second highest salary from the `Employee` table. If there is no second highest salary, the query should report `null`.
>
>   The query result format is in the following example.



## 錯誤解法

```mysql
SELECT
	SecondHighestSalary 
FROM
	(
	SELECT
		rank() over ( ORDER BY salary DESC ) AS rr,
		`salary` AS SecondHighestSalary 
	FROM
		( SELECT DISTINCT salary FROM Employee ) a UNION ALL
	SELECT NULL
		,
	NULL 
	FROM
		`Employee` 
	) a 
	LIMIT 1,
	1
```

1.   先去除重複排序
2.   排rank
3.   加null

```mysql
SELECT
	SecondHighestSalary 
FROM
	(
	SELECT
		`salary` AS SecondHighestSalary 
	FROM
		( SELECT DISTINCT salary FROM Employee ) a UNION ALL
	SELECT NULL 
	FROM
		`Employee` 
	) a 
	LIMIT 1,
	1
```

1.   去掉rank 後排序更快



```mysql
SELECT IFNULL
(
    (SELECT MAX(Salary)
    FROM Employee
    WHERE Salary < (SELECT MAX(Salary)
    FROM Employee)),
    NULL
) as SecondHighestSalary;
```

1.   最佳解
2.   選擇max 但 排除掉max
3.   (選擇去掉跑最快的最快那一個)

```mysql
SELECT
	(
	SELECT DISTINCT
		Salary 
	FROM
		Employee 
	ORDER BY
		Salary DESC 
	LIMIT 1 OFFSET 1 
	) AS SecondHighestSalary
```

1.   distinct後
2.   排序
3.   後limit 1 offset 1
4.   在包成select

