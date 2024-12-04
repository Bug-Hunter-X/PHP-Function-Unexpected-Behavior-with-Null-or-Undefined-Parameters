# PHP Function Unexpected Behavior with Null or Undefined Parameters

This repository demonstrates a common error in PHP functions: unexpected behavior when null or undefined parameters are passed.

The `foo` function attempts to handle cases where `a` or `b` are 0, but it does not explicitly handle null or undefined values, leading to unexpected results.

The `bug.php` file contains the buggy code. The `bugSolution.php` file provides a solution to handle null or undefined parameters.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the corrected behavior.

## Bug
The `foo` function doesn't handle null or undefined parameters, leading to `NaN` or other unexpected behavior.

## Solution
The `bugSolution.php` adds type checking and default value handling to address the issue. 