<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.2.10 on 2016-01-21.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class App extends \Illuminate\Support\Facades\App{
        
        /**
         * Get the path to the application "app" directory.
         *
         * @return string 
         * @static 
         */
        public static function path(){
            return \App\Application::path();
        }
        
        /**
         * Get the path to the cached "compiled.php" file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedCompilePath(){
            return \App\Application::getCachedCompilePath();
        }
        
        /**
         * Get the path to the cached services.php file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedServicesPath(){
            return \App\Application::getCachedServicesPath();
        }
        
        /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */
        public static function version(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::version();
        }
        
        /**
         * Run the given array of bootstrap classes.
         *
         * @param array $bootstrappers
         * @return void 
         * @static 
         */
        public static function bootstrapWith($bootstrappers){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::bootstrapWith($bootstrappers);
        }
        
        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function afterLoadingEnvironment($callback){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::afterLoadingEnvironment($callback);
        }
        
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function beforeBootstrapping($bootstrapper, $callback){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::beforeBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function afterBootstrapping($bootstrapper, $callback){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::afterBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */
        public static function hasBeenBootstrapped(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::hasBeenBootstrapped();
        }
        
        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return $this 
         * @static 
         */
        public static function setBasePath($basePath){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::setBasePath($basePath);
        }
        
        /**
         * Get the base path of the Laravel installation.
         *
         * @return string 
         * @static 
         */
        public static function basePath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::basePath();
        }
        
        /**
         * Get the path to the application configuration files.
         *
         * @return string 
         * @static 
         */
        public static function configPath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::configPath();
        }
        
        /**
         * Get the path to the database directory.
         *
         * @return string 
         * @static 
         */
        public static function databasePath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::databasePath();
        }
        
        /**
         * Set the database directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useDatabasePath($path){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::useDatabasePath($path);
        }
        
        /**
         * Get the path to the language files.
         *
         * @return string 
         * @static 
         */
        public static function langPath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::langPath();
        }
        
        /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */
        public static function publicPath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::publicPath();
        }
        
        /**
         * Get the path to the storage directory.
         *
         * @return string 
         * @static 
         */
        public static function storagePath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::storagePath();
        }
        
        /**
         * Set the storage directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useStoragePath($path){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::useStoragePath($path);
        }
        
        /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */
        public static function environmentPath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::environmentPath();
        }
        
        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return $this 
         * @static 
         */
        public static function useEnvironmentPath($path){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::useEnvironmentPath($path);
        }
        
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return $this 
         * @static 
         */
        public static function loadEnvironmentFrom($file){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::loadEnvironmentFrom($file);
        }
        
        /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */
        public static function environmentFile(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::environmentFile();
        }
        
        /**
         * Get or check the current application environment.
         *
         * @param mixed
         * @return string 
         * @static 
         */
        public static function environment(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::environment();
        }
        
        /**
         * Determine if application is in local environment.
         *
         * @return bool 
         * @static 
         */
        public static function isLocal(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::isLocal();
        }
        
        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string 
         * @static 
         */
        public static function detectEnvironment($callback){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::detectEnvironment($callback);
        }
        
        /**
         * Determine if we are running in the console.
         *
         * @return bool 
         * @static 
         */
        public static function runningInConsole(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::runningInConsole();
        }
        
        /**
         * Determine if we are running unit tests.
         *
         * @return bool 
         * @static 
         */
        public static function runningUnitTests(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::runningUnitTests();
        }
        
        /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */
        public static function registerConfiguredProviders(){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::registerConfiguredProviders();
        }
        
        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param array $options
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */
        public static function register($provider, $options = array(), $force = false){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::register($provider, $options, $force);
        }
        
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */
        public static function getProvider($provider){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::getProvider($provider);
        }
        
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */
        public static function resolveProviderClass($provider){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::resolveProviderClass($provider);
        }
        
        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */
        public static function loadDeferredProviders(){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::loadDeferredProviders();
        }
        
        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void 
         * @static 
         */
        public static function loadDeferredProvider($service){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::loadDeferredProvider($service);
        }
        
        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string $service
         * @return void 
         * @static 
         */
        public static function registerDeferredProvider($provider, $service = null){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * Resolve the given type from the container.
         * 
         * (Overriding Container::make)
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */
        public static function make($abstract, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::make($abstract, $parameters);
        }
        
        /**
         * Determine if the given abstract type has been bound.
         * 
         * (Overriding Container::bound)
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function bound($abstract){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::bound($abstract);
        }
        
        /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */
        public static function isBooted(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::isBooted();
        }
        
        /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */
        public static function boot(){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::boot();
        }
        
        /**
         * Register a new boot listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function booting($callback){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::booting($callback);
        }
        
        /**
         * Register a new "booted" listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function booted($callback){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::booted($callback);
        }
        
        /**
         * {@inheritdoc}
         *
         * @static 
         */
        public static function handle($request, $type = 1, $catch = true){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::handle($request, $type, $catch);
        }
        
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */
        public static function shouldSkipMiddleware(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::shouldSkipMiddleware();
        }
        
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */
        public static function configurationIsCached(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::configurationIsCached();
        }
        
        /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedConfigPath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::getCachedConfigPath();
        }
        
        /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */
        public static function routesAreCached(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::routesAreCached();
        }
        
        /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */
        public static function getCachedRoutesPath(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::getCachedRoutesPath();
        }
        
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */
        public static function isDownForMaintenance(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::isDownForMaintenance();
        }
        
        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @static 
         */
        public static function abort($code, $message = '', $headers = array()){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::abort($code, $message, $headers);
        }
        
        /**
         * Register a terminating callback with the application.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function terminating($callback){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::terminating($callback);
        }
        
        /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */
        public static function terminate(){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::terminate();
        }
        
        /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */
        public static function getLoadedProviders(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::getLoadedProviders();
        }
        
        /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */
        public static function getDeferredServices(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::getDeferredServices();
        }
        
        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */
        public static function setDeferredServices($services){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::setDeferredServices($services);
        }
        
        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */
        public static function addDeferredServices($services){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::addDeferredServices($services);
        }
        
        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool 
         * @static 
         */
        public static function isDeferredService($service){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::isDeferredService($service);
        }
        
        /**
         * Define a callback to be used to configure Monolog.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */
        public static function configureMonologUsing($callback){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::configureMonologUsing($callback);
        }
        
        /**
         * Determine if the application has a custom Monolog configurator.
         *
         * @return bool 
         * @static 
         */
        public static function hasMonologConfigurator(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::hasMonologConfigurator();
        }
        
        /**
         * Get the custom Monolog configurator for the application.
         *
         * @return callable 
         * @static 
         */
        public static function getMonologConfigurator(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::getMonologConfigurator();
        }
        
        /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::getLocale();
        }
        
        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::setLocale($locale);
        }
        
        /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */
        public static function registerCoreContainerAliases(){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::registerCoreContainerAliases();
        }
        
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            //Method inherited from \Illuminate\Foundation\Application            
            \App\Application::flush();
        }
        
        /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function getNamespace(){
            //Method inherited from \Illuminate\Foundation\Application            
            return \App\Application::getNamespace();
        }
        
        /**
         * Define a contextual binding.
         *
         * @param string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */
        public static function when($concrete){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::when($concrete);
        }
        
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function resolved($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::resolved($abstract);
        }
        
        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function isAlias($name){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::isAlias($name);
        }
        
        /**
         * Register a binding with the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */
        public static function bind($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */
        public static function addContextualBinding($concrete, $abstract, $implementation){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */
        public static function bindIf($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * Register a shared binding in the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */
        public static function singleton($abstract, $concrete = null){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::singleton($abstract, $concrete);
        }
        
        /**
         * Wrap a Closure such that it is shared.
         *
         * @param \Closure $closure
         * @return \Closure 
         * @static 
         */
        public static function share($closure){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::share($closure);
        }
        
        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function extend($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::extend($abstract, $closure);
        }
        
        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return void 
         * @static 
         */
        public static function instance($abstract, $instance){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::instance($abstract, $instance);
        }
        
        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void 
         * @static 
         */
        public static function tag($abstracts, $tags){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::tag($abstracts, $tags);
        }
        
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return array 
         * @static 
         */
        public static function tagged($tag){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::tagged($tag);
        }
        
        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void 
         * @static 
         */
        public static function alias($abstract, $alias){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::alias($abstract, $alias);
        }
        
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function rebinding($abstract, $callback){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::rebinding($abstract, $callback);
        }
        
        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */
        public static function refresh($abstract, $target, $method){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure 
         * @static 
         */
        public static function wrap($callback, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::wrap($callback, $parameters);
        }
        
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @static 
         */
        public static function call($callback, $parameters = array(), $defaultMethod = null){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param string $concrete
         * @param array $parameters
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */
        public static function build($concrete, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::build($concrete, $parameters);
        }
        
        /**
         * Register a new resolving callback.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */
        public static function resolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::resolving($abstract, $callback);
        }
        
        /**
         * Register a new after resolving callback for all types.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */
        public static function afterResolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */
        public static function isShared($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::isShared($abstract);
        }
        
        /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */
        public static function getBindings(){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::getBindings();
        }
        
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */
        public static function forgetInstance($abstract){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::forgetInstance($abstract);
        }
        
        /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */
        public static function forgetInstances(){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::forgetInstances();
        }
        
        /**
         * Set the globally available instance of the container.
         *
         * @return static 
         * @static 
         */
        public static function getInstance(){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::getInstance();
        }
        
        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setInstance($container){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::setInstance($container);
        }
        
        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::offsetExists($key);
        }
        
        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            //Method inherited from \Illuminate\Container\Container            
            return \App\Application::offsetGet($key);
        }
        
        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::offsetSet($key, $value);
        }
        
        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            //Method inherited from \Illuminate\Container\Container            
            \App\Application::offsetUnset($key);
        }
        
    }


    class Artisan extends \Illuminate\Support\Facades\Artisan{
        
        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         * @return int 
         * @static 
         */
        public static function handle($input, $output = null){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::handle($input, $output);
        }
        
        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void 
         * @static 
         */
        public static function terminate($input, $status){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::terminate($input, $status);
        }
        
        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @return int 
         * @static 
         */
        public static function call($command, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::call($command, $parameters);
        }
        
        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return void 
         * @static 
         */
        public static function queue($command, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::queue($command, $parameters);
        }
        
        /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::all();
        }
        
        /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */
        public static function output(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::output();
        }
        
        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void 
         * @static 
         */
        public static function bootstrap(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::bootstrap();
        }
        
    }


    class Blade extends \Illuminate\Support\Facades\Blade{
        
        /**
         * Compile the view at the given path.
         *
         * @param string $path
         * @return void 
         * @static 
         */
        public static function compile($path = null){
            \Illuminate\View\Compilers\BladeCompiler::compile($path);
        }
        
        /**
         * Get the path currently being compiled.
         *
         * @return string 
         * @static 
         */
        public static function getPath(){
            return \Illuminate\View\Compilers\BladeCompiler::getPath();
        }
        
        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @return void 
         * @static 
         */
        public static function setPath($path){
            \Illuminate\View\Compilers\BladeCompiler::setPath($path);
        }
        
        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function compileString($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
        }
        
        /**
         * Compile the default values for the echo statement.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function compileEchoDefaults($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
        }
        
        /**
         * Get the extensions used by the compiler.
         *
         * @return array 
         * @static 
         */
        public static function getExtensions(){
            return \Illuminate\View\Compilers\BladeCompiler::getExtensions();
        }
        
        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         * @return void 
         * @static 
         */
        public static function extend($compiler){
            \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
        }
        
        /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param callable $handler
         * @return void 
         * @static 
         */
        public static function directive($name, $handler){
            \Illuminate\View\Compilers\BladeCompiler::directive($name, $handler);
        }
        
        /**
         * Get the list of custom directives.
         *
         * @return array 
         * @static 
         */
        public static function getCustomDirectives(){
            return \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives();
        }
        
        /**
         * Gets the raw tags used by the compiler.
         *
         * @return array 
         * @static 
         */
        public static function getRawTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getRawTags();
        }
        
        /**
         * Sets the raw tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @return void 
         * @static 
         */
        public static function setRawTags($openTag, $closeTag){
            \Illuminate\View\Compilers\BladeCompiler::setRawTags($openTag, $closeTag);
        }
        
        /**
         * Sets the content tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @param bool $escaped
         * @return void 
         * @static 
         */
        public static function setContentTags($openTag, $closeTag, $escaped = false){
            \Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
        }
        
        /**
         * Sets the escaped content tags used for the compiler.
         *
         * @param string $openTag
         * @param string $closeTag
         * @return void 
         * @static 
         */
        public static function setEscapedContentTags($openTag, $closeTag){
            \Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
        }
        
        /**
         * Gets the content tags used for the compiler.
         *
         * @return string 
         * @static 
         */
        public static function getContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getContentTags();
        }
        
        /**
         * Gets the escaped content tags used for the compiler.
         *
         * @return string 
         * @static 
         */
        public static function getEscapedContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getEscapedContentTags();
        }
        
        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @return void 
         * @static 
         */
        public static function setEchoFormat($format){
            \Illuminate\View\Compilers\BladeCompiler::setEchoFormat($format);
        }
        
        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function getCompiledPath($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }
        
        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function isExpired($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }
        
    }


    class Cache extends \Illuminate\Support\Facades\Cache{
        
        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return mixed 
         * @static 
         */
        public static function store($name = null){
            return \Illuminate\Cache\CacheManager::store($name);
        }
        
        /**
         * Get a cache driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */
        public static function driver($driver = null){
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */
        public static function repository($store){
            return \Illuminate\Cache\CacheManager::repository($store);
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($events){
            \Illuminate\Cache\Repository::setEventDispatcher($events);
        }
        
        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Cache\Repository::has($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Cache\Repository::get($key, $default);
        }
        
        /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */
        public static function many($keys){
            return \Illuminate\Cache\Repository::many($keys);
        }
        
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
        
        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return void 
         * @static 
         */
        public static function put($key, $value, $minutes = null){
            \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }
        
        /**
         * Store multiple items in the cache for a given number of minutes.
         *
         * @param array $values
         * @param int $minutes
         * @return void 
         * @static 
         */
        public static function putMany($values, $minutes){
            \Illuminate\Cache\Repository::putMany($values, $minutes);
        }
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return bool 
         * @static 
         */
        public static function add($key, $value, $minutes){
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }
        
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function forever($key, $value){
            \Illuminate\Cache\Repository::forever($key, $value);
        }
        
        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTime|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function remember($key, $minutes, $callback){
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function sear($key, $callback){
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function rememberForever($key, $callback){
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function forget($key){
            return \Illuminate\Cache\Repository::forget($key);
        }
        
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param string $name
         * @return \Illuminate\Cache\TaggedCache 
         * @deprecated since version 5.1. Use tags instead.
         * @static 
         */
        public static function section($name){
            return \Illuminate\Cache\Repository::section($name);
        }
        
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function tags($names){
            return \Illuminate\Cache\Repository::tags($names);
        }
        
        /**
         * Get the default cache time.
         *
         * @return int 
         * @static 
         */
        public static function getDefaultCacheTime(){
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
        
        /**
         * Set the default cache time in minutes.
         *
         * @param int $minutes
         * @return void 
         * @static 
         */
        public static function setDefaultCacheTime($minutes){
            \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */
        public static function getStore(){
            return \Illuminate\Cache\Repository::getStore();
        }
        
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
        
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            \Illuminate\Cache\Repository::offsetUnset($key);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Cache\Repository::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
        
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int 
         * @static 
         */
        public static function increment($key, $value = 1){
            return \Illuminate\Cache\FileStore::increment($key, $value);
        }
        
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int 
         * @static 
         */
        public static function decrement($key, $value = 1){
            return \Illuminate\Cache\FileStore::decrement($key, $value);
        }
        
        /**
         * Remove all items from the cache.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Cache\FileStore::flush();
        }
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */
        public static function getFilesystem(){
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */
        public static function getDirectory(){
            return \Illuminate\Cache\FileStore::getDirectory();
        }
        
        /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */
        public static function getPrefix(){
            return \Illuminate\Cache\FileStore::getPrefix();
        }
        
    }


    class Config extends \Illuminate\Support\Facades\Config{
        
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Config\Repository::has($key);
        }
        
        /**
         * Get the specified configuration value.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Config\Repository::get($key, $default);
        }
        
        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function set($key, $value = null){
            \Illuminate\Config\Repository::set($key, $value);
        }
        
        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function prepend($key, $value){
            \Illuminate\Config\Repository::prepend($key, $value);
        }
        
        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function push($key, $value){
            \Illuminate\Config\Repository::push($key, $value);
        }
        
        /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            return \Illuminate\Config\Repository::all();
        }
        
        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Config\Repository::offsetExists($key);
        }
        
        /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Config\Repository::offsetGet($key);
        }
        
        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            \Illuminate\Config\Repository::offsetSet($key, $value);
        }
        
        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            \Illuminate\Config\Repository::offsetUnset($key);
        }
        
    }


    class Cookie extends \Illuminate\Support\Facades\Cookie{
        
        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string $path
         * @param string $domain
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */
        public static function forget($name, $path = null, $domain = null){
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
        
        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasQueued($key){
            return \Illuminate\Cookie\CookieJar::hasQueued($key);
        }
        
        /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */
        public static function queued($key, $default = null){
            return \Illuminate\Cookie\CookieJar::queued($key, $default);
        }
        
        /**
         * Queue a cookie to send with the next response.
         *
         * @param mixed
         * @return void 
         * @static 
         */
        public static function queue(){
            \Illuminate\Cookie\CookieJar::queue();
        }
        
        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function unqueue($name){
            \Illuminate\Cookie\CookieJar::unqueue($name);
        }
        
        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @return $this 
         * @static 
         */
        public static function setDefaultPathAndDomain($path, $domain, $secure = false){
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain, $secure);
        }
        
        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return array 
         * @static 
         */
        public static function getQueuedCookies(){
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
        
    }


    class DB extends \Illuminate\Support\Facades\DB{
        
        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function purge($name = null){
            \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function disconnect($name = null){
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function reconnect($name = null){
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultConnection(){
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultConnection($name){
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */
        public static function supportedDrivers(){
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */
        public static function availableDrivers(){
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */
        public static function extend($name, $resolver){
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */
        public static function getConnections(){
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
    }


    class Event extends \Illuminate\Support\Facades\Event{
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
         * @param mixed $listener
         * @param int $priority
         * @return void 
         * @static 
         */
        public static function listen($events, $listener, $priority = 0){
            \Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
        }
        
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */
        public static function hasListeners($eventName){
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void 
         * @static 
         */
        public static function push($event, $payload = array()){
            \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */
        public static function subscribe($subscriber){
            \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param array $payload
         * @return mixed 
         * @static 
         */
        public static function until($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */
        public static function flush($event){
            \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * Get the event that is currently firing.
         *
         * @return string 
         * @static 
         */
        public static function firing(){
            return \Illuminate\Events\Dispatcher::firing();
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */
        public static function fire($event, $payload = array(), $halt = false){
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */
        public static function getListeners($eventName){
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param mixed $listener
         * @return mixed 
         * @static 
         */
        public static function makeListener($listener){
            return \Illuminate\Events\Dispatcher::makeListener($listener);
        }
        
        /**
         * Create a class based listener using the IoC container.
         *
         * @param mixed $listener
         * @return \Closure 
         * @static 
         */
        public static function createClassListener($listener){
            return \Illuminate\Events\Dispatcher::createClassListener($listener);
        }
        
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */
        public static function forget($event){
            \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */
        public static function forgetPushed(){
            \Illuminate\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return $this 
         * @static 
         */
        public static function setQueueResolver($resolver){
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
        
    }


    class File extends \Illuminate\Support\Facades\File{
        
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function exists($path){
            return \Illuminate\Filesystem\Filesystem::exists($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */
        public static function get($path){
            return \Illuminate\Filesystem\Filesystem::get($path);
        }
        
        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */
        public static function getRequire($path){
            return \Illuminate\Filesystem\Filesystem::getRequire($path);
        }
        
        /**
         * Require the given file once.
         *
         * @param string $file
         * @return mixed 
         * @static 
         */
        public static function requireOnce($file){
            return \Illuminate\Filesystem\Filesystem::requireOnce($file);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int 
         * @static 
         */
        public static function put($path, $contents, $lock = false){
            return \Illuminate\Filesystem\Filesystem::put($path, $contents, $lock);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */
        public static function prepend($path, $data){
            return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */
        public static function append($path, $data){
            return \Illuminate\Filesystem\Filesystem::append($path, $data);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */
        public static function delete($paths){
            return \Illuminate\Filesystem\Filesystem::delete($paths);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */
        public static function move($path, $target){
            return \Illuminate\Filesystem\Filesystem::move($path, $target);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */
        public static function copy($path, $target){
            return \Illuminate\Filesystem\Filesystem::copy($path, $target);
        }
        
        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function name($path){
            return \Illuminate\Filesystem\Filesystem::name($path);
        }
        
        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function extension($path){
            return \Illuminate\Filesystem\Filesystem::extension($path);
        }
        
        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string 
         * @static 
         */
        public static function type($path){
            return \Illuminate\Filesystem\Filesystem::type($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */
        public static function mimeType($path){
            return \Illuminate\Filesystem\Filesystem::mimeType($path);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */
        public static function size($path){
            return \Illuminate\Filesystem\Filesystem::size($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */
        public static function lastModified($path){
            return \Illuminate\Filesystem\Filesystem::lastModified($path);
        }
        
        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */
        public static function isDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
        }
        
        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */
        public static function isWritable($path){
            return \Illuminate\Filesystem\Filesystem::isWritable($path);
        }
        
        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool 
         * @static 
         */
        public static function isFile($file){
            return \Illuminate\Filesystem\Filesystem::isFile($file);
        }
        
        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array 
         * @static 
         */
        public static function glob($pattern, $flags = 0){
            return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */
        public static function files($directory){
            return \Illuminate\Filesystem\Filesystem::files($directory);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @return array 
         * @static 
         */
        public static function allFiles($directory){
            return \Illuminate\Filesystem\Filesystem::allFiles($directory);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */
        public static function directories($directory){
            return \Illuminate\Filesystem\Filesystem::directories($directory);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool 
         * @static 
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false){
            return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
        
        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int $options
         * @return bool 
         * @static 
         */
        public static function copyDirectory($directory, $destination, $options = null){
            return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
        
        /**
         * Recursively delete a directory.
         * 
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool 
         * @static 
         */
        public static function deleteDirectory($directory, $preserve = false){
            return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
        
        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */
        public static function cleanDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }
        
    }


    class Hash extends \Illuminate\Support\Facades\Hash{
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function make($value, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }
        
        /**
         * Set the default password work factor.
         *
         * @param int $rounds
         * @return $this 
         * @static 
         */
        public static function setRounds($rounds){
            return \Illuminate\Hashing\BcryptHasher::setRounds($rounds);
        }
        
    }


    class Input extends \Illuminate\Support\Facades\Input{
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */
        public static function capture(){
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * Return the Request instance.
         *
         * @return $this 
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * Get the current encoded path info for the request.
         *
         * @return string 
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */
        public static function pjax(){
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * Returns the client IP address.
         *
         * @return string 
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * Returns the client IP addresses.
         *
         * @return array 
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * Get a subset of the items from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\File\UploadedFile|array|null 
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * Flash the input for the current request to the session.
         *
         * @param string $filter
         * @param array $keys
         * @return void 
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function flashOnly($keys){
            \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function flashExcept($keys){
            \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Http\Request::flush();
        }
        
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return void 
         * @static 
         */
        public static function merge($input){
            \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return void 
         * @static 
         */
        public static function replace($input){
            \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */
        public static function matchesType($actual, $type){
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */
        public static function accepts($contentTypes){
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */
        public static function prefers($contentTypes){
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */
        public static function acceptsJson(){
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */
        public static function acceptsHtml(){
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */
        public static function bearerToken(){
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return \Symfony\Component\HttpFoundation\Request The duplicated request
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * Get the user making the request.
         *
         * @return mixed 
         * @static 
         */
        public static function user(){
            return \Illuminate\Http\Request::user();
        }
        
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */
        public static function route($param = null){
            return \Illuminate\Http\Request::route($param);
        }
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function fingerprint(){
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource $content The raw body data
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return \Symfony\Component\HttpFoundation\Request A new request
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string $content The raw body data
         * @return \Symfony\Component\HttpFoundation\Request A Request instance
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies.
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns.
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key the key
         * @param mixed $default the default value
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
         * the "client-ip" key.
         *
         * @return string The client IP address
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via "setTrustedHeaderName()" with the "client-port" key.
         *
         * @return string 
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */
        public static function getRelativeUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
         * the "client-proto" key.
         *
         * @return bool 
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via "setTrustedHeaderName()" with the "client-host" key.
         *
         * @return string 
         * @throws \UnexpectedValueException when the host name is invalid
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string The associated mime type (null if not found)
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request parameter
         *  * $default
         *
         * @param string $default The default format
         * @return string The request format
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * Sets the request format.
         *
         * @param string $format The request format.
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc).
         * @return bool 
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * Checks whether the method is safe or not.
         *
         * @return bool 
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream.
         * @throws \LogicException
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
    }


    class Log extends \Illuminate\Support\Facades\Log{
        
        /**
         * Adds a log record at the DEBUG level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function debug($message, $context = array()){
            return \Monolog\Logger::debug($message, $context);
        }
        
        /**
         * Adds a log record at the INFO level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function info($message, $context = array()){
            return \Monolog\Logger::info($message, $context);
        }
        
        /**
         * Adds a log record at the NOTICE level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function notice($message, $context = array()){
            return \Monolog\Logger::notice($message, $context);
        }
        
        /**
         * Adds a log record at the WARNING level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function warning($message, $context = array()){
            return \Monolog\Logger::warning($message, $context);
        }
        
        /**
         * Adds a log record at the ERROR level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function error($message, $context = array()){
            return \Monolog\Logger::error($message, $context);
        }
        
        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function critical($message, $context = array()){
            return \Monolog\Logger::critical($message, $context);
        }
        
        /**
         * Adds a log record at the ALERT level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function alert($message, $context = array()){
            return \Monolog\Logger::alert($message, $context);
        }
        
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */
        public static function emergency($message, $context = array()){
            return \Monolog\Logger::emergency($message, $context);
        }
        
        /**
         * Log a critical message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function fatal($message, $context = array()){
            \App\Support\Log\Writer::fatal($message, $context);
        }
        
        /**
         * Log a warning message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function warn($message, $context = array()){
            \App\Support\Log\Writer::warn($message, $context);
        }
        
        /**
         * Log an informational message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function deprecated($message, $context = array()){
            \App\Support\Log\Writer::deprecated($message, $context);
        }
        
        /**
         * Log a message to the logs.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function log($level, $message, $context = array()){
            //Method inherited from \Illuminate\Log\Writer            
            \App\Support\Log\Writer::log($level, $message, $context);
        }
        
        /**
         * Dynamically pass log calls into the writer.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */
        public static function write($level, $message, $context = array()){
            //Method inherited from \Illuminate\Log\Writer            
            \App\Support\Log\Writer::write($level, $message, $context);
        }
        
        /**
         * Register a file log handler.
         *
         * @param string $path
         * @param string $level
         * @return void 
         * @static 
         */
        public static function useFiles($path, $level = 'debug'){
            //Method inherited from \Illuminate\Log\Writer            
            \App\Support\Log\Writer::useFiles($path, $level);
        }
        
        /**
         * Register a daily file log handler.
         *
         * @param string $path
         * @param int $days
         * @param string $level
         * @return void 
         * @static 
         */
        public static function useDailyFiles($path, $days = 0, $level = 'debug'){
            //Method inherited from \Illuminate\Log\Writer            
            \App\Support\Log\Writer::useDailyFiles($path, $days, $level);
        }
        
        /**
         * Register a Syslog handler.
         *
         * @param string $name
         * @param string $level
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */
        public static function useSyslog($name = 'laravel', $level = 'debug'){
            //Method inherited from \Illuminate\Log\Writer            
            return \App\Support\Log\Writer::useSyslog($name, $level);
        }
        
        /**
         * Register an error_log handler.
         *
         * @param string $level
         * @param int $messageType
         * @return void 
         * @static 
         */
        public static function useErrorLog($level = 'debug', $messageType = 0){
            //Method inherited from \Illuminate\Log\Writer            
            \App\Support\Log\Writer::useErrorLog($level, $messageType);
        }
        
        /**
         * Register a new callback handler for when a log event is triggered.
         *
         * @param \Closure $callback
         * @return void 
         * @throws \RuntimeException
         * @static 
         */
        public static function listen($callback){
            //Method inherited from \Illuminate\Log\Writer            
            \App\Support\Log\Writer::listen($callback);
        }
        
        /**
         * Get the underlying Monolog instance.
         *
         * @return \Monolog\Logger 
         * @static 
         */
        public static function getMonolog(){
            //Method inherited from \Illuminate\Log\Writer            
            return \App\Support\Log\Writer::getMonolog();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Log\Writer            
            return \App\Support\Log\Writer::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            //Method inherited from \Illuminate\Log\Writer            
            \App\Support\Log\Writer::setEventDispatcher($dispatcher);
        }
        
    }


    class Mail extends \Illuminate\Support\Facades\Mail{
        
        /**
         * Set the global from address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */
        public static function alwaysFrom($address, $name = null){
            \Illuminate\Mail\Mailer::alwaysFrom($address, $name);
        }
        
        /**
         * Set the global to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */
        public static function alwaysTo($address, $name = null){
            \Illuminate\Mail\Mailer::alwaysTo($address, $name);
        }
        
        /**
         * Send a new message when only a raw text part.
         *
         * @param string $text
         * @param mixed $callback
         * @return int 
         * @static 
         */
        public static function raw($text, $callback){
            return \Illuminate\Mail\Mailer::raw($text, $callback);
        }
        
        /**
         * Send a new message when only a plain part.
         *
         * @param string $view
         * @param array $data
         * @param mixed $callback
         * @return int 
         * @static 
         */
        public static function plain($view, $data, $callback){
            return \Illuminate\Mail\Mailer::plain($view, $data, $callback);
        }
        
        /**
         * Send a new message using a view.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */
        public static function send($view, $data, $callback){
            \Illuminate\Mail\Mailer::send($view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string|null $queue
         * @return mixed 
         * @static 
         */
        public static function queue($view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function onQueue($queue, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::onQueue($queue, $view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         * 
         * This method didn't match rest of framework's "onQueue" phrasing. Added "onQueue".
         *
         * @param string $queue
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function queueOn($queue, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string|null $queue
         * @return mixed 
         * @static 
         */
        public static function later($delay, $view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string $queue
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function laterOn($queue, $delay, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
        }
        
        /**
         * Handle a queued e-mail message job.
         *
         * @param \Illuminate\Contracts\Queue\Job $job
         * @param array $data
         * @return void 
         * @static 
         */
        public static function handleQueuedMessage($job, $data){
            \Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
        }
        
        /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory 
         * @static 
         */
        public static function getViewFactory(){
            return \Illuminate\Mail\Mailer::getViewFactory();
        }
        
        /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer 
         * @static 
         */
        public static function getSwiftMailer(){
            return \Illuminate\Mail\Mailer::getSwiftMailer();
        }
        
        /**
         * Get the array of failed recipients.
         *
         * @return array 
         * @static 
         */
        public static function failures(){
            return \Illuminate\Mail\Mailer::failures();
        }
        
        /**
         * Set the Swift Mailer instance.
         *
         * @param \Swift_Mailer $swift
         * @return void 
         * @static 
         */
        public static function setSwiftMailer($swift){
            \Illuminate\Mail\Mailer::setSwiftMailer($swift);
        }
        
        /**
         * Set the queue manager instance.
         *
         * @param \Illuminate\Contracts\Queue\Queue $queue
         * @return $this 
         * @static 
         */
        public static function setQueue($queue){
            return \Illuminate\Mail\Mailer::setQueue($queue);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setContainer($container){
            \Illuminate\Mail\Mailer::setContainer($container);
        }
        
    }


    class Request extends \Illuminate\Support\Facades\Request{
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */
        public static function capture(){
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * Return the Request instance.
         *
         * @return $this 
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * Get the current encoded path info for the request.
         *
         * @return string 
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */
        public static function pjax(){
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * Returns the client IP address.
         *
         * @return string 
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * Returns the client IP addresses.
         *
         * @return array 
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * Get a subset of the items from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\File\UploadedFile|array|null 
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * Flash the input for the current request to the session.
         *
         * @param string $filter
         * @param array $keys
         * @return void 
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function flashOnly($keys){
            \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function flashExcept($keys){
            \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Http\Request::flush();
        }
        
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return void 
         * @static 
         */
        public static function merge($input){
            \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return void 
         * @static 
         */
        public static function replace($input){
            \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */
        public static function matchesType($actual, $type){
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */
        public static function accepts($contentTypes){
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */
        public static function prefers($contentTypes){
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */
        public static function acceptsJson(){
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */
        public static function acceptsHtml(){
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */
        public static function bearerToken(){
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return \Symfony\Component\HttpFoundation\Request The duplicated request
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * Get the user making the request.
         *
         * @return mixed 
         * @static 
         */
        public static function user(){
            return \Illuminate\Http\Request::user();
        }
        
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */
        public static function route($param = null){
            return \Illuminate\Http\Request::route($param);
        }
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */
        public static function fingerprint(){
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */
        public static function toArray(){
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */
        public static function offsetExists($offset){
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */
        public static function offsetGet($offset){
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($offset, $value){
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */
        public static function offsetUnset($offset){
            \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource $content The raw body data
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return \Symfony\Component\HttpFoundation\Request A new request
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string $content The raw body data
         * @return \Symfony\Component\HttpFoundation\Request A Request instance
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies.
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns.
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key the key
         * @param mixed $default the default value
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
         * the "client-ip" key.
         *
         * @return string The client IP address
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via "setTrustedHeaderName()" with the "client-port" key.
         *
         * @return string 
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */
        public static function getRelativeUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
         * the "client-proto" key.
         *
         * @return bool 
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via "setTrustedHeaderName()" with the "client-host" key.
         *
         * @return string 
         * @throws \UnexpectedValueException when the host name is invalid
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string The associated mime type (null if not found)
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request parameter
         *  * $default
         *
         * @param string $default The default format
         * @return string The request format
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * Sets the request format.
         *
         * @param string $format The request format.
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc).
         * @return bool 
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * Checks whether the method is safe or not.
         *
         * @return bool 
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream.
         * @throws \LogicException
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
    }


    class Response extends \Illuminate\Support\Facades\Response{
        
        /**
         * Return a new response from the application.
         *
         * @param string $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */
        public static function make($content = '', $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
        /**
         * Return a new view response from the application.
         *
         * @param string $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */
        public static function view($view, $data = array(), $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
        /**
         * Return a new JSON response from the application.
         *
         * @param string|array $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */
        public static function json($data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
        /**
         * Return a new JSONP response from the application.
         *
         * @param string $callback
         * @param string|array $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */
        public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
        /**
         * Return a new streamed response from the application.
         *
         * @param \Closure $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */
        public static function stream($callback, $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */
        public static function download($file, $name = null, $headers = array(), $disposition = 'attachment'){
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectTo($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
        
    }


    class Route extends \Illuminate\Support\Facades\Route{
        
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function get($uri, $action){
            return \Illuminate\Routing\Router::get($uri, $action);
        }
        
        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function post($uri, $action){
            return \Illuminate\Routing\Router::post($uri, $action);
        }
        
        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function put($uri, $action){
            return \Illuminate\Routing\Router::put($uri, $action);
        }
        
        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function patch($uri, $action){
            return \Illuminate\Routing\Router::patch($uri, $action);
        }
        
        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function delete($uri, $action){
            return \Illuminate\Routing\Router::delete($uri, $action);
        }
        
        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function options($uri, $action){
            return \Illuminate\Routing\Router::options($uri, $action);
        }
        
        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param \Closure|array|string $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function any($uri, $action){
            return \Illuminate\Routing\Router::any($uri, $action);
        }
        
        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param \Closure|array|string $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function match($methods, $uri, $action){
            return \Illuminate\Routing\Router::match($methods, $uri, $action);
        }
        
        /**
         * Register an array of controllers with wildcard routing.
         *
         * @param array $controllers
         * @return void 
         * @deprecated since version 5.2.
         * @static 
         */
        public static function controllers($controllers){
            \Illuminate\Routing\Router::controllers($controllers);
        }
        
        /**
         * Route a controller to a URI with wildcard routing.
         *
         * @param string $uri
         * @param string $controller
         * @param array $names
         * @return void 
         * @deprecated since version 5.2.
         * @static 
         */
        public static function controller($uri, $controller, $names = array()){
            \Illuminate\Routing\Router::controller($uri, $controller, $names);
        }
        
        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @return void 
         * @static 
         */
        public static function resources($resources){
            \Illuminate\Routing\Router::resources($resources);
        }
        
        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return void 
         * @static 
         */
        public static function resource($name, $controller, $options = array()){
            \Illuminate\Routing\Router::resource($name, $controller, $options);
        }
        
        /**
         * Register the typical authentication routes for an application.
         *
         * @return void 
         * @static 
         */
        public static function auth(){
            \Illuminate\Routing\Router::auth();
        }
        
        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function group($attributes, $callback){
            \Illuminate\Routing\Router::group($attributes, $callback);
        }
        
        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @return array 
         * @static 
         */
        public static function mergeWithLastGroup($new){
            return \Illuminate\Routing\Router::mergeWithLastGroup($new);
        }
        
        /**
         * Merge the given group attributes.
         *
         * @param array $new
         * @param array $old
         * @return array 
         * @static 
         */
        public static function mergeGroup($new, $old){
            return \Illuminate\Routing\Router::mergeGroup($new, $old);
        }
        
        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string 
         * @static 
         */
        public static function getLastGroupPrefix(){
            return \Illuminate\Routing\Router::getLastGroupPrefix();
        }
        
        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response 
         * @static 
         */
        public static function dispatch($request){
            return \Illuminate\Routing\Router::dispatch($request);
        }
        
        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return mixed 
         * @static 
         */
        public static function dispatchToRoute($request){
            return \Illuminate\Routing\Router::dispatchToRoute($request);
        }
        
        /**
         * Gather the middleware for the given route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array 
         * @static 
         */
        public static function gatherRouteMiddlewares($route){
            return \Illuminate\Routing\Router::gatherRouteMiddlewares($route);
        }
        
        /**
         * Resolve the middleware name to a class name(s) preserving passed parameters.
         *
         * @param string $name
         * @return string|array 
         * @static 
         */
        public static function resolveMiddlewareClassName($name){
            return \Illuminate\Routing\Router::resolveMiddlewareClassName($name);
        }
        
        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */
        public static function matched($callback){
            \Illuminate\Routing\Router::matched($callback);
        }
        
        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array 
         * @static 
         */
        public static function getMiddleware(){
            return \Illuminate\Routing\Router::getMiddleware();
        }
        
        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return $this 
         * @static 
         */
        public static function middleware($name, $class){
            return \Illuminate\Routing\Router::middleware($name, $class);
        }
        
        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return $this 
         * @static 
         */
        public static function middlewareGroup($name, $middleware){
            return \Illuminate\Routing\Router::middlewareGroup($name, $middleware);
        }
        
        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
         * @static 
         */
        public static function model($key, $class, $callback = null){
            \Illuminate\Routing\Router::model($key, $class, $callback);
        }
        
        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void 
         * @static 
         */
        public static function bind($key, $binder){
            \Illuminate\Routing\Router::bind($key, $binder);
        }
        
        /**
         * Create a class based binding using the IoC container.
         *
         * @param string $binding
         * @return \Closure 
         * @static 
         */
        public static function createClassBinding($binding){
            return \Illuminate\Routing\Router::createClassBinding($binding);
        }
        
        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void 
         * @static 
         */
        public static function pattern($key, $pattern){
            \Illuminate\Routing\Router::pattern($key, $pattern);
        }
        
        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void 
         * @static 
         */
        public static function patterns($patterns){
            \Illuminate\Routing\Router::patterns($patterns);
        }
        
        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Illuminate\Http\Response 
         * @static 
         */
        public static function prepareResponse($request, $response){
            return \Illuminate\Routing\Router::prepareResponse($request, $response);
        }
        
        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool 
         * @static 
         */
        public static function hasGroupStack(){
            return \Illuminate\Routing\Router::hasGroupStack();
        }
        
        /**
         * Get the current group stack for the router.
         *
         * @return array 
         * @static 
         */
        public static function getGroupStack(){
            return \Illuminate\Routing\Router::getGroupStack();
        }
        
        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */
        public static function input($key, $default = null){
            return \Illuminate\Routing\Router::input($key, $default);
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function getCurrentRoute(){
            return \Illuminate\Routing\Router::getCurrentRoute();
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\Router::current();
        }
        
        /**
         * Check if a route with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function has($name){
            return \Illuminate\Routing\Router::has($name);
        }
        
        /**
         * Get the current route name.
         *
         * @return string|null 
         * @static 
         */
        public static function currentRouteName(){
            return \Illuminate\Routing\Router::currentRouteName();
        }
        
        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function is(){
            return \Illuminate\Routing\Router::is();
        }
        
        /**
         * Determine if the current route matches a given name.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function currentRouteNamed($name){
            return \Illuminate\Routing\Router::currentRouteNamed($name);
        }
        
        /**
         * Get the current route action.
         *
         * @return string|null 
         * @static 
         */
        public static function currentRouteAction(){
            return \Illuminate\Routing\Router::currentRouteAction();
        }
        
        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param mixed  string
         * @return bool 
         * @static 
         */
        public static function uses(){
            return \Illuminate\Routing\Router::uses();
        }
        
        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool 
         * @static 
         */
        public static function currentRouteUses($action){
            return \Illuminate\Routing\Router::currentRouteUses($action);
        }
        
        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */
        public static function getCurrentRequest(){
            return \Illuminate\Routing\Router::getCurrentRequest();
        }
        
        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollection 
         * @static 
         */
        public static function getRoutes(){
            return \Illuminate\Routing\Router::getRoutes();
        }
        
        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void 
         * @static 
         */
        public static function setRoutes($routes){
            \Illuminate\Routing\Router::setRoutes($routes);
        }
        
        /**
         * Get the global "where" patterns.
         *
         * @return array 
         * @static 
         */
        public static function getPatterns(){
            return \Illuminate\Routing\Router::getPatterns();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void 
         * @static 
         */
        public static function macro($name, $macro){
            \Illuminate\Routing\Router::macro($name, $macro);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\Router::hasMacro($name);
        }
        
    }


    class Session extends \Illuminate\Support\Facades\Session{
        
        /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */
        public static function getSessionConfig(){
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * Starts the session storage.
         *
         * @return bool True if session started.
         * @throws \RuntimeException If session fails to start.
         * @static 
         */
        public static function start(){
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * Returns the session ID.
         *
         * @return string The session ID.
         * @static 
         */
        public static function getId(){
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * Sets the session ID.
         *
         * @param string $id
         * @static 
         */
        public static function setId($id){
            return \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool 
         * @static 
         */
        public static function isValidId($id){
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * Returns the session name.
         *
         * @return mixed The session name.
         * @static 
         */
        public static function getName(){
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * Sets the session name.
         *
         * @param string $name
         * @static 
         */
        public static function setName($name){
            return \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * Invalidates the current session.
         * 
         * Clears all session attributes and flashes and regenerates the
         * session and deletes the old session from persistence.
         *
         * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
         *                      will leave the system settings unchanged, 0 sets the cookie
         *                      to expire with browser session. Time is in seconds, and is
         *                      not a Unix timestamp.
         * @return bool True if session invalidated, false if error.
         * @static 
         */
        public static function invalidate($lifetime = null){
            return \Illuminate\Session\Store::invalidate($lifetime);
        }
        
        /**
         * Migrates the current session to a new session id while maintaining all
         * session attributes.
         *
         * @param bool $destroy Whether to delete the old session or leave it to garbage collection.
         * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
         *                       will leave the system settings unchanged, 0 sets the cookie
         *                       to expire with browser session. Time is in seconds, and is
         *                       not a Unix timestamp.
         * @return bool True if session migrated, false if error.
         * @static 
         */
        public static function migrate($destroy = false, $lifetime = null){
            return \Illuminate\Session\Store::migrate($destroy, $lifetime);
        }
        
        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */
        public static function regenerate($destroy = false){
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * Force the session to be saved and closed.
         * 
         * This method is generally not required for real sessions as
         * the session will be automatically saved at the end of
         * code execution.
         *
         * @static 
         */
        public static function save(){
            return \Illuminate\Session\Store::save();
        }
        
        /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */
        public static function ageFlashData(){
            \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * Checks if an attribute is defined.
         *
         * @param string $name The attribute name
         * @return bool true if the attribute is defined, false otherwise
         * @static 
         */
        public static function has($name){
            return \Illuminate\Session\Store::has($name);
        }
        
        /**
         * Returns an attribute.
         *
         * @param string $name The attribute name
         * @param mixed $default The default value if not found.
         * @return mixed 
         * @static 
         */
        public static function get($name, $default = null){
            return \Illuminate\Session\Store::get($name, $default);
        }
        
        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * Determine if the session contains old input.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function hasOldInput($key = null){
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * Get the requested item from the flashed input array.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function getOldInput($key = null, $default = null){
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * Sets an attribute.
         *
         * @param string $name
         * @param mixed $value
         * @static 
         */
        public static function set($name, $value){
            return \Illuminate\Session\Store::set($name, $value);
        }
        
        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function put($key, $value = null){
            \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function push($key, $value){
            \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function flash($key, $value){
            \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * Flash a key / value pair to the session
         * for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function now($key, $value){
            \Illuminate\Session\Store::now($key, $value);
        }
        
        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void 
         * @static 
         */
        public static function flashInput($value){
            \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */
        public static function reflash(){
            \Illuminate\Session\Store::reflash();
        }
        
        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */
        public static function keep($keys = null){
            \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * Returns attributes.
         *
         * @return array Attributes
         * @static 
         */
        public static function all(){
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * Sets attributes.
         *
         * @param array $attributes Attributes
         * @static 
         */
        public static function replace($attributes){
            return \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * Removes an attribute.
         *
         * @param string $name
         * @return mixed The removed value or null when it does not exist
         * @static 
         */
        public static function remove($name){
            return \Illuminate\Session\Store::remove($name);
        }
        
        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void 
         * @static 
         */
        public static function forget($keys){
            \Illuminate\Session\Store::forget($keys);
        }
        
        /**
         * Clears all attributes.
         *
         * @static 
         */
        public static function clear(){
            return \Illuminate\Session\Store::clear();
        }
        
        /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Session\Store::flush();
        }
        
        /**
         * Checks if the session was started.
         *
         * @return bool 
         * @static 
         */
        public static function isStarted(){
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * Registers a SessionBagInterface with the session.
         *
         * @param \Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag
         * @static 
         */
        public static function registerBag($bag){
            return \Illuminate\Session\Store::registerBag($bag);
        }
        
        /**
         * Gets a bag instance by name.
         *
         * @param string $name
         * @return \Symfony\Component\HttpFoundation\Session\SessionBagInterface 
         * @static 
         */
        public static function getBag($name){
            return \Illuminate\Session\Store::getBag($name);
        }
        
        /**
         * Gets session meta.
         *
         * @return \Symfony\Component\HttpFoundation\Session\MetadataBag 
         * @static 
         */
        public static function getMetadataBag(){
            return \Illuminate\Session\Store::getMetadataBag();
        }
        
        /**
         * Get the raw bag data array for a given bag.
         *
         * @param string $name
         * @return array 
         * @static 
         */
        public static function getBagData($name){
            return \Illuminate\Session\Store::getBagData($name);
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */
        public static function token(){
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */
        public static function getToken(){
            return \Illuminate\Session\Store::getToken();
        }
        
        /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */
        public static function regenerateToken(){
            \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */
        public static function previousUrl(){
            return \Illuminate\Session\Store::previousUrl();
        }
        
        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void 
         * @static 
         */
        public static function setPreviousUrl($url){
            \Illuminate\Session\Store::setPreviousUrl($url);
        }
        
        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void 
         * @static 
         */
        public static function setExists($value){
            \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */
        public static function getHandler(){
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */
        public static function handlerNeedsRequest(){
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * Set the request on the handler instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return void 
         * @static 
         */
        public static function setRequestOnHandler($request){
            \Illuminate\Session\Store::setRequestOnHandler($request);
        }
        
    }


    class Storage extends \Illuminate\Support\Facades\Storage{
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function drive($name = null){
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function disk($name = null){
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function createLocalDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function createFtpDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
        
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */
        public static function createS3Driver($config){
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */
        public static function createRackspaceDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
    }


    class CLI extends \App\Console\CLI{
        
    }


    class SugarException extends \App\Exceptions\SugarException{
        
    }


    class Arr extends \Illuminate\Support\Arr{
        
    }


    class Str extends \Illuminate\Support\Str{
        
    }


}

