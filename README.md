# HHVM Tests

This project isolates test cases that pass in php, but fail on HHVM.

## Can't define multiple anonymous functions within separate anonymous functions.

Consider the following:

1. I have two php files.
2. Each file returns an anonymous function.
3. Each of those anonymous functions defines and uses its own enclosed anonymous function.
4. If I use each of those files on their own then everything works fine.
5. If I use those files together then all enclosed anonymous functions end up calling the first defined anonymous function.
