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

## symfony/console

Used to create console applications. You could use it
completely standalone and just instantiate a new `Application`,
or use it alongside the runtime component and return
a closure from `bin/console`, or use `symfony/http-kernel`
and pass it to the `Application` (or some custom implementation
of the `HttpKernelInterface`) or use the whole
`symfony/framework-bundle` which comes packed with the
`HttpKernel\Kernel` as well as other things you would want
like dependency injection, automatic command registration
via tags, and environment configuration.

## symfony/framework-bundle

Provides the glue between many Symfony components and defines
how they work together. Rather than using these components
directly, you typically use them as part of the bundle -
hence why they are subsumed under this entry.

When using the `framework-bundle`, the `HttpKernel\Kernel`
paired with the framework bundle's `MicroKernelTrait`,
loads all configuration based on convention. E.g.,
routes from `config/routes.php`, registered bundles
from `config/bundles.php`, service / dependency 
injection from `config/services.php` (you typically
define closures in those config files that get called
with the respective configuration object). This behavior
can be overwritten by overriding the respective methods
in your `Kernel` implementation.

Part of the `framework-bundle` are
- symfony/cache: Provides caching services to optimize 
application performance, including support for cache pools,
adapters, and various storage backends.
- symfony/config: Handles the loading and management of
configuration files (e.g., YAML, XML, PHP), making it easier
to define and manage configuration across the app.
- symfony/dependency-injection: Manages the service container,
responsible for dependency injection, and ensuring that
services are instantiated and injected automatically
throughout the application.
- symfony/deprecation-contracts: Defines the contracts and
interfaces for deprecating code, helping developers manage
deprecated features and warnings.
- symfony/error-handler: Provides tools for catching, handling,
and displaying errors and exceptions in a user-friendly way,
enhancing the error handling experience.
- symfony/event-dispatcher: Manages the event-driven
architecture of the application, allowing you to dispatch and
listen to events throughout the Symfony lifecycle.
- symfony/filesystem: A utility component for managing and
interacting with the file system, offering methods to handle
file manipulation like renaming, removing, and checking existence.
- symfony/finder: A utility for searching and finding files
and directories based on various criteria, making it easier
to handle file system operations.
- symfony/http-foundation: Defines the core HTTP request and
response objects (such as Request, Response), central to the
web flow in a Symfony application.
- symfony/http-kernel: Responsible for managing the HTTP
request/response lifecycle, including handling middleware,
routing, and controller execution.
- symfony/polyfill-*: Provides backward compatibility for
features introduced in newer PHP versions by polyfilling missing
functions and classes in older PHP versions.
- symfony/routing: Provides routing functionality, which matches
incoming requests to controllers or other response handlers
based on URL patterns and rules.