# Symfony boilerplate

This repository aims to install Symfony components one by
one in order to try to understand and document their
individual roles in the whole framework - and incidentally,
providing boilerplate code to copy and paste.

## symfony/runtime

Changes and decouples how the application is bootstrapped.
I.e., it comes alongside a composer plugin that creates
a `runtime_autoload.php` which you will then use instead of
the usual `autoload.php`. This then enables you to return a
closure from your `bin/console` or `public/index.php` file,
rather than creating your own `Application` and `->run()`ning
it. This works because `runtime_autoload.php` uses the
`SymfonyRuntime` class to first load a resolver and then
select and run an appropriate runner according to the type
of object returned by your closure (such as an HTTP kernel
or a console application).

Based on this, it does not really make sense to use it on
its own.