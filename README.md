# twig-if-perfomance

1. Install dependencies in `./twig1` and `./twig2` folders
1. Run `php index.php` to test with Twig 1.0.
1. Change `require_once './twig1/…';` to `require_once './twig2/…';` and run `php index.php` to test with Twig 2.0.

My results:

```
// PHP 5.6 + Twig2
inline-version.twig:  0.30611205101013
include-version.twig: 0.0049479007720947

// PHP 7.1 + Twig1
inline-version.twig:  0.043853998184204
include-version.twig: 0.0012068748474121

// PHP 7.1 + Twig2
inline-version.twig:  0.044877052307129
include-version.twig: 0.0013439655303955
```