# twig-if-perfomance

1. Install dependencies in `./twig1` and `./twig2` folders
1. Run `php index.php` to test with Twig 1.0.
1. Change `require_once './twig1/…';` to `require_once './twig2/…';` and run `php index.php` to test with Twig 2.0.

My results:

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