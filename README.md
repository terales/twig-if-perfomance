# Performance difference between inline and included operators inside `if` branches

[Response]((https://github.com/twigphp/Twig/issues/2576#issuecomment-340398831)) from [@stof](https://github.com/stof), one of the Twig contributors:
> your test is unfair: you don't compare rendering time. You compare the compile+rendering time. And your test for `include-version.twig` does not recompile the `inline-version.twig` template as it is already compiled by the previous rendering. Change the order of both cases, and you will see the opposite number.
The only thing that your benchmark is showing is that compiling templates takes more time than reusing the already compiled one (which is something we know since ages, which is why Twig is able to store the compiled template in a persistent cache).

Checked it and that's true, no such issue there.

## Experiment data

1. Install dependencies in `./twig1` and `./twig2` folders
1. Run `php index.php` to test with Twig 1.0.
1. Change `require_once './twig1/…';` to `require_once './twig2/…';` and run `php index.php` to test with Twig 2.0.

My results in seconds:

```
// PHP 5.6 + Twig2
inline-version.twig:  0.2901
include-version.twig: 0.0051

// PHP 7.1 + Twig1
inline-version.twig:  0.0432
include-version.twig: 0.0012

// PHP 7.1 + Twig2
inline-version.twig:  0.0391
include-version.twig: 0.0011
```