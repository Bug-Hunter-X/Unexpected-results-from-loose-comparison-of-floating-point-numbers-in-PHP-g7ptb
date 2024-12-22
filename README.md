# PHP Floating-Point Comparison Bug

This repository demonstrates a common issue in PHP related to loose comparison (==) of floating-point numbers. Due to the way floating-point numbers are represented in binary, slight precision errors can occur, leading to unexpected results when comparing values that appear equal.

The `bug.php` file contains a function that illustrates this problem. The `bugSolution.php` file provides a solution using a tolerance-based comparison to account for these precision issues.

## How to reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output (false).

## Solution

The solution involves using a tolerance value (epsilon) to compare floating-point numbers. The `bugSolution.php` file demonstrates this technique.