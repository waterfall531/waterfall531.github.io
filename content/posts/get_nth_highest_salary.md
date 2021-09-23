---
title: "Get_nth_highest_salary"
date: 2021-09-23T17:50:18+08:00
draft: true
tags: ["dba"]
series: ["mysql"]
categories: ["base"]
---

#  177. Nth Highest Salary

>   Write an SQL query to report the `nth` highest salary from the `Employee` table. If there is no `nth` highest salary, the query should report `null`.
>
>   The query result format is in the following example.



```mysql
CREATE FUNCTION getNthHighestSalary ( N INT ) RETURNS INT BEGIN
	DECLARE
		var INT;
	
	SET var = N - 1;
	RETURN (
		SELECT
			(
			SELECT DISTINCT
				Salary 
			FROM
				Employee 
			ORDER BY
				Salary DESC 
				LIMIT 1 OFFSET var 
			) AS SecondHighestSalary 
		);
	
END;
SELECT
	getNthHighestSalary ( 2 );
```

1.   由前一題改變而來
2.   OFFSET 改 var
