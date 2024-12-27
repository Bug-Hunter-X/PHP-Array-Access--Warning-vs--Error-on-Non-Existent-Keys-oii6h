# PHP Array Access: Unexpected Behavior with Non-Existent Keys

This repository demonstrates a subtle difference between PHP and Javascript when accessing array elements using keys that do not exist.  In Javascript, this will silently create the key with a value of `undefined`. In PHP, this will produce a warning, but will not create the key.

The `bug.php` file shows the issue, while `bugSolution.php` presents a solution to handle the scenario gracefully.

## How to reproduce

1. Clone this repository
2. Run `bug.php` using a PHP interpreter.
3. Observe the warning message. The missing key will not be created.

## Solution

The `bugSolution.php` file demonstrates how to robustly handle this situation, utilizing `isset()` to check for the existence of a key before accessing it, or `array_key_exists()` for a more concise approach.
