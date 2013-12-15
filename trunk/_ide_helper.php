<?php
/**
 * An helper file for Laravel 4, to provide autocomplete information to your IDE
 * Generated with https://github.com/barryvdh/laravel-ide-helper
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */
exit('Only to be used as an helper for your IDE');

class App extends Illuminate\Support\Facades\App{
	/**
	 * Create a new Illuminate application instance.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return void
	 * @static 
	 */
	 public static function __construct($request = null){
		 Illuminate\Foundation\Application::__construct($request);
	 }

	/**
	 * Set the application request for the console environment.
	 *
	 * @return void
	 * @static 
	 */
	 public static function setRequestForConsoleEnvironment(){
		 Illuminate\Foundation\Application::setRequestForConsoleEnvironment();
	 }

	/**
	 * Redirect the request if it has a trailing slash.
	 *
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|null
	 * @static 
	 */
	 public static function redirectIfTrailingSlash(){
		return Illuminate\Foundation\Application::redirectIfTrailingSlash();
	 }

	/**
	 * Bind the installation paths to the application.
	 *
	 * @param array  $paths
	 * @return void
	 * @static 
	 */
	 public static function bindInstallPaths($paths){
		 Illuminate\Foundation\Application::bindInstallPaths($paths);
	 }

	/**
	 * Get the application bootstrap file.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getBootstrapFile(){
		return Illuminate\Foundation\Application::getBootstrapFile();
	 }

	/**
	 * Start the exception handling for the request.
	 *
	 * @return void
	 * @static 
	 */
	 public static function startExceptionHandling(){
		 Illuminate\Foundation\Application::startExceptionHandling();
	 }

	/**
	 * Get the current application environment.
	 *
	 * @return string
	 * @static 
	 */
	 public static function environment(){
		return Illuminate\Foundation\Application::environment();
	 }

	/**
	 * Detect the application's current environment.
	 *
	 * @param array|string  $environments
	 * @return string
	 * @static 
	 */
	 public static function detectEnvironment($environments){
		return Illuminate\Foundation\Application::detectEnvironment($environments);
	 }

	/**
	 * Determine if we are running in the console.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function runningInConsole(){
		return Illuminate\Foundation\Application::runningInConsole();
	 }

	/**
	 * Determine if we are running unit tests.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function runningUnitTests(){
		return Illuminate\Foundation\Application::runningUnitTests();
	 }

	/**
	 * Register a service provider with the application.
	 *
	 * @param \Illuminate\Support\ServiceProvider|string  $provider
	 * @param array  $options
	 * @return void
	 * @static 
	 */
	 public static function register($provider, $options = array()){
		 Illuminate\Foundation\Application::register($provider, $options);
	 }

	/**
	 * Load and boot all of the remaining deferred providers.
	 *
	 * @return void
	 * @static 
	 */
	 public static function loadDeferredProviders(){
		 Illuminate\Foundation\Application::loadDeferredProviders();
	 }

	/**
	 * Resolve the given type from the container.
	 * 
	 * (Overriding Container::make)
	 *
	 * @param string  $abstract
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function make($abstract, $parameters = array()){
		return Illuminate\Foundation\Application::make($abstract, $parameters);
	 }

	/**
	 * Register a "before" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function before($callback){
		 Illuminate\Foundation\Application::before($callback);
	 }

	/**
	 * Register an "after" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function after($callback){
		 Illuminate\Foundation\Application::after($callback);
	 }

	/**
	 * Register a "close" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function close($callback){
		 Illuminate\Foundation\Application::close($callback);
	 }

	/**
	 * Register a "finish" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function finish($callback){
		 Illuminate\Foundation\Application::finish($callback);
	 }

	/**
	 * Register a "shutdown" callback.
	 *
	 * @param callable  $callback
	 * @return void
	 * @static 
	 */
	 public static function shutdown($callback = null){
		 Illuminate\Foundation\Application::shutdown($callback);
	 }

	/**
	 * Handles the given request and delivers the response.
	 *
	 * @return void
	 * @static 
	 */
	 public static function run(){
		 Illuminate\Foundation\Application::run();
	 }

	/**
	 * Handle the given request and get the response.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function dispatch($request){
		return Illuminate\Foundation\Application::dispatch($request);
	 }

	/**
	 * Handle the given request and get the response.
	 * 
	 * Provides compatibility with BrowserKit functional testing.
	 *
	 * @implements HttpKernelInterface::handle
	 * @param \Illuminate\Http\Request  $request
	 * @param int   $type
	 * @param bool  $catch
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function handle($request, $type = 1, $catch = true){
		return Illuminate\Foundation\Application::handle($request, $type, $catch);
	 }

	/**
	 * Boot the application's service providers.
	 *
	 * @return void
	 * @static 
	 */
	 public static function boot(){
		 Illuminate\Foundation\Application::boot();
	 }

	/**
	 * Register a new boot listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function booting($callback){
		 Illuminate\Foundation\Application::booting($callback);
	 }

	/**
	 * Register a new "booted" listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function booted($callback){
		 Illuminate\Foundation\Application::booted($callback);
	 }

	/**
	 * Prepare the request by injecting any services.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function prepareRequest($request){
		return Illuminate\Foundation\Application::prepareRequest($request);
	 }

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @param mixed  $value
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function prepareResponse($value){
		return Illuminate\Foundation\Application::prepareResponse($value);
	 }

	/**
	 * Determine if the application is currently down for maintenance.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isDownForMaintenance(){
		return Illuminate\Foundation\Application::isDownForMaintenance();
	 }

	/**
	 * Register a maintenance mode event listener.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function down($callback){
		 Illuminate\Foundation\Application::down($callback);
	 }

	/**
	 * Throw an HttpException with the given data.
	 *
	 * @param int     $code
	 * @param string  $message
	 * @param array   $headers
	 * @return void
	 * @static 
	 */
	 public static function abort($code, $message = '', $headers = array()){
		 Illuminate\Foundation\Application::abort($code, $message, $headers);
	 }

	/**
	 * Register a 404 error handler.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function missing($callback){
		 Illuminate\Foundation\Application::missing($callback);
	 }

	/**
	 * Register an application error handler.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function error($callback){
		 Illuminate\Foundation\Application::error($callback);
	 }

	/**
	 * Register an error handler at the bottom of the stack.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function pushError($callback){
		 Illuminate\Foundation\Application::pushError($callback);
	 }

	/**
	 * Register an error handler for fatal errors.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function fatal($callback){
		 Illuminate\Foundation\Application::fatal($callback);
	 }

	/**
	 * Get the configuration loader instance.
	 *
	 * @return \Illuminate\Config\LoaderInterface
	 * @static 
	 */
	 public static function getConfigLoader(){
		return Illuminate\Foundation\Application::getConfigLoader();
	 }

	/**
	 * Get the service provider repository instance.
	 *
	 * @return \Illuminate\Foundation\ProviderRepository
	 * @static 
	 */
	 public static function getProviderRepository(){
		return Illuminate\Foundation\Application::getProviderRepository();
	 }

	/**
	 * Get the current application locale.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		return Illuminate\Foundation\Application::getLocale();
	 }

	/**
	 * Set the current application locale.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
		 Illuminate\Foundation\Application::setLocale($locale);
	 }

	/**
	 * Get the service providers that have been loaded.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getLoadedProviders(){
		return Illuminate\Foundation\Application::getLoadedProviders();
	 }

	/**
	 * Set the application's deferred services.
	 *
	 * @param array  $services
	 * @return void
	 * @static 
	 */
	 public static function setDeferredServices($services){
		 Illuminate\Foundation\Application::setDeferredServices($services);
	 }

	/**
	 * Get or set the request class for the application.
	 *
	 * @param string  $class
	 * @return string
	 * @static 
	 */
	 public static function requestClass($class = null){
		return Illuminate\Foundation\Application::requestClass($class);
	 }

	/**
	 * Call a method on the default request class.
	 *
	 * @param string  $method
	 * @param array  $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function onRequest($method, $parameters = array()){
		return Illuminate\Foundation\Application::onRequest($method, $parameters);
	 }

	/**
	 * Dynamically access application services.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function __get($key){
		return Illuminate\Foundation\Application::__get($key);
	 }

	/**
	 * Dynamically set application services.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function __set($key, $value){
		 Illuminate\Foundation\Application::__set($key, $value);
	 }

	/**
	 * Determine if the given abstract type has been bound.
	 *
	 * @param string  $abstract
	 * @return bool
	 * @static 
	 */
	 public static function bound($abstract){
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::bound($abstract);
	 }

	/**
	 * Register a binding with the container.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @param bool                 $shared
	 * @return void
	 * @static 
	 */
	 public static function bind($abstract, $concrete = null, $shared = false){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
	 }

	/**
	 * Register a binding if it hasn't already been registered.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @param bool                 $shared
	 * @return bool
	 * @static 
	 */
	 public static function bindIf($abstract, $concrete = null, $shared = false){
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
	 }

	/**
	 * Register a shared binding in the container.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @return void
	 * @static 
	 */
	 public static function singleton($abstract, $concrete = null){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::singleton($abstract, $concrete);
	 }

	/**
	 * Wrap a Closure such that it is shared.
	 *
	 * @param Closure  $closure
	 * @return Closure
	 * @static 
	 */
	 public static function share($closure){
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::share($closure);
	 }

	/**
	 * "Extend" an abstract type in the container.
	 *
	 * @param string   $abstract
	 * @param Closure  $closure
	 * @return void
	 * @static 
	 */
	 public static function extend($abstract, $closure){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::extend($abstract, $closure);
	 }

	/**
	 * Register an existing instance as shared in the container.
	 *
	 * @param string  $abstract
	 * @param mixed   $instance
	 * @return void
	 * @static 
	 */
	 public static function instance($abstract, $instance){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::instance($abstract, $instance);
	 }

	/**
	 * Alias a type to a shorter name.
	 *
	 * @param string  $abstract
	 * @param string  $alias
	 * @return void
	 * @static 
	 */
	 public static function alias($abstract, $alias){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::alias($abstract, $alias);
	 }

	/**
	 * Instantiate a concrete instance of the given type.
	 *
	 * @param string  $concrete
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function build($concrete, $parameters = array()){
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::build($concrete, $parameters);
	 }

	/**
	 * Register a new resolving callback.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function resolving($callback){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::resolving($callback);
	 }

	/**
	 * Get the container's bindings.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getBindings(){
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::getBindings();
	 }

	/**
	 * Determine if a given offset exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::offsetExists($key);
	 }

	/**
	 * Get the value at a given offset.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function offsetGet($key){
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::offsetGet($key);
	 }

	/**
	 * Set the value at a given offset.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::offsetSet($key, $value);
	 }

	/**
	 * Unset the value at a given offset.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::offsetUnset($key);
	 }

}

class Artisan extends Illuminate\Support\Facades\Artisan{
	/**
	 * Start a new Console application.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return \Illuminate\Console\Application
	 * @static 
	 */
	 public static function start($app){
		return Illuminate\Console\Application::start($app);
	 }

	/**
	 * Add a command to the console.
	 *
	 * @param \Symfony\Component\Console\Command\Command  $command
	 * @return \Symfony\Component\Console\Command\Command
	 * @static 
	 */
	 public static function add($command){
		return Illuminate\Console\Application::add($command);
	 }

	/**
	 * Add a command, resolving through the application.
	 *
	 * @param string  $command
	 * @return \Symfony\Component\Console\Command\Command
	 * @static 
	 */
	 public static function resolve($command){
		return Illuminate\Console\Application::resolve($command);
	 }

	/**
	 * Resolve an array of commands through the application.
	 *
	 * @param array|dynamic  $commands
	 * @return void
	 * @static 
	 */
	 public static function resolveCommands($commands){
		 Illuminate\Console\Application::resolveCommands($commands);
	 }

	/**
	 * Render the given exception.
	 *
	 * @param \Exception  $e
	 * @param \Symfony\Component\Console\Output\OutputInterface  $output
	 * @return void
	 * @static 
	 */
	 public static function renderException($e, $output){
		 Illuminate\Console\Application::renderException($e, $output);
	 }

	/**
	 * Set the exception handler instance.
	 *
	 * @param \Illuminate\Exception\Handler  $handler
	 * @return void
	 * @static 
	 */
	 public static function setExceptionHandler($handler){
		 Illuminate\Console\Application::setExceptionHandler($handler);
	 }

	/**
	 * Set the Laravel application instance.
	 *
	 * @param \Illuminate\Foundation\Application  $laravel
	 * @return void
	 * @static 
	 */
	 public static function setLaravel($laravel){
		 Illuminate\Console\Application::setLaravel($laravel);
	 }

	/**
	 * Constructor.
	 *
	 * @param string $name    The name of the application
	 * @param string $version The version of the application
	 * @api 
	 * @static 
	 */
	 public static function __construct($name = 'UNKNOWN', $version = 'UNKNOWN'){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::__construct($name, $version);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDispatcher($dispatcher){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setDispatcher($dispatcher);
	 }

	/**
	 * Runs the current application.
	 *
	 * @param InputInterface  $input  An Input instance
	 * @param OutputInterface $output An Output instance
	 * @return integer 0 if everything went fine, or an error code
	 * @throws \Exception When doRun returns Exception
	 * @api 
	 * @static 
	 */
	 public static function run($input = null, $output = null){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::run($input, $output);
	 }

	/**
	 * Runs the current application.
	 *
	 * @param InputInterface  $input  An Input instance
	 * @param OutputInterface $output An Output instance
	 * @return integer 0 if everything went fine, or an error code
	 * @static 
	 */
	 public static function doRun($input, $output){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::doRun($input, $output);
	 }

	/**
	 * Set a helper set to be used with the command.
	 *
	 * @param HelperSet $helperSet The helper set
	 * @api 
	 * @static 
	 */
	 public static function setHelperSet($helperSet){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setHelperSet($helperSet);
	 }

	/**
	 * Get the helper set associated with the command.
	 *
	 * @return HelperSet The HelperSet instance associated with this command
	 * @api 
	 * @static 
	 */
	 public static function getHelperSet(){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getHelperSet();
	 }

	/**
	 * Set an input definition set to be used with this application
	 *
	 * @param InputDefinition $definition The input definition
	 * @api 
	 * @static 
	 */
	 public static function setDefinition($definition){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setDefinition($definition);
	 }

	/**
	 * Gets the InputDefinition related to this Application.
	 *
	 * @return InputDefinition The InputDefinition instance
	 * @static 
	 */
	 public static function getDefinition(){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getDefinition();
	 }

	/**
	 * Gets the help message.
	 *
	 * @return string A help message.
	 * @static 
	 */
	 public static function getHelp(){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getHelp();
	 }

	/**
	 * Sets whether to catch exceptions or not during commands execution.
	 *
	 * @param Boolean $boolean Whether to catch exceptions or not during commands execution
	 * @api 
	 * @static 
	 */
	 public static function setCatchExceptions($boolean){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setCatchExceptions($boolean);
	 }

	/**
	 * Sets whether to automatically exit after a command execution or not.
	 *
	 * @param Boolean $boolean Whether to automatically exit after a command execution or not
	 * @api 
	 * @static 
	 */
	 public static function setAutoExit($boolean){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setAutoExit($boolean);
	 }

	/**
	 * Gets the name of the application.
	 *
	 * @return string The application name
	 * @api 
	 * @static 
	 */
	 public static function getName(){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getName();
	 }

	/**
	 * Sets the application name.
	 *
	 * @param string $name The application name
	 * @api 
	 * @static 
	 */
	 public static function setName($name){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setName($name);
	 }

	/**
	 * Gets the application version.
	 *
	 * @return string The application version
	 * @api 
	 * @static 
	 */
	 public static function getVersion(){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getVersion();
	 }

	/**
	 * Sets the application version.
	 *
	 * @param string $version The application version
	 * @api 
	 * @static 
	 */
	 public static function setVersion($version){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setVersion($version);
	 }

	/**
	 * Returns the long version of the application.
	 *
	 * @return string The long application version
	 * @api 
	 * @static 
	 */
	 public static function getLongVersion(){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getLongVersion();
	 }

	/**
	 * Registers a new command.
	 *
	 * @param string $name The command name
	 * @return Command The newly created command
	 * @api 
	 * @static 
	 */
	 public static function register($name){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::register($name);
	 }

	/**
	 * Adds an array of command objects.
	 *
	 * @param Command[] $commands An array of commands
	 * @api 
	 * @static 
	 */
	 public static function addCommands($commands){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::addCommands($commands);
	 }

	/**
	 * Returns a registered command by name or alias.
	 *
	 * @param string $name The command name or alias
	 * @return Command A Command object
	 * @throws \InvalidArgumentException When command name given does not exist
	 * @api 
	 * @static 
	 */
	 public static function get($name){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::get($name);
	 }

	/**
	 * Returns true if the command exists, false otherwise.
	 *
	 * @param string $name The command name or alias
	 * @return Boolean true if the command exists, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function has($name){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::has($name);
	 }

	/**
	 * Returns an array of all unique namespaces used by currently registered commands.
	 * 
	 * It does not returns the global namespace which always exists.
	 *
	 * @return array An array of namespaces
	 * @static 
	 */
	 public static function getNamespaces(){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getNamespaces();
	 }

	/**
	 * Finds a registered namespace by a name or an abbreviation.
	 *
	 * @param string $namespace A namespace or abbreviation to search for
	 * @return string A registered namespace
	 * @throws \InvalidArgumentException When namespace is incorrect or ambiguous
	 * @static 
	 */
	 public static function findNamespace($namespace){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::findNamespace($namespace);
	 }

	/**
	 * Finds a command by name or alias.
	 * 
	 * Contrary to get, this command tries to find the best
	 * match if you give it an abbreviation of a name or alias.
	 *
	 * @param string $name A command name or a command alias
	 * @return Command A Command instance
	 * @throws \InvalidArgumentException When command name is incorrect or ambiguous
	 * @api 
	 * @static 
	 */
	 public static function find($name){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::find($name);
	 }

	/**
	 * Gets the commands (registered in the given namespace if provided).
	 * 
	 * The array keys are the full names and the values the command instances.
	 *
	 * @param string $namespace A namespace name
	 * @return Command[] An array of Command instances
	 * @api 
	 * @static 
	 */
	 public static function all($namespace = null){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::all($namespace);
	 }

	/**
	 * Returns an array of possible abbreviations given a set of names.
	 *
	 * @param array $names An array of names
	 * @return array An array of abbreviations
	 * @static 
	 */
	 public static function getAbbreviations($names){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getAbbreviations($names);
	 }

	/**
	 * Returns a text representation of the Application.
	 *
	 * @param string  $namespace An optional namespace name
	 * @param boolean $raw       Whether to return raw command list
	 * @return string A string representing the Application
	 * @deprecated Deprecated since version 2.3, to be removed in 3.0.
	 * @static 
	 */
	 public static function asText($namespace = null, $raw = false){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::asText($namespace, $raw);
	 }

	/**
	 * Returns an XML representation of the Application.
	 *
	 * @param string  $namespace An optional namespace name
	 * @param Boolean $asDom     Whether to return a DOM or an XML string
	 * @return string|\DOMDocument An XML string representing the Application
	 * @deprecated Deprecated since version 2.3, to be removed in 3.0.
	 * @static 
	 */
	 public static function asXml($namespace = null, $asDom = false){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::asXml($namespace, $asDom);
	 }

	/**
	 * Tries to figure out the terminal dimensions based on the current environment
	 *
	 * @return array Array containing width and height
	 * @static 
	 */
	 public static function getTerminalDimensions(){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getTerminalDimensions();
	 }

	/**
	 * Returns the namespace part of the command name.
	 * 
	 * This method is not part of public API and should not be used directly.
	 *
	 * @param string $name  The full name of the command
	 * @param string $limit The maximum number of parts of the namespace
	 * @return string The namespace of the command
	 * @static 
	 */
	 public static function extractNamespace($name, $limit = null){
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::extractNamespace($name, $limit);
	 }

}

class Auth extends Illuminate\Support\Facades\Auth{
	/**
	 * Create an instance of the database driver.
	 *
	 * @return \Illuminate\Auth\Guard
	 * @static 
	 */
	 public static function createDatabaseDriver(){
		return Illuminate\Auth\AuthManager::createDatabaseDriver();
	 }

	/**
	 * Create an instance of the Eloquent driver.
	 *
	 * @return \Illuminate\Auth\Guard
	 * @static 
	 */
	 public static function createEloquentDriver(){
		return Illuminate\Auth\AuthManager::createEloquentDriver();
	 }

	/**
	 * Create a new manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return void
	 * @static 
	 */
	 public static function __construct($app){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::__construct($app);
	 }

	/**
	 * Get a driver instance.
	 *
	 * @param string  $driver
	 * @return mixed
	 * @static 
	 */
	 public static function driver($driver = null){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Auth\AuthManager::driver($driver);
	 }

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string   $driver
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function extend($driver, $callback){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::extend($driver, $callback);
	 }

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array
	 * @static 
	 */
	 public static function getDrivers(){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Auth\AuthManager::getDrivers();
	 }

	/**
	 * Dynamically call the default driver instance.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Auth\AuthManager::__call($method, $parameters);
	 }

	/**
	 * Determine if the current user is authenticated.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function check(){
		return Illuminate\Auth\Guard::check();
	 }

	/**
	 * Determine if the current user is a guest.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function guest(){
		return Illuminate\Auth\Guard::guest();
	 }

	/**
	 * Get the currently authenticated user.
	 *
	 * @return \Illuminate\Auth\UserInterface|null
	 * @static 
	 */
	 public static function user(){
		return Illuminate\Auth\Guard::user();
	 }

	/**
	 * Log a user into the application without sessions or cookies.
	 *
	 * @param array  $credentials
	 * @return bool
	 * @static 
	 */
	 public static function once($credentials = array()){
		return Illuminate\Auth\Guard::once($credentials);
	 }

	/**
	 * Validate a user's credentials.
	 *
	 * @param array  $credentials
	 * @return bool
	 * @static 
	 */
	 public static function validate($credentials = array()){
		return Illuminate\Auth\Guard::validate($credentials);
	 }

	/**
	 * Attempt to authenticate using HTTP Basic Auth.
	 *
	 * @param string  $field
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 * @static 
	 */
	 public static function basic($field = 'email', $request = null){
		return Illuminate\Auth\Guard::basic($field, $request);
	 }

	/**
	 * Perform a stateless HTTP Basic login attempt.
	 *
	 * @param string  $field
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 * @static 
	 */
	 public static function onceBasic($field = 'email', $request = null){
		return Illuminate\Auth\Guard::onceBasic($field, $request);
	 }

	/**
	 * Attempt to authenticate a user using the given credentials.
	 *
	 * @param array  $credentials
	 * @param bool   $remember
	 * @param bool   $login
	 * @return bool
	 * @static 
	 */
	 public static function attempt($credentials = array(), $remember = false, $login = true){
		return Illuminate\Auth\Guard::attempt($credentials, $remember, $login);
	 }

	/**
	 * Register an authentication attempt event listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function attempting($callback){
		 Illuminate\Auth\Guard::attempting($callback);
	 }

	/**
	 * Log a user into the application.
	 *
	 * @param \Illuminate\Auth\UserInterface  $user
	 * @param bool  $remember
	 * @return void
	 * @static 
	 */
	 public static function login($user, $remember = false){
		 Illuminate\Auth\Guard::login($user, $remember);
	 }

	/**
	 * Log the given user ID into the application.
	 *
	 * @param mixed  $id
	 * @param bool   $remember
	 * @return \Illuminate\Auth\UserInterface
	 * @static 
	 */
	 public static function loginUsingId($id, $remember = false){
		return Illuminate\Auth\Guard::loginUsingId($id, $remember);
	 }

	/**
	 * Log the given user ID into the application without sessions or cookies.
	 *
	 * @param mixed  $id
	 * @return bool
	 * @static 
	 */
	 public static function onceUsingId($id){
		return Illuminate\Auth\Guard::onceUsingId($id);
	 }

	/**
	 * Log the user out of the application.
	 *
	 * @return void
	 * @static 
	 */
	 public static function logout(){
		 Illuminate\Auth\Guard::logout();
	 }

	/**
	 * Get the cookies queued by the guard.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getQueuedCookies(){
		return Illuminate\Auth\Guard::getQueuedCookies();
	 }

	/**
	 * Get the cookie creator instance used by the guard.
	 *
	 * @return \Illuminate\Cookie\CookieJar
	 * @static 
	 */
	 public static function getCookieJar(){
		return Illuminate\Auth\Guard::getCookieJar();
	 }

	/**
	 * Set the cookie creator instance used by the guard.
	 *
	 * @param \Illuminate\Cookie\CookieJar  $cookie
	 * @return void
	 * @static 
	 */
	 public static function setCookieJar($cookie){
		 Illuminate\Auth\Guard::setCookieJar($cookie);
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getDispatcher(){
		return Illuminate\Auth\Guard::getDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function setDispatcher($events){
		 Illuminate\Auth\Guard::setDispatcher($events);
	 }

	/**
	 * Get the session store used by the guard.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSession(){
		return Illuminate\Auth\Guard::getSession();
	 }

	/**
	 * Get the user provider used by the guard.
	 *
	 * @return \Illuminate\Auth\UserProviderInterface
	 * @static 
	 */
	 public static function getProvider(){
		return Illuminate\Auth\Guard::getProvider();
	 }

	/**
	 * Set the user provider used by the guard.
	 *
	 * @param \Illuminate\Auth\UserProviderInterface  $provider
	 * @return void
	 * @static 
	 */
	 public static function setProvider($provider){
		 Illuminate\Auth\Guard::setProvider($provider);
	 }

	/**
	 * Return the currently cached user of the application.
	 *
	 * @return \Illuminate\Auth\UserInterface|null
	 * @static 
	 */
	 public static function getUser(){
		return Illuminate\Auth\Guard::getUser();
	 }

	/**
	 * Set the current user of the application.
	 *
	 * @param \Illuminate\Auth\UserInterface  $user
	 * @return void
	 * @static 
	 */
	 public static function setUser($user){
		 Illuminate\Auth\Guard::setUser($user);
	 }

	/**
	 * Get the current request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		return Illuminate\Auth\Guard::getRequest();
	 }

	/**
	 * Set the current request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request
	 * @return \Illuminate\Auth\Guard
	 * @static 
	 */
	 public static function setRequest($request){
		return Illuminate\Auth\Guard::setRequest($request);
	 }

	/**
	 * Get a unique identifier for the auth session value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getName(){
		return Illuminate\Auth\Guard::getName();
	 }

	/**
	 * Get the name of the cookie used to store the "recaller".
	 *
	 * @return string
	 * @static 
	 */
	 public static function getRecallerName(){
		return Illuminate\Auth\Guard::getRecallerName();
	 }

}

class Blade extends Illuminate\Support\Facades\Blade{
	/**
	 * Compile the view at the given path.
	 *
	 * @param string  $path
	 * @return void
	 * @static 
	 */
	 public static function compile($path){
		 Illuminate\View\Compilers\BladeCompiler::compile($path);
	 }

	/**
	 * Compile the given Blade template contents.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function compileString($value){
		return Illuminate\View\Compilers\BladeCompiler::compileString($value);
	 }

	/**
	 * Register a custom Blade compiler.
	 *
	 * @param Closure  $compiler
	 * @return void
	 * @static 
	 */
	 public static function extend($compiler){
		 Illuminate\View\Compilers\BladeCompiler::extend($compiler);
	 }

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createMatcher($function){
		return Illuminate\View\Compilers\BladeCompiler::createMatcher($function);
	 }

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createOpenMatcher($function){
		return Illuminate\View\Compilers\BladeCompiler::createOpenMatcher($function);
	 }

	/**
	 * Create a plain Blade matcher.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createPlainMatcher($function){
		return Illuminate\View\Compilers\BladeCompiler::createPlainMatcher($function);
	 }

	/**
	 * Sets the content tags used for the compiler.
	 *
	 * @param string  $openTag
	 * @param string  $closeTag
	 * @param bool    $escaped
	 * @return void
	 * @static 
	 */
	 public static function setContentTags($openTag, $closeTag, $escaped = false){
		 Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
	 }

	/**
	 * Sets the escaped content tags used for the compiler.
	 *
	 * @param string  $openTag
	 * @param string  $closeTag
	 * @return void
	 * @static 
	 */
	 public static function setEscapedContentTags($openTag, $closeTag){
		 Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
	 }

	/**
	 * Create a new compiler instance.
	 *
	 * @param \Illuminate\Filesystem\Filesystem  $files
	 * @param string  $cachePath
	 * @return void
	 * @static 
	 */
	 public static function __construct($files, $cachePath){
		//Method inherited from Illuminate\View\Compilers\Compiler
		 Illuminate\View\Compilers\BladeCompiler::__construct($files, $cachePath);
	 }

	/**
	 * Get the path to the compiled version of a view.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function getCompiledPath($path){
		//Method inherited from Illuminate\View\Compilers\Compiler
		return Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
	 }

	/**
	 * Determine if the view at the given path is expired.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isExpired($path){
		//Method inherited from Illuminate\View\Compilers\Compiler
		return Illuminate\View\Compilers\BladeCompiler::isExpired($path);
	 }

}

class Cache extends Illuminate\Support\Facades\Cache{
	/**
	 * Get the cache "prefix" value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getPrefix(){
		return Illuminate\Cache\CacheManager::getPrefix();
	 }

	/**
	 * Create a new manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return void
	 * @static 
	 */
	 public static function __construct($app){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::__construct($app);
	 }

	/**
	 * Get a driver instance.
	 *
	 * @param string  $driver
	 * @return mixed
	 * @static 
	 */
	 public static function driver($driver = null){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Cache\CacheManager::driver($driver);
	 }

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string   $driver
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function extend($driver, $callback){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::extend($driver, $callback);
	 }

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array
	 * @static 
	 */
	 public static function getDrivers(){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Cache\CacheManager::getDrivers();
	 }

	/**
	 * Dynamically call the default driver instance.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Cache\CacheManager::__call($method, $parameters);
	 }

	/**
	 * Determine if an item exists in the cache.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		return Illuminate\Cache\Repository::has($key);
	 }

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
		return Illuminate\Cache\Repository::get($key, $default);
	 }

	/**
	 * Store an item in the cache if the key does not exist.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @param int     $minutes
	 * @return void
	 * @static 
	 */
	 public static function add($key, $value, $minutes){
		 Illuminate\Cache\Repository::add($key, $value, $minutes);
	 }

	/**
	 * Get an item from the cache, or store the default value.
	 *
	 * @param string   $key
	 * @param int      $minutes
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function remember($key, $minutes, $callback){
		return Illuminate\Cache\Repository::remember($key, $minutes, $callback);
	 }

	/**
	 * Get an item from the cache, or store the default value forever.
	 *
	 * @param string   $key
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function sear($key, $callback){
		return Illuminate\Cache\Repository::sear($key, $callback);
	 }

	/**
	 * Get an item from the cache, or store the default value forever.
	 *
	 * @param string   $key
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function rememberForever($key, $callback){
		return Illuminate\Cache\Repository::rememberForever($key, $callback);
	 }

	/**
	 * Get the default cache time.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getDefaultCacheTime(){
		return Illuminate\Cache\Repository::getDefaultCacheTime();
	 }

	/**
	 * Set the default cache time in minutes.
	 *
	 * @param int   $minutes
	 * @return void
	 * @static 
	 */
	 public static function setDefaultCacheTime($minutes){
		 Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
	 }

	/**
	 * Get the cache store implementation.
	 *
	 * @return \Illuminate\Cache\StoreInterface
	 * @static 
	 */
	 public static function getStore(){
		return Illuminate\Cache\Repository::getStore();
	 }

	/**
	 * Determine if a cached value exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
		return Illuminate\Cache\Repository::offsetExists($key);
	 }

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function offsetGet($key){
		return Illuminate\Cache\Repository::offsetGet($key);
	 }

	/**
	 * Store an item in the cache for the default time.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		 Illuminate\Cache\Repository::offsetSet($key, $value);
	 }

	/**
	 * Remove an item from the cache.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
		 Illuminate\Cache\Repository::offsetUnset($key);
	 }

}

class ClassLoader extends Illuminate\Support\ClassLoader{
}

class Config extends Illuminate\Support\Facades\Config{
	/**
	 * Create a new configuration repository.
	 *
	 * @param \Illuminate\Config\LoaderInterface  $loader
	 * @param string  $environment
	 * @return void
	 * @static 
	 */
	 public static function __construct($loader, $environment){
		 Illuminate\Config\Repository::__construct($loader, $environment);
	 }

	/**
	 * Determine if the given configuration value exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		return Illuminate\Config\Repository::has($key);
	 }

	/**
	 * Determine if a configuration group exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasGroup($key){
		return Illuminate\Config\Repository::hasGroup($key);
	 }

	/**
	 * Get the specified configuration value.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
		return Illuminate\Config\Repository::get($key, $default);
	 }

	/**
	 * Set a given configuration value.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function set($key, $value){
		 Illuminate\Config\Repository::set($key, $value);
	 }

	/**
	 * Register a package for cascading configuration.
	 *
	 * @param string  $package
	 * @param string  $hint
	 * @param string  $namespace
	 * @return void
	 * @static 
	 */
	 public static function package($package, $hint, $namespace = null){
		 Illuminate\Config\Repository::package($package, $hint, $namespace);
	 }

	/**
	 * Register an after load callback for a given namespace.
	 *
	 * @param string   $namespace
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function afterLoading($namespace, $callback){
		 Illuminate\Config\Repository::afterLoading($namespace, $callback);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string  $hint
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hint){
		 Illuminate\Config\Repository::addNamespace($namespace, $hint);
	 }

	/**
	 * Returns all registered namespaces with the config
	 * loader.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getNamespaces(){
		return Illuminate\Config\Repository::getNamespaces();
	 }

	/**
	 * Get the loader implementation.
	 *
	 * @return \Illuminate\Config\LoaderInterface
	 * @static 
	 */
	 public static function getLoader(){
		return Illuminate\Config\Repository::getLoader();
	 }

	/**
	 * Set the loader implementation.
	 *
	 * @param \Illuminate\Config\LoaderInterface  $loader
	 * @return void
	 * @static 
	 */
	 public static function setLoader($loader){
		 Illuminate\Config\Repository::setLoader($loader);
	 }

	/**
	 * Get the current configuration environment.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getEnvironment(){
		return Illuminate\Config\Repository::getEnvironment();
	 }

	/**
	 * Get the after load callback array.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getAfterLoadCallbacks(){
		return Illuminate\Config\Repository::getAfterLoadCallbacks();
	 }

	/**
	 * Get all of the configuration items.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getItems(){
		return Illuminate\Config\Repository::getItems();
	 }

	/**
	 * Determine if the given configuration option exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
		return Illuminate\Config\Repository::offsetExists($key);
	 }

	/**
	 * Get a configuration option.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function offsetGet($key){
		return Illuminate\Config\Repository::offsetGet($key);
	 }

	/**
	 * Set a configuration option.
	 *
	 * @param string  $key
	 * @param mixed  $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		 Illuminate\Config\Repository::offsetSet($key, $value);
	 }

	/**
	 * Unset a configuration option.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
		 Illuminate\Config\Repository::offsetUnset($key);
	 }

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function parseKey($key){
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		return Illuminate\Config\Repository::parseKey($key);
	 }

	/**
	 * Set the parsed value of a key.
	 *
	 * @param string  $key
	 * @param array   $parsed
	 * @return void
	 * @static 
	 */
	 public static function setParsedKey($key, $parsed){
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		 Illuminate\Config\Repository::setParsedKey($key, $parsed);
	 }

}

class Controller extends Illuminate\Routing\Controllers\Controller{
}

class Cookie extends Illuminate\Support\Facades\Cookie{
	/**
	 * Create a new cookie manager instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @param \Illuminate\Encryption\Encrypter  $encrypter
	 * @return void
	 * @static 
	 */
	 public static function __construct($request, $encrypter){
		 Illuminate\Cookie\CookieJar::__construct($request, $encrypter);
	 }

	/**
	 * Determine if a cookie exists and is not null.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		return Illuminate\Cookie\CookieJar::has($key);
	 }

	/**
	 * Get the value of the given cookie.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
		return Illuminate\Cookie\CookieJar::get($key, $default);
	 }

	/**
	 * Create a new cookie instance.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param int     $minutes
	 * @param string  $path
	 * @param string  $domain
	 * @param bool    $secure
	 * @param bool    $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
		return Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
	 }

	/**
	 * Create a cookie that lasts "forever" (five years).
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param string  $path
	 * @param string  $domain
	 * @param bool    $secure
	 * @param bool    $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
		return Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
	 }

	/**
	 * Expire the given cookie.
	 *
	 * @param string  $name
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function forget($name){
		return Illuminate\Cookie\CookieJar::forget($name);
	 }

	/**
	 * Set the default path and domain for the jar.
	 *
	 * @param string  $path
	 * @param string  $domain
	 * @return void
	 * @static 
	 */
	 public static function setDefaultPathAndDomain($path, $domain){
		 Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain);
	 }

	/**
	 * Get the request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		return Illuminate\Cookie\CookieJar::getRequest();
	 }

	/**
	 * Get the encrypter instance.
	 *
	 * @return \Illuminate\Encryption\Encrypter
	 * @static 
	 */
	 public static function getEncrypter(){
		return Illuminate\Cookie\CookieJar::getEncrypter();
	 }

}

class Crypt extends Illuminate\Support\Facades\Crypt{
	/**
	 * Create a new encrypter instance.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function __construct($key){
		 Illuminate\Encryption\Encrypter::__construct($key);
	 }

	/**
	 * Encrypt the given value.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function encrypt($value){
		return Illuminate\Encryption\Encrypter::encrypt($value);
	 }

	/**
	 * Decrypt the given value.
	 *
	 * @param string  $payload
	 * @return string
	 * @static 
	 */
	 public static function decrypt($payload){
		return Illuminate\Encryption\Encrypter::decrypt($payload);
	 }

	/**
	 * Set the encryption key.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function setKey($key){
		 Illuminate\Encryption\Encrypter::setKey($key);
	 }

	/**
	 * Set the encryption cipher.
	 *
	 * @param string  $cipher
	 * @return void
	 * @static 
	 */
	 public static function setCipher($cipher){
		 Illuminate\Encryption\Encrypter::setCipher($cipher);
	 }

	/**
	 * Set the encryption mode.
	 *
	 * @param string  $mode
	 * @return void
	 * @static 
	 */
	 public static function setMode($mode){
		 Illuminate\Encryption\Encrypter::setMode($mode);
	 }

}

class DB extends Illuminate\Support\Facades\DB{
	/**
	 * Create a new database manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @param \Illuminate\Database\Connectors\ConnectionFactory  $factory
	 * @return void
	 * @static 
	 */
	 public static function __construct($app, $factory){
		 Illuminate\Database\DatabaseManager::__construct($app, $factory);
	 }

	/**
	 * Get a database connection instance.
	 *
	 * @param string  $name
	 * @return \Illuminate\Database\Connection
	 * @static 
	 */
	 public static function connection($name = null){
		return Illuminate\Database\DatabaseManager::connection($name);
	 }

	/**
	 * Reconnect to the given database.
	 *
	 * @param string  $name
	 * @return \Illuminate\Database\Connection
	 * @static 
	 */
	 public static function reconnect($name = null){
		return Illuminate\Database\DatabaseManager::reconnect($name);
	 }

	/**
	 * Disconnect from the given database.
	 *
	 * @param string  $name
	 * @return void
	 * @static 
	 */
	 public static function disconnect($name = null){
		 Illuminate\Database\DatabaseManager::disconnect($name);
	 }

	/**
	 * Get the default connection name.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getDefaultConnection(){
		return Illuminate\Database\DatabaseManager::getDefaultConnection();
	 }

	/**
	 * Set the default connection name.
	 *
	 * @param string  $name
	 * @return void
	 * @static 
	 */
	 public static function setDefaultConnection($name){
		 Illuminate\Database\DatabaseManager::setDefaultConnection($name);
	 }

	/**
	 * Register an extension connection resolver.
	 *
	 * @param string    $name
	 * @param callable  $resolver
	 * @return void
	 * @static 
	 */
	 public static function extend($name, $resolver){
		 Illuminate\Database\DatabaseManager::extend($name, $resolver);
	 }

	/**
	 * Return all of the created connections.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getConnections(){
		return Illuminate\Database\DatabaseManager::getConnections();
	 }

	/**
	 * Dynamically pass methods to the default connection.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		return Illuminate\Database\DatabaseManager::__call($method, $parameters);
	 }

	/**
	 * Get a schema builder instance for the connection.
	 *
	 * @return \Illuminate\Database\Schema\MySqlBuilder
	 * @static 
	 */
	 public static function getSchemaBuilder(){
		return Illuminate\Database\MySqlConnection::getSchemaBuilder();
	 }

	/**
	 * Set the query grammar to the default implementation.
	 *
	 * @return void
	 * @static 
	 */
	 public static function useDefaultQueryGrammar(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
	 }

	/**
	 * Set the schema grammar to the default implementation.
	 *
	 * @return void
	 * @static 
	 */
	 public static function useDefaultSchemaGrammar(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
	 }

	/**
	 * Set the query post processor to the default implementation.
	 *
	 * @return void
	 * @static 
	 */
	 public static function useDefaultPostProcessor(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
	 }

	/**
	 * Begin a fluent query against a database table.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Query\Builder
	 * @static 
	 */
	 public static function table($table){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::table($table);
	 }

	/**
	 * Get a new raw query expression.
	 *
	 * @param mixed  $value
	 * @return \Illuminate\Database\Query\Expression
	 * @static 
	 */
	 public static function raw($value){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::raw($value);
	 }

	/**
	 * Run a select statement and return a single result.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return mixed
	 * @static 
	 */
	 public static function selectOne($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::selectOne($query, $bindings);
	 }

	/**
	 * Run a select statement against the database.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return array
	 * @static 
	 */
	 public static function select($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::select($query, $bindings);
	 }

	/**
	 * Run an insert statement against the database.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return bool
	 * @static 
	 */
	 public static function insert($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::insert($query, $bindings);
	 }

	/**
	 * Run an update statement against the database.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return int
	 * @static 
	 */
	 public static function update($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::update($query, $bindings);
	 }

	/**
	 * Run a delete statement against the database.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return int
	 * @static 
	 */
	 public static function delete($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::delete($query, $bindings);
	 }

	/**
	 * Execute an SQL statement and return the boolean result.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return bool
	 * @static 
	 */
	 public static function statement($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::statement($query, $bindings);
	 }

	/**
	 * Run an SQL statement and get the number of rows affected.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return int
	 * @static 
	 */
	 public static function affectingStatement($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
	 }

	/**
	 * Run a raw, unprepared query against the PDO connection.
	 *
	 * @param string  $query
	 * @return bool
	 * @static 
	 */
	 public static function unprepared($query){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::unprepared($query);
	 }

	/**
	 * Prepare the query bindings for execution.
	 *
	 * @param array  $bindings
	 * @return array
	 * @static 
	 */
	 public static function prepareBindings($bindings){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::prepareBindings($bindings);
	 }

	/**
	 * Execute a Closure within a transaction.
	 *
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function transaction($callback){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::transaction($callback);
	 }

	/**
	 * Start a new database transaction.
	 *
	 * @return void
	 * @static 
	 */
	 public static function beginTransaction(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::beginTransaction();
	 }

	/**
	 * Commit the active database transaction.
	 *
	 * @return void
	 * @static 
	 */
	 public static function commit(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::commit();
	 }

	/**
	 * Rollback the active database transaction.
	 *
	 * @return void
	 * @static 
	 */
	 public static function rollBack(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::rollBack();
	 }

	/**
	 * Execute the given callback in "dry run" mode.
	 *
	 * @param Closure  $callback
	 * @return array
	 * @static 
	 */
	 public static function pretend($callback){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::pretend($callback);
	 }

	/**
	 * Log a query in the connection's query log.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @param $time
	 * @return void
	 * @static 
	 */
	 public static function logQuery($query, $bindings, $time = null){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
	 }

	/**
	 * Register a database query listener with the connection.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function listen($callback){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::listen($callback);
	 }

	/**
	 * Get a Doctrine Schema Column instance.
	 *
	 * @param string  $table
	 * @param string  $column
	 * @return \Doctrine\DBAL\Schema\Column
	 * @static 
	 */
	 public static function getDoctrineColumn($table, $column){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
	 }

	/**
	 * Get the Doctrine DBAL schema manager for the connection.
	 *
	 * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
	 * @static 
	 */
	 public static function getDoctrineSchemaManager(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
	 }

	/**
	 * Get the Doctrine DBAL database connection instance.
	 *
	 * @return \Doctrine\DBAL\Connection
	 * @static 
	 */
	 public static function getDoctrineConnection(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getDoctrineConnection();
	 }

	/**
	 * Get the currently used PDO connection.
	 *
	 * @return PDO
	 * @static 
	 */
	 public static function getPdo(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getPdo();
	 }

	/**
	 * Get the database connection name.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getName(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getName();
	 }

	/**
	 * Get an option from the configuration options.
	 *
	 * @param string  $option
	 * @return mixed
	 * @static 
	 */
	 public static function getConfig($option){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getConfig($option);
	 }

	/**
	 * Get the PDO driver name.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getDriverName(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getDriverName();
	 }

	/**
	 * Get the query grammar used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Grammars\Grammar
	 * @static 
	 */
	 public static function getQueryGrammar(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getQueryGrammar();
	 }

	/**
	 * Set the query grammar used by the connection.
	 *
	 * @param \Illuminate\Database\Query\Grammars\Grammar
	 * @return void
	 * @static 
	 */
	 public static function setQueryGrammar($grammar){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
	 }

	/**
	 * Get the schema grammar used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Grammars\Grammar
	 * @static 
	 */
	 public static function getSchemaGrammar(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getSchemaGrammar();
	 }

	/**
	 * Set the schema grammar used by the connection.
	 *
	 * @param \Illuminate\Database\Schema\Grammars\Grammar
	 * @return void
	 * @static 
	 */
	 public static function setSchemaGrammar($grammar){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
	 }

	/**
	 * Get the query post processor used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Processors\Processor
	 * @static 
	 */
	 public static function getPostProcessor(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getPostProcessor();
	 }

	/**
	 * Set the query post processor used by the connection.
	 *
	 * @param \Illuminate\Database\Query\Processors\Processor
	 * @return void
	 * @static 
	 */
	 public static function setPostProcessor($processor){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setPostProcessor($processor);
	 }

	/**
	 * Get the event dispatcher used by the connection.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getEventDispatcher(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getEventDispatcher();
	 }

	/**
	 * Set the event dispatcher instance on the connection.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static 
	 */
	 public static function setEventDispatcher($events){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setEventDispatcher($events);
	 }

	/**
	 * Get the paginator environment instance.
	 *
	 * @return \Illuminate\Pagination\Environment
	 * @static 
	 */
	 public static function getPaginator(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getPaginator();
	 }

	/**
	 * Set the pagination environment instance.
	 *
	 * @param \Illuminate\Pagination\Environment|\Closure  $paginator
	 * @return void
	 * @static 
	 */
	 public static function setPaginator($paginator){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setPaginator($paginator);
	 }

	/**
	 * Get the cache manager instance.
	 *
	 * @return \Illuminate\Cache\CacheManager
	 * @static 
	 */
	 public static function getCacheManager(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getCacheManager();
	 }

	/**
	 * Set the cache manager instance on the connection.
	 *
	 * @param \Illuminate\Cache\CacheManager|\Closure  $cache
	 * @return void
	 * @static 
	 */
	 public static function setCacheManager($cache){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setCacheManager($cache);
	 }

	/**
	 * Determine if the connection in a "dry run".
	 *
	 * @return bool
	 * @static 
	 */
	 public static function pretending(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::pretending();
	 }

	/**
	 * Get the default fetch mode for the connection.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getFetchMode(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getFetchMode();
	 }

	/**
	 * Set the default fetch mode for the connection.
	 *
	 * @param int  $fetchMode
	 * @return int
	 * @static 
	 */
	 public static function setFetchMode($fetchMode){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::setFetchMode($fetchMode);
	 }

	/**
	 * Get the connection query log.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getQueryLog(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getQueryLog();
	 }

	/**
	 * Clear the query log.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flushQueryLog(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::flushQueryLog();
	 }

	/**
	 * Enable the query log on the connection.
	 *
	 * @return void
	 * @static 
	 */
	 public static function enableQueryLog(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::enableQueryLog();
	 }

	/**
	 * Disable the query log on the connection.
	 *
	 * @return void
	 * @static 
	 */
	 public static function disableQueryLog(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::disableQueryLog();
	 }

	/**
	 * Get the name of the connected database.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getDatabaseName(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getDatabaseName();
	 }

	/**
	 * Set the name of the connected database.
	 *
	 * @param string  $database
	 * @return string
	 * @static 
	 */
	 public static function setDatabaseName($database){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::setDatabaseName($database);
	 }

	/**
	 * Get the table prefix for the connection.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getTablePrefix(){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::getTablePrefix();
	 }

	/**
	 * Set the table prefix in use by the connection.
	 *
	 * @param string  $prefix
	 * @return void
	 * @static 
	 */
	 public static function setTablePrefix($prefix){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
	 }

	/**
	 * Set the table prefix and return the grammar.
	 *
	 * @param \Illuminate\Database\Grammar  $grammar
	 * @return \Illuminate\Database\Grammar
	 * @static 
	 */
	 public static function withTablePrefix($grammar){
		//Method inherited from Illuminate\Database\Connection
		return Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
	 }

}

class Eloquent extends Illuminate\Database\Eloquent\Model{
	/**
	 * Find a model by its primary key.
	 *
	 * @param array  $id
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|Collection|static
	 * @static 
	 */
	 public static function findMany($id, $columns = array()){
		return Illuminate\Database\Eloquent\Builder::findMany($id, $columns);
	 }

	/**
	 * Execute the query and get the first result.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|static|null
	 * @static 
	 */
	 public static function first($columns = array()){
		return Illuminate\Database\Eloquent\Builder::first($columns);
	 }

	/**
	 * Execute the query and get the first result or throw an exception.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|static
	 * @static 
	 */
	 public static function firstOrFail($columns = array()){
		return Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
	 }

	/**
	 * Execute the query as a "select" statement.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 * @static 
	 */
	 public static function get($columns = array()){
		return Illuminate\Database\Eloquent\Builder::get($columns);
	 }

	/**
	 * Pluck a single column from the database.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function pluck($column){
		return Illuminate\Database\Eloquent\Builder::pluck($column);
	 }

	/**
	 * Chunk the results of the query.
	 *
	 * @param int  $count
	 * @param callable  $callback
	 * @return void
	 * @static 
	 */
	 public static function chunk($count, $callback){
		 Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
	 }

	/**
	 * Get an array with the values of a given column.
	 *
	 * @param string  $column
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function lists($column, $key = null){
		return Illuminate\Database\Eloquent\Builder::lists($column, $key);
	 }

	/**
	 * Get a paginator for the "select" statement.
	 *
	 * @param int    $perPage
	 * @param array  $columns
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public static function paginate($perPage = null, $columns = array()){
		return Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns);
	 }

	/**
	 * Increment a column's value by a given amount.
	 *
	 * @param string  $column
	 * @param int     $amount
	 * @param array   $extra
	 * @return int
	 * @static 
	 */
	 public static function increment($column, $amount = 1, $extra = array()){
		return Illuminate\Database\Eloquent\Builder::increment($column, $amount, $extra);
	 }

	/**
	 * Decrement a column's value by a given amount.
	 *
	 * @param string  $column
	 * @param int     $amount
	 * @param array   $extra
	 * @return int
	 * @static 
	 */
	 public static function decrement($column, $amount = 1, $extra = array()){
		return Illuminate\Database\Eloquent\Builder::decrement($column, $amount, $extra);
	 }

	/**
	 * Get the hydrated models without eager loading.
	 *
	 * @param array  $columns
	 * @return array|static[]
	 * @static 
	 */
	 public static function getModels($columns = array()){
		return Illuminate\Database\Eloquent\Builder::getModels($columns);
	 }

	/**
	 * Eager load the relationships for the models.
	 *
	 * @param array  $models
	 * @return array
	 * @static 
	 */
	 public static function eagerLoadRelations($models){
		return Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
	 }

	/**
	 * Add a relationship count condition to the query.
	 *
	 * @param string  $relation
	 * @param string  $operator
	 * @param int     $count
	 * @param string  $boolean
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static 
	 */
	 public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and'){
		return Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean);
	 }

	/**
	 * Add a relationship count condition to the query with an "or".
	 *
	 * @param string  $relation
	 * @param string  $operator
	 * @param int     $count
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static 
	 */
	 public static function orHas($relation, $operator = '>=', $count = 1){
		return Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
	 }

	/**
	 * Get the underlying query builder instance.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function getQuery(){
		return Illuminate\Database\Eloquent\Builder::getQuery();
	 }

	/**
	 * Set the underlying query builder instance.
	 *
	 * @param \Illuminate\Database\Query\Builder  $query
	 * @return void
	 * @static 
	 */
	 public static function setQuery($query){
		 Illuminate\Database\Eloquent\Builder::setQuery($query);
	 }

	/**
	 * Get the relationships being eagerly loaded.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getEagerLoads(){
		return Illuminate\Database\Eloquent\Builder::getEagerLoads();
	 }

	/**
	 * Set the relationships being eagerly loaded.
	 *
	 * @param array  $eagerLoad
	 * @return void
	 * @static 
	 */
	 public static function setEagerLoads($eagerLoad){
		 Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
	 }

	/**
	 * Get the model instance being queried.
	 *
	 * @return \Illuminate\Database\Eloquent\Model
	 * @static 
	 */
	 public static function getModel(){
		return Illuminate\Database\Eloquent\Builder::getModel();
	 }

	/**
	 * Set a model instance for the model being queried.
	 *
	 * @param \Illuminate\Database\Eloquent\Model  $model
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @static 
	 */
	 public static function setModel($model){
		return Illuminate\Database\Eloquent\Builder::setModel($model);
	 }

	/**
	 * Set the columns to be selected.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function select($columns = array()){
		return Illuminate\Database\Query\Builder::select($columns);
	 }

	/**
	 * Add a new select column to the query.
	 *
	 * @param mixed  $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function addSelect($column){
		return Illuminate\Database\Query\Builder::addSelect($column);
	 }

	/**
	 * Force the query to only return distinct results.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function distinct(){
		return Illuminate\Database\Query\Builder::distinct();
	 }

	/**
	 * Set the table which the query is targeting.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function from($table){
		return Illuminate\Database\Query\Builder::from($table);
	 }

	/**
	 * Add a join clause to the query.
	 *
	 * @param string  $table
	 * @param string  $first
	 * @param string  $operator
	 * @param string  $second
	 * @param string  $type
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function join($table, $first, $operator = null, $second = null, $type = 'inner'){
		return Illuminate\Database\Query\Builder::join($table, $first, $operator, $second, $type);
	 }

	/**
	 * Add a left join to the query.
	 *
	 * @param string  $table
	 * @param string  $first
	 * @param string  $operator
	 * @param string  $second
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function leftJoin($table, $first, $operator = null, $second = null){
		return Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
	 }

	/**
	 * Add a basic where clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param mixed   $value
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function where($column, $operator = null, $value = null, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::where($column, $operator, $value, $boolean);
	 }

	/**
	 * Add an "or where" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param mixed   $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhere($column, $operator = null, $value = null){
		return Illuminate\Database\Query\Builder::orWhere($column, $operator, $value);
	 }

	/**
	 * Add a raw where clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
	 }

	/**
	 * Add a raw or where clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereRaw($sql, $bindings = array()){
		return Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
	 }

	/**
	 * Add a where between statement to the query.
	 *
	 * @param string  $column
	 * @param array   $values
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereBetween($column, $values, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean);
	 }

	/**
	 * Add an or where between statement to the query.
	 *
	 * @param string  $column
	 * @param array   $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereBetween($column, $values){
		return Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
	 }

	/**
	 * Add a nested where statement to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNested($callback, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
	 }

	/**
	 * Add an exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @param bool     $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereExists($callback, $boolean = 'and', $not = false){
		return Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
	 }

	/**
	 * Add an or exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param bool     $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereExists($callback, $not = false){
		return Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotExists($callback, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param \Closure  $callback
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotExists($callback){
		return Illuminate\Database\Query\Builder::orWhereNotExists($callback);
	 }

	/**
	 * Add a "where in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @param string  $boolean
	 * @param bool    $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereIn($column, $values, $boolean = 'and', $not = false){
		return Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
	 }

	/**
	 * Add an "or where in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereIn($column, $values){
		return Illuminate\Database\Query\Builder::orWhereIn($column, $values);
	 }

	/**
	 * Add a "where not in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotIn($column, $values, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
	 }

	/**
	 * Add an "or where not in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotIn($column, $values){
		return Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
	 }

	/**
	 * Add a "where null" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $boolean
	 * @param bool    $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNull($column, $boolean = 'and', $not = false){
		return Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
	 }

	/**
	 * Add an "or where null" clause to the query.
	 *
	 * @param string  $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNull($column){
		return Illuminate\Database\Query\Builder::orWhereNull($column);
	 }

	/**
	 * Add a "where not null" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotNull($column, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
	 }

	/**
	 * Add an "or where not null" clause to the query.
	 *
	 * @param string  $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotNull($column){
		return Illuminate\Database\Query\Builder::orWhereNotNull($column);
	 }

	/**
	 * Handles dynamic "where" clauses to the query.
	 *
	 * @param string  $method
	 * @param string  $parameters
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function dynamicWhere($method, $parameters){
		return Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
	 }

	/**
	 * Add a "group by" clause to the query.
	 *
	 * @param dynamic  $columns
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function groupBy(){
		return Illuminate\Database\Query\Builder::groupBy();
	 }

	/**
	 * Add a "having" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param string  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function having($column, $operator = null, $value = null){
		return Illuminate\Database\Query\Builder::having($column, $operator, $value);
	 }

	/**
	 * Add a raw having clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
		return Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
	 }

	/**
	 * Add a raw or having clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orHavingRaw($sql, $bindings = array()){
		return Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
	 }

	/**
	 * Add an "order by" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $direction
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orderBy($column, $direction = 'asc'){
		return Illuminate\Database\Query\Builder::orderBy($column, $direction);
	 }

	/**
	 * Add a raw "order by" clause to the query.
	 *
	 * @param string  $sql
	 * @param array  $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orderByRaw($sql, $bindings = array()){
		return Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
	 }

	/**
	 * Set the "offset" value of the query.
	 *
	 * @param int  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function offset($value){
		return Illuminate\Database\Query\Builder::offset($value);
	 }

	/**
	 * Alias to set the "offset" value of the query.
	 *
	 * @param int  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function skip($value){
		return Illuminate\Database\Query\Builder::skip($value);
	 }

	/**
	 * Set the "limit" value of the query.
	 *
	 * @param int  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function limit($value){
		return Illuminate\Database\Query\Builder::limit($value);
	 }

	/**
	 * Alias to set the "limit" value of the query.
	 *
	 * @param int  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function take($value){
		return Illuminate\Database\Query\Builder::take($value);
	 }

	/**
	 * Set the limit and offset for a given page.
	 *
	 * @param int  $page
	 * @param int  $perPage
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function forPage($page, $perPage = 15){
		return Illuminate\Database\Query\Builder::forPage($page, $perPage);
	 }

	/**
	 * Add a union statement to the query.
	 *
	 * @param \Illuminate\Database\Query\Builder|\Closure  $query
	 * @param bool $all
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function union($query, $all = false){
		return Illuminate\Database\Query\Builder::union($query, $all);
	 }

	/**
	 * Add a union all statement to the query.
	 *
	 * @param \Illuminate\Database\Query\Builder|\Closure  $query
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function unionAll($query){
		return Illuminate\Database\Query\Builder::unionAll($query);
	 }

	/**
	 * Get the SQL representation of the query.
	 *
	 * @return string
	 * @static 
	 */
	 public static function toSql(){
		return Illuminate\Database\Query\Builder::toSql();
	 }

	/**
	 * Indicate that the query results should be cached.
	 *
	 * @param int  $minutes
	 * @param string  $key
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function remember($minutes, $key = null){
		return Illuminate\Database\Query\Builder::remember($minutes, $key);
	 }

	/**
	 * Execute the query as a fresh "select" statement.
	 *
	 * @param array  $columns
	 * @return array|static[]
	 * @static 
	 */
	 public static function getFresh($columns = array()){
		return Illuminate\Database\Query\Builder::getFresh($columns);
	 }

	/**
	 * Execute the query as a cached "select" statement.
	 *
	 * @param array  $columns
	 * @return array
	 * @static 
	 */
	 public static function getCached($columns = array()){
		return Illuminate\Database\Query\Builder::getCached($columns);
	 }

	/**
	 * Get a unique cache key for the complete query.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getCacheKey(){
		return Illuminate\Database\Query\Builder::getCacheKey();
	 }

	/**
	 * Generate the unique cache key for the query.
	 *
	 * @return string
	 * @static 
	 */
	 public static function generateCacheKey(){
		return Illuminate\Database\Query\Builder::generateCacheKey();
	 }

	/**
	 * Concatenate values of a given column as a string.
	 *
	 * @param string  $column
	 * @param string  $glue
	 * @return string
	 * @static 
	 */
	 public static function implode($column, $glue = null){
		return Illuminate\Database\Query\Builder::implode($column, $glue);
	 }

	/**
	 * Build a paginator instance from a raw result array.
	 *
	 * @param \Illuminate\Pagination\Environment  $paginator
	 * @param array  $results
	 * @param int    $perPage
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public static function buildRawPaginator($paginator, $results, $perPage){
		return Illuminate\Database\Query\Builder::buildRawPaginator($paginator, $results, $perPage);
	 }

	/**
	 * Get the count of the total records for pagination.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getPaginationCount(){
		return Illuminate\Database\Query\Builder::getPaginationCount();
	 }

	/**
	 * Determine if any rows exist for the current query.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function exists(){
		return Illuminate\Database\Query\Builder::exists();
	 }

	/**
	 * Retrieve the "count" result of the query.
	 *
	 * @param string  $column
	 * @return int
	 * @static 
	 */
	 public static function count($column = '*'){
		return Illuminate\Database\Query\Builder::count($column);
	 }

	/**
	 * Retrieve the minimum value of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function min($column){
		return Illuminate\Database\Query\Builder::min($column);
	 }

	/**
	 * Retrieve the maximum value of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function max($column){
		return Illuminate\Database\Query\Builder::max($column);
	 }

	/**
	 * Retrieve the sum of the values of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function sum($column){
		return Illuminate\Database\Query\Builder::sum($column);
	 }

	/**
	 * Retrieve the average of the values of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function avg($column){
		return Illuminate\Database\Query\Builder::avg($column);
	 }

	/**
	 * Execute an aggregate function on the database.
	 *
	 * @param string  $function
	 * @param array   $columns
	 * @return mixed
	 * @static 
	 */
	 public static function aggregate($function, $columns = array()){
		return Illuminate\Database\Query\Builder::aggregate($function, $columns);
	 }

	/**
	 * Insert a new record into the database.
	 *
	 * @param array  $values
	 * @return bool
	 * @static 
	 */
	 public static function insert($values){
		return Illuminate\Database\Query\Builder::insert($values);
	 }

	/**
	 * Insert a new record and get the value of the primary key.
	 *
	 * @param array   $values
	 * @param string  $sequence
	 * @return int
	 * @static 
	 */
	 public static function insertGetId($values, $sequence = null){
		return Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
	 }

	/**
	 * Run a truncate statement on the table.
	 *
	 * @return void
	 * @static 
	 */
	 public static function truncate(){
		 Illuminate\Database\Query\Builder::truncate();
	 }

	/**
	 * Merge an array of where clauses and bindings.
	 *
	 * @param array  $wheres
	 * @param array  $bindings
	 * @return void
	 * @static 
	 */
	 public static function mergeWheres($wheres, $bindings){
		 Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
	 }

	/**
	 * Create a raw database expression.
	 *
	 * @param mixed  $value
	 * @return \Illuminate\Database\Query\Expression
	 * @static 
	 */
	 public static function raw($value){
		return Illuminate\Database\Query\Builder::raw($value);
	 }

	/**
	 * Get the current query value bindings.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getBindings(){
		return Illuminate\Database\Query\Builder::getBindings();
	 }

	/**
	 * Set the bindings on the query builder.
	 *
	 * @param array  $bindings
	 * @return \Illuminate\Database\Query\Builder
	 * @static 
	 */
	 public static function setBindings($bindings){
		return Illuminate\Database\Query\Builder::setBindings($bindings);
	 }

	/**
	 * Merge an array of bindings into our bindings.
	 *
	 * @param \Illuminate\Database\Query\Builder  $query
	 * @return \Illuminate\Database\Query\Builder
	 * @static 
	 */
	 public static function mergeBindings($query){
		return Illuminate\Database\Query\Builder::mergeBindings($query);
	 }

	/**
	 * Get the database query processor instance.
	 *
	 * @return \Illuminate\Database\Query\Processors\Processor
	 * @static 
	 */
	 public static function getProcessor(){
		return Illuminate\Database\Query\Builder::getProcessor();
	 }

	/**
	 * Get the query grammar instance.
	 *
	 * @return \Illuminate\Database\Grammar
	 * @static 
	 */
	 public static function getGrammar(){
		return Illuminate\Database\Query\Builder::getGrammar();
	 }

}

class Event extends Illuminate\Support\Facades\Event{
	/**
	 * Create a new event dispatcher instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function __construct($container = null){
		 Illuminate\Events\Dispatcher::__construct($container);
	 }

	/**
	 * Register an event listener with the dispatcher.
	 *
	 * @param string  $event
	 * @param mixed   $listener
	 * @param int     $priority
	 * @return void
	 * @static 
	 */
	 public static function listen($event, $listener, $priority = 0){
		 Illuminate\Events\Dispatcher::listen($event, $listener, $priority);
	 }

	/**
	 * Determine if a given event has listeners.
	 *
	 * @param string  $eventName
	 * @return bool
	 * @static 
	 */
	 public static function hasListeners($eventName){
		return Illuminate\Events\Dispatcher::hasListeners($eventName);
	 }

	/**
	 * Register a queued event and payload.
	 *
	 * @param string  $event
	 * @param array   $payload
	 * @return void
	 * @static 
	 */
	 public static function queue($event, $payload = array()){
		 Illuminate\Events\Dispatcher::queue($event, $payload);
	 }

	/**
	 * Register an event subscriber with the dispatcher.
	 *
	 * @param string  $subscriber
	 * @return void
	 * @static 
	 */
	 public static function subscribe($subscriber){
		 Illuminate\Events\Dispatcher::subscribe($subscriber);
	 }

	/**
	 * Fire an event until the first non-null response is returned.
	 *
	 * @param string  $event
	 * @param array   $payload
	 * @return mixed
	 * @static 
	 */
	 public static function until($event, $payload = array()){
		return Illuminate\Events\Dispatcher::until($event, $payload);
	 }

	/**
	 * Flush a set of queued events.
	 *
	 * @param string  $event
	 * @return void
	 * @static 
	 */
	 public static function flush($event){
		 Illuminate\Events\Dispatcher::flush($event);
	 }

	/**
	 * Fire an event and call the listeners.
	 *
	 * @param string  $event
	 * @param mixed   $payload
	 * @param bool    $halt
	 * @return array|null
	 * @static 
	 */
	 public static function fire($event, $payload = array(), $halt = false){
		return Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
	 }

	/**
	 * Get all of the listeners for a given event name.
	 *
	 * @param string  $eventName
	 * @return array
	 * @static 
	 */
	 public static function getListeners($eventName){
		return Illuminate\Events\Dispatcher::getListeners($eventName);
	 }

	/**
	 * Register an event listener with the dispatcher.
	 *
	 * @param mixed   $listener
	 * @return mixed
	 * @static 
	 */
	 public static function makeListener($listener){
		return Illuminate\Events\Dispatcher::makeListener($listener);
	 }

	/**
	 * Create a class based listener using the IoC container.
	 *
	 * @param mixed    $listener
	 * @return \Closure
	 * @static 
	 */
	 public static function createClassListener($listener){
		return Illuminate\Events\Dispatcher::createClassListener($listener);
	 }

	/**
	 * Remove a set of listeners from the dispatcher.
	 *
	 * @param string  $event
	 * @return void
	 * @static 
	 */
	 public static function forget($event){
		 Illuminate\Events\Dispatcher::forget($event);
	 }

}

class File extends Illuminate\Support\Facades\File{
	/**
	 * Determine if a file exists.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function exists($path){
		return Illuminate\Filesystem\Filesystem::exists($path);
	 }

	/**
	 * Get the contents of a file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function get($path){
		return Illuminate\Filesystem\Filesystem::get($path);
	 }

	/**
	 * Get the contents of a remote file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function getRemote($path){
		return Illuminate\Filesystem\Filesystem::getRemote($path);
	 }

	/**
	 * Get the returned value of a file.
	 *
	 * @param string  $path
	 * @return mixed
	 * @static 
	 */
	 public static function getRequire($path){
		return Illuminate\Filesystem\Filesystem::getRequire($path);
	 }

	/**
	 * Require the given file once.
	 *
	 * @param string  $file
	 * @return void
	 * @static 
	 */
	 public static function requireOnce($file){
		 Illuminate\Filesystem\Filesystem::requireOnce($file);
	 }

	/**
	 * Write the contents of a file.
	 *
	 * @param string  $path
	 * @param string  $contents
	 * @return int
	 * @static 
	 */
	 public static function put($path, $contents){
		return Illuminate\Filesystem\Filesystem::put($path, $contents);
	 }

	/**
	 * Prepend to a file.
	 *
	 * @param string  $path
	 * @param string  $data
	 * @return int
	 * @static 
	 */
	 public static function prepend($path, $data){
		return Illuminate\Filesystem\Filesystem::prepend($path, $data);
	 }

	/**
	 * Append to a file.
	 *
	 * @param string  $path
	 * @param string  $data
	 * @return int
	 * @static 
	 */
	 public static function append($path, $data){
		return Illuminate\Filesystem\Filesystem::append($path, $data);
	 }

	/**
	 * Delete the file at a given path.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function delete($path){
		return Illuminate\Filesystem\Filesystem::delete($path);
	 }

	/**
	 * Move a file to a new location.
	 *
	 * @param string  $path
	 * @param string  $target
	 * @return bool
	 * @static 
	 */
	 public static function move($path, $target){
		return Illuminate\Filesystem\Filesystem::move($path, $target);
	 }

	/**
	 * Copy a file to a new location.
	 *
	 * @param string  $path
	 * @param string  $target
	 * @return bool
	 * @static 
	 */
	 public static function copy($path, $target){
		return Illuminate\Filesystem\Filesystem::copy($path, $target);
	 }

	/**
	 * Extract the file extension from a file path.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function extension($path){
		return Illuminate\Filesystem\Filesystem::extension($path);
	 }

	/**
	 * Get the file type of a given file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function type($path){
		return Illuminate\Filesystem\Filesystem::type($path);
	 }

	/**
	 * Get the file size of a given file.
	 *
	 * @param string  $path
	 * @return int
	 * @static 
	 */
	 public static function size($path){
		return Illuminate\Filesystem\Filesystem::size($path);
	 }

	/**
	 * Get the file's last modification time.
	 *
	 * @param string  $path
	 * @return int
	 * @static 
	 */
	 public static function lastModified($path){
		return Illuminate\Filesystem\Filesystem::lastModified($path);
	 }

	/**
	 * Determine if the given path is a directory.
	 *
	 * @param string  $directory
	 * @return bool
	 * @static 
	 */
	 public static function isDirectory($directory){
		return Illuminate\Filesystem\Filesystem::isDirectory($directory);
	 }

	/**
	 * Determine if the given path is writable.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isWritable($path){
		return Illuminate\Filesystem\Filesystem::isWritable($path);
	 }

	/**
	 * Determine if the given path is a file.
	 *
	 * @param string  $file
	 * @return bool
	 * @static 
	 */
	 public static function isFile($file){
		return Illuminate\Filesystem\Filesystem::isFile($file);
	 }

	/**
	 * Find path names matching a given pattern.
	 *
	 * @param string  $pattern
	 * @param int     $flags
	 * @return array
	 * @static 
	 */
	 public static function glob($pattern, $flags = 0){
		return Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
	 }

	/**
	 * Get an array of all files in a directory.
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function files($directory){
		return Illuminate\Filesystem\Filesystem::files($directory);
	 }

	/**
	 * Get all of the files from the given directory (recursive).
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function allFiles($directory){
		return Illuminate\Filesystem\Filesystem::allFiles($directory);
	 }

	/**
	 * Get all of the directories within a given directory.
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function directories($directory){
		return Illuminate\Filesystem\Filesystem::directories($directory);
	 }

	/**
	 * Create a directory.
	 *
	 * @param string  $path
	 * @param int     $mode
	 * @param bool    $recursive
	 * @return bool
	 * @static 
	 */
	 public static function makeDirectory($path, $mode = 511, $recursive = false){
		return Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive);
	 }

	/**
	 * Copy a directory from one location to another.
	 *
	 * @param string  $directory
	 * @param string  $destination
	 * @param int     $options
	 * @return bool
	 * @static 
	 */
	 public static function copyDirectory($directory, $destination, $options = null){
		return Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
	 }

	/**
	 * Recursively delete a directory.
	 * 
	 * The directory itself may be optionally preserved.
	 *
	 * @param string  $directory
	 * @param bool    $preserve
	 * @return bool
	 * @static 
	 */
	 public static function deleteDirectory($directory, $preserve = false){
		return Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
	 }

	/**
	 * Empty the specified directory of all files and folders.
	 *
	 * @param string  $directory
	 * @return bool
	 * @static 
	 */
	 public static function cleanDirectory($directory){
		return Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
	 }

}

class Form extends Illuminate\Support\Facades\Form{
	/**
	 * Create a new form builder instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $url
	 * @param \Illuminate\Html\HtmlBuilder  $html
	 * @param string  $csrfToken
	 * @return void
	 * @static 
	 */
	 public static function __construct($html, $url, $csrfToken){
		 Illuminate\Html\FormBuilder::__construct($html, $url, $csrfToken);
	 }

	/**
	 * Open up a new HTML form.
	 *
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function open($options = array()){
		return Illuminate\Html\FormBuilder::open($options);
	 }

	/**
	 * Create a new model based form builder.
	 *
	 * @param mixed  $model
	 * @param array  $options
	 * @return string
	 * @static 
	 */
	 public static function model($model, $options = array()){
		return Illuminate\Html\FormBuilder::model($model, $options);
	 }

	/**
	 * Close the current form.
	 *
	 * @return string
	 * @static 
	 */
	 public static function close(){
		return Illuminate\Html\FormBuilder::close();
	 }

	/**
	 * Generate a hidden field with the current CSRF token.
	 *
	 * @return string
	 * @static 
	 */
	 public static function token(){
		return Illuminate\Html\FormBuilder::token();
	 }

	/**
	 * Create a form label element.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function label($name, $value = null, $options = array()){
		return Illuminate\Html\FormBuilder::label($name, $value, $options);
	 }

	/**
	 * Create a form input field.
	 *
	 * @param string  $type
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function input($type, $name, $value = null, $options = array()){
		return Illuminate\Html\FormBuilder::input($type, $name, $value, $options);
	 }

	/**
	 * Create a text input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function text($name, $value = null, $options = array()){
		return Illuminate\Html\FormBuilder::text($name, $value, $options);
	 }

	/**
	 * Create a password input field.
	 *
	 * @param string  $name
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function password($name, $options = array()){
		return Illuminate\Html\FormBuilder::password($name, $options);
	 }

	/**
	 * Create a hidden input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function hidden($name, $value = null, $options = array()){
		return Illuminate\Html\FormBuilder::hidden($name, $value, $options);
	 }

	/**
	 * Create an e-mail input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function email($name, $value = null, $options = array()){
		return Illuminate\Html\FormBuilder::email($name, $value, $options);
	 }

	/**
	 * Create a url input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function url($name, $value = null, $options = array()){
		return Illuminate\Html\FormBuilder::url($name, $value, $options);
	 }

	/**
	 * Create a file input field.
	 *
	 * @param string  $name
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function file($name, $options = array()){
		return Illuminate\Html\FormBuilder::file($name, $options);
	 }

	/**
	 * Create a textarea input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function textarea($name, $value = null, $options = array()){
		return Illuminate\Html\FormBuilder::textarea($name, $value, $options);
	 }

	/**
	 * Create a select box field.
	 *
	 * @param string  $name
	 * @param array   $list
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function select($name, $list = array(), $selected = null, $options = array()){
		return Illuminate\Html\FormBuilder::select($name, $list, $selected, $options);
	 }

	/**
	 * Create a select range field.
	 *
	 * @param string  $name
	 * @param string  $begin
	 * @param string  $end
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function selectRange($name, $begin, $end, $selected = null, $options = array()){
		return Illuminate\Html\FormBuilder::selectRange($name, $begin, $end, $selected, $options);
	 }

	/**
	 * Create a select year field.
	 *
	 * @param string  $name
	 * @param string  $begin
	 * @param string  $end
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function selectYear(){
		return Illuminate\Html\FormBuilder::selectYear();
	 }

	/**
	 * Create a select month field.
	 *
	 * @param string  $name
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function selectMonth($name, $selected = null, $options = array()){
		return Illuminate\Html\FormBuilder::selectMonth($name, $selected, $options);
	 }

	/**
	 * Create a checkbox input field.
	 *
	 * @param string  $name
	 * @param mixed   $value
	 * @param bool    $checked
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function checkbox($name, $value = 1, $checked = null, $options = array()){
		return Illuminate\Html\FormBuilder::checkbox($name, $value, $checked, $options);
	 }

	/**
	 * Create a radio button input field.
	 *
	 * @param string  $name
	 * @param mixed   $value
	 * @param bool    $checked
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function radio($name, $value = null, $checked = null, $options = array()){
		return Illuminate\Html\FormBuilder::radio($name, $value, $checked, $options);
	 }

	/**
	 * Create a HTML reset input element.
	 *
	 * @param string  $value
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function reset($value, $attributes = array()){
		return Illuminate\Html\FormBuilder::reset($value, $attributes);
	 }

	/**
	 * Create a HTML image input element.
	 *
	 * @param string  $url
	 * @param string  $name
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function image($url, $name = null, $attributes = array()){
		return Illuminate\Html\FormBuilder::image($url, $name, $attributes);
	 }

	/**
	 * Create a submit button element.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function submit($value = null, $options = array()){
		return Illuminate\Html\FormBuilder::submit($value, $options);
	 }

	/**
	 * Create a button element.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function button($value = null, $options = array()){
		return Illuminate\Html\FormBuilder::button($value, $options);
	 }

	/**
	 * Register a custom form macro.
	 *
	 * @param string    $name
	 * @param callable  $macro
	 * @return void
	 * @static 
	 */
	 public static function macro($name, $macro){
		 Illuminate\Html\FormBuilder::macro($name, $macro);
	 }

	/**
	 * Get the value that should be assigned to the field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function getValueAttribute($name, $value = null){
		return Illuminate\Html\FormBuilder::getValueAttribute($name, $value);
	 }

	/**
	 * Get a value from the session's old input.
	 *
	 * @param string  $name
	 * @return string
	 * @static 
	 */
	 public static function old($name){
		return Illuminate\Html\FormBuilder::old($name);
	 }

	/**
	 * Determine if the old input is empty.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function oldInputIsEmpty(){
		return Illuminate\Html\FormBuilder::oldInputIsEmpty();
	 }

	/**
	 * Get the session store implementation.
	 *
	 * @return \Illuminate\Session\Store  $session
	 * @static 
	 */
	 public static function getSessionStore(){
		return Illuminate\Html\FormBuilder::getSessionStore();
	 }

	/**
	 * Set the session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return \Illuminate\Html\FormBuilder
	 * @static 
	 */
	 public static function setSessionStore($session){
		return Illuminate\Html\FormBuilder::setSessionStore($session);
	 }

	/**
	 * Dynamically handle calls to the form builder.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		return Illuminate\Html\FormBuilder::__call($method, $parameters);
	 }

}

class Hash extends Illuminate\Support\Facades\Hash{
	/**
	 * Hash the given value.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function make($value, $options = array()){
		return Illuminate\Hashing\BcryptHasher::make($value, $options);
	 }

	/**
	 * Check the given plain value against a hash.
	 *
	 * @param string  $value
	 * @param string  $hashedValue
	 * @param array   $options
	 * @return bool
	 * @static 
	 */
	 public static function check($value, $hashedValue, $options = array()){
		return Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
	 }

	/**
	 * Check if the given hash has been hashed using the given options.
	 *
	 * @param string  $hashedValue
	 * @param array   $options
	 * @return bool
	 * @static 
	 */
	 public static function needsRehash($hashedValue, $options = array()){
		return Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
	 }

}

class HTML extends Illuminate\Support\Facades\HTML{
	/**
	 * Create a new HTML builder instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $url
	 * @return void
	 * @static 
	 */
	 public static function __construct($url = null){
		 Illuminate\Html\HtmlBuilder::__construct($url);
	 }

	/**
	 * Register a custom HTML macro.
	 *
	 * @param string    $name
	 * @param callable  $macro
	 * @return void
	 * @static 
	 */
	 public static function macro($name, $macro){
		 Illuminate\Html\HtmlBuilder::macro($name, $macro);
	 }

	/**
	 * Convert an HTML string to entities.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function entities($value){
		return Illuminate\Html\HtmlBuilder::entities($value);
	 }

	/**
	 * Convert entities to HTML characters.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function decode($value){
		return Illuminate\Html\HtmlBuilder::decode($value);
	 }

	/**
	 * Generate a link to a JavaScript file.
	 *
	 * @param string  $url
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function script($url, $attributes = array()){
		return Illuminate\Html\HtmlBuilder::script($url, $attributes);
	 }

	/**
	 * Generate a link to a CSS file.
	 *
	 * @param string  $url
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function style($url, $attributes = array()){
		return Illuminate\Html\HtmlBuilder::style($url, $attributes);
	 }

	/**
	 * Generate an HTML image element.
	 *
	 * @param string  $url
	 * @param string  $alt
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function image($url, $alt = null, $attributes = array()){
		return Illuminate\Html\HtmlBuilder::image($url, $alt, $attributes);
	 }

	/**
	 * Generate a HTML link.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function link($url, $title = null, $attributes = array(), $secure = null){
		return Illuminate\Html\HtmlBuilder::link($url, $title, $attributes, $secure);
	 }

	/**
	 * Generate a HTTPS HTML link.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function secureLink($url, $title = null, $attributes = array()){
		return Illuminate\Html\HtmlBuilder::secureLink($url, $title, $attributes);
	 }

	/**
	 * Generate a HTML link to an asset.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function linkAsset($url, $title = null, $attributes = array(), $secure = null){
		return Illuminate\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
	 }

	/**
	 * Generate a HTTPS HTML link to an asset.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkSecureAsset($url, $title = null, $attributes = array()){
		return Illuminate\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
	 }

	/**
	 * Generate a HTML link to a named route.
	 *
	 * @param string  $name
	 * @param string  $title
	 * @param array   $parameters
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array()){
		return Illuminate\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
	 }

	/**
	 * Generate a HTML link to a controller action.
	 *
	 * @param string  $action
	 * @param string  $title
	 * @param array   $parameters
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkAction($action, $title = null, $parameters = array(), $attributes = array()){
		return Illuminate\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
	 }

	/**
	 * Generate a HTML link to an email address.
	 *
	 * @param string  $email
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function mailto($email, $title = null, $attributes = array()){
		return Illuminate\Html\HtmlBuilder::mailto($email, $title, $attributes);
	 }

	/**
	 * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
	 *
	 * @param string  $email
	 * @return string
	 * @static 
	 */
	 public static function email($email){
		return Illuminate\Html\HtmlBuilder::email($email);
	 }

	/**
	 * Generate an ordered list of items.
	 *
	 * @param array   $list
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function ol($list, $attributes = array()){
		return Illuminate\Html\HtmlBuilder::ol($list, $attributes);
	 }

	/**
	 * Generate an un-ordered list of items.
	 *
	 * @param array   $list
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function ul($list, $attributes = array()){
		return Illuminate\Html\HtmlBuilder::ul($list, $attributes);
	 }

	/**
	 * Build an HTML attribute string from an array.
	 *
	 * @param array  $attributes
	 * @return string
	 * @static 
	 */
	 public static function attributes($attributes){
		return Illuminate\Html\HtmlBuilder::attributes($attributes);
	 }

	/**
	 * Obfuscate a string to prevent spam-bots from sniffing it.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function obfuscate($value){
		return Illuminate\Html\HtmlBuilder::obfuscate($value);
	 }

	/**
	 * Dynamically handle calls to the html class.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		return Illuminate\Html\HtmlBuilder::__call($method, $parameters);
	 }

}

class Input extends Illuminate\Support\Facades\Input{
	/**
	 * Return the Request instance.
	 *
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function instance(){
		return Illuminate\Http\Request::instance();
	 }

	/**
	 * Get the root URL for the application.
	 *
	 * @return string
	 * @static 
	 */
	 public static function root(){
		return Illuminate\Http\Request::root();
	 }

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function url(){
		return Illuminate\Http\Request::url();
	 }

	/**
	 * Get the full URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function fullUrl(){
		return Illuminate\Http\Request::fullUrl();
	 }

	/**
	 * Get the current path info for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function path(){
		return Illuminate\Http\Request::path();
	 }

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @param string  $index
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function segment($index, $default = null){
		return Illuminate\Http\Request::segment($index, $default);
	 }

	/**
	 * Get all of the segments for the request path.
	 *
	 * @return array
	 * @static 
	 */
	 public static function segments(){
		return Illuminate\Http\Request::segments();
	 }

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @param string  $pattern
	 * @return bool
	 * @static 
	 */
	 public static function is($pattern){
		return Illuminate\Http\Request::is($pattern);
	 }

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function ajax(){
		return Illuminate\Http\Request::ajax();
	 }

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function secure(){
		return Illuminate\Http\Request::secure();
	 }

	/**
	 * Determine if the request contains a given input item.
	 *
	 * @param string|array  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		return Illuminate\Http\Request::has($key);
	 }

	/**
	 * Get all of the input and files for the request.
	 *
	 * @return array
	 * @static 
	 */
	 public static function all(){
		return Illuminate\Http\Request::all();
	 }

	/**
	 * Retrieve an input item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function input($key = null, $default = null){
		return Illuminate\Http\Request::input($key, $default);
	 }

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function only($keys){
		return Illuminate\Http\Request::only($keys);
	 }

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function except($keys){
		return Illuminate\Http\Request::except($keys);
	 }

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function query($key = null, $default = null){
		return Illuminate\Http\Request::query($key, $default);
	 }

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function cookie($key = null, $default = null){
		return Illuminate\Http\Request::cookie($key, $default);
	 }

	/**
	 * Retrieve a file from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile|array
	 * @static 
	 */
	 public static function file($key = null, $default = null){
		return Illuminate\Http\Request::file($key, $default);
	 }

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasFile($key){
		return Illuminate\Http\Request::hasFile($key);
	 }

	/**
	 * Retrieve a header from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function header($key = null, $default = null){
		return Illuminate\Http\Request::header($key, $default);
	 }

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function server($key = null, $default = null){
		return Illuminate\Http\Request::server($key, $default);
	 }

	/**
	 * Retrieve an old input item.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function old($key = null, $default = null){
		return Illuminate\Http\Request::old($key, $default);
	 }

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @param string $filter
	 * @param array  $keys
	 * @return void
	 * @static 
	 */
	 public static function flash($filter = null, $keys = array()){
		 Illuminate\Http\Request::flash($filter, $keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashOnly($keys){
		 Illuminate\Http\Request::flashOnly($keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashExcept($keys){
		 Illuminate\Http\Request::flashExcept($keys);
	 }

	/**
	 * Flush all of the old input from the session.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
		 Illuminate\Http\Request::flush();
	 }

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function merge($input){
		 Illuminate\Http\Request::merge($input);
	 }

	/**
	 * Replace the input for the current request.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function replace($input){
		 Illuminate\Http\Request::replace($input);
	 }

	/**
	 * Get the JSON payload for the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function json($key = null, $default = null){
		return Illuminate\Http\Request::json($key, $default);
	 }

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isJson(){
		return Illuminate\Http\Request::isJson();
	 }

	/**
	 * Determine if the current request is asking for JSON in return.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function wantsJson(){
		return Illuminate\Http\Request::wantsJson();
	 }

	/**
	 * Get the data format expected in the response.
	 *
	 * @return string
	 * @static 
	 */
	 public static function format($default = 'html'){
		return Illuminate\Http\Request::format($default);
	 }

	/**
	 * Get the Illuminate session store implementation.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSessionStore(){
		return Illuminate\Http\Request::getSessionStore();
	 }

	/**
	 * Set the Illuminate session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSessionStore($session){
		 Illuminate\Http\Request::setSessionStore($session);
	 }

	/**
	 * Determine if the session store has been set.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function hasSessionStore(){
		return Illuminate\Http\Request::hasSessionStore();
	 }

	/**
	 * Constructor.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Sets the parameters for this request.
	 * 
	 * This method also re-initializes all properties.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @return Request A new request
	 * @api 
	 * @static 
	 */
	 public static function createFromGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::createFromGlobals();
	 }

	/**
	 * Creates a Request based on a given URI and configuration.
	 * 
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @param string $uri        The URI
	 * @param string $method     The HTTP method
	 * @param array  $parameters The query (GET) or request (POST) parameters
	 * @param array  $cookies    The request cookies ($_COOKIE)
	 * @param array  $files      The request files ($_FILES)
	 * @param array  $server     The server parameters ($_SERVER)
	 * @param string $content    The raw body data
	 * @return Request A Request instance
	 * @api 
	 * @static 
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
	 }

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @param array $query      The GET parameters
	 * @param array $request    The POST parameters
	 * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array $cookies    The COOKIE parameters
	 * @param array $files      The FILES parameters
	 * @param array $server     The SERVER parameters
	 * @return Request The duplicated request
	 * @api 
	 * @static 
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
	 }

	/**
	 * Returns the request as a string.
	 *
	 * @return string The request
	 * @static 
	 */
	 public static function __toString(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::__toString();
	 }

	/**
	 * Overrides the PHP global variables according to this request instance.
	 * 
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
	 * @api 
	 * @static 
	 */
	 public static function overrideGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::overrideGlobals();
	 }

	/**
	 * Sets a list of trusted proxies.
	 * 
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @param array $proxies A list of trusted proxies
	 * @api 
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedProxies($proxies);
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @return array An array of trusted proxies.
	 * @static 
	 */
	 public static function getTrustedProxies(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedProxies();
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
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHosts($hostPatterns);
	 }

	/**
	 * Gets the list of trusted host patterns.
	 *
	 * @return array An array of trusted host patterns.
	 * @static 
	 */
	 public static function getTrustedHosts(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedHosts();
	 }

	/**
	 * Sets the name for trusted headers.
	 * 
	 * The following header keys are supported:
	 * 
	 *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 * 
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @param string $key   The header key
	 * @param string $value The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function setTrustedHeaderName($key, $value){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHeaderName($key, $value);
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
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedHeaderName($key);
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
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::normalizeQueryString($qs);
	 }

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 * 
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 * 
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static 
	 */
	 public static function enableHttpMethodParameterOverride(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::enableHttpMethodParameterOverride();
	 }

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @return Boolean True when the _method request parameter is enabled, false otherwise
	 * @static 
	 */
	 public static function getHttpMethodParameterOverride(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHttpMethodParameterOverride();
	 }

	/**
	 * Gets a "parameter" value.
	 * 
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 * 
	 * Order of precedence: GET, PATH, POST
	 * 
	 * Avoid using this method in controllers:
	 * 
	 *  * slow
	 *  * prefer to get from a "named" source
	 * 
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @param string  $key     the key
	 * @param mixed   $default the default value
	 * @param Boolean $deep    is parameter deep in multidimensional array
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null, $deep = false){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::get($key, $default, $deep);
	 }

	/**
	 * Gets the Session.
	 *
	 * @return SessionInterface|null The session
	 * @api 
	 * @static 
	 */
	 public static function getSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getSession();
	 }

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function hasPreviousSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::hasPreviousSession();
	 }

	/**
	 * Whether the request contains a Session object.
	 * 
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @return Boolean true when the Request contains a Session object, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function hasSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::hasSession();
	 }

	/**
	 * Sets the Session.
	 *
	 * @param SessionInterface $session The Session
	 * @api 
	 * @static 
	 */
	 public static function setSession($session){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setSession($session);
	 }

	/**
	 * Returns the client IP addresses.
	 * 
	 * The least trusted IP address is first, and the most trusted one last.
	 * The "real" client IP address is the first one, but this is also the
	 * least trusted one.
	 * 
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @return array The client IP addresses
	 * @see getClientIp()
	 * @static 
	 */
	 public static function getClientIps(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getClientIps();
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
	 * @api 
	 * @static 
	 */
	 public static function getClientIp(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getClientIp();
	 }

	/**
	 * Returns current script name.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScriptName(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getScriptName();
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
	 * @api 
	 * @static 
	 */
	 public static function getPathInfo(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPathInfo();
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
	 * @api 
	 * @static 
	 */
	 public static function getBasePath(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getBasePath();
	 }

	/**
	 * Returns the root url from which this request is executed.
	 * 
	 * The base URL never ends with a /.
	 * 
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @return string The raw url (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBaseUrl(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getBaseUrl();
	 }

	/**
	 * Gets the request's scheme.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScheme(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getScheme();
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
	 * @api 
	 * @static 
	 */
	 public static function getPort(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPort();
	 }

	/**
	 * Returns the user.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getUser(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUser();
	 }

	/**
	 * Returns the password.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getPassword(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPassword();
	 }

	/**
	 * Gets the user info.
	 *
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 * @static 
	 */
	 public static function getUserInfo(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUserInfo();
	 }

	/**
	 * Returns the HTTP host being requested.
	 * 
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getHttpHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHttpHost();
	 }

	/**
	 * Returns the requested URI.
	 *
	 * @return string The raw URI (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getRequestUri(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRequestUri();
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
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getSchemeAndHttpHost();
	 }

	/**
	 * Generates a normalized URI for the Request.
	 *
	 * @return string A normalized URI for the Request
	 * @see getQueryString()
	 * @api 
	 * @static 
	 */
	 public static function getUri(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUri();
	 }

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @param string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 * @api 
	 * @static 
	 */
	 public static function getUriForPath($path){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUriForPath($path);
	 }

	/**
	 * Generates the normalized query string for the Request.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @return string|null A normalized query string for the Request
	 * @api 
	 * @static 
	 */
	 public static function getQueryString(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getQueryString();
	 }

	/**
	 * Checks whether the request is secure or not.
	 * 
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isSecure(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isSecure();
	 }

	/**
	 * Returns the host name.
	 * 
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Host" header must contain the client host name.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @return string
	 * @throws \UnexpectedValueException when the host name is invalid
	 * @api 
	 * @static 
	 */
	 public static function getHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHost();
	 }

	/**
	 * Sets the request method.
	 *
	 * @param string $method
	 * @api 
	 * @static 
	 */
	 public static function setMethod($method){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setMethod($method);
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
	 * @api 
	 * @see getRealMethod
	 * @static 
	 */
	 public static function getMethod(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getMethod();
	 }

	/**
	 * Gets the "real" request method.
	 *
	 * @return string The request method
	 * @see getMethod
	 * @static 
	 */
	 public static function getRealMethod(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRealMethod();
	 }

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @param string $format The format
	 * @return string The associated mime type (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getMimeType($format){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getMimeType($format);
	 }

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @param string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getFormat($mimeType){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getFormat($mimeType);
	 }

	/**
	 * Associates a format with mime types.
	 *
	 * @param string       $format    The format
	 * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @api 
	 * @static 
	 */
	 public static function setFormat($format, $mimeTypes){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setFormat($format, $mimeTypes);
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
	 * @api 
	 * @static 
	 */
	 public static function getRequestFormat($default = 'html'){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRequestFormat($default);
	 }

	/**
	 * Sets the request format.
	 *
	 * @param string $format The request format.
	 * @api 
	 * @static 
	 */
	 public static function setRequestFormat($format){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setRequestFormat($format);
	 }

	/**
	 * Gets the format associated with the request.
	 *
	 * @return string|null The format (null if no content type is present)
	 * @api 
	 * @static 
	 */
	 public static function getContentType(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getContentType();
	 }

	/**
	 * Sets the default locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setDefaultLocale($locale){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setDefaultLocale($locale);
	 }

	/**
	 * Sets the locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setLocale($locale){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setLocale($locale);
	 }

	/**
	 * Get the locale.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getLocale();
	 }

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @param string $method Uppercase request method (GET, POST etc).
	 * @return Boolean
	 * @static 
	 */
	 public static function isMethod($method){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isMethod($method);
	 }

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isMethodSafe(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isMethodSafe();
	 }

	/**
	 * Returns the request body content.
	 *
	 * @param Boolean $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 * @throws \LogicException
	 * @static 
	 */
	 public static function getContent($asResource = false){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getContent($asResource);
	 }

	/**
	 * Gets the Etags.
	 *
	 * @return array The entity tags
	 * @static 
	 */
	 public static function getETags(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getETags();
	 }

	/**
	 * 
	 *
	 * @return Boolean
	 * @static 
	 */
	 public static function isNoCache(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isNoCache();
	 }

	/**
	 * Returns the preferred language.
	 *
	 * @param array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 * @api 
	 * @static 
	 */
	 public static function getPreferredLanguage($locales = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPreferredLanguage($locales);
	 }

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @return array Languages ordered in the user browser preferences
	 * @api 
	 * @static 
	 */
	 public static function getLanguages(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getLanguages();
	 }

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @return array List of charsets in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getCharsets(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getCharsets();
	 }

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @return array List of content types in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getAcceptableContentTypes(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getAcceptableContentTypes();
	 }

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 * 
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
	 * @return Boolean true if the request is an XMLHttpRequest, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function isXmlHttpRequest(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isXmlHttpRequest();
	 }

}

class Lang extends Illuminate\Support\Facades\Lang{
	/**
	 * Create a new translator instance.
	 *
	 * @param \Illuminate\Translation\LoaderInterface  $loader
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function __construct($loader, $locale){
		 Illuminate\Translation\Translator::__construct($loader, $locale);
	 }

	/**
	 * Determine if a translation exists.
	 *
	 * @param string  $key
	 * @param string  $locale
	 * @return bool
	 * @static 
	 */
	 public static function has($key, $locale = null){
		return Illuminate\Translation\Translator::has($key, $locale);
	 }

	/**
	 * Get the translation for the given key.
	 *
	 * @param string  $key
	 * @param array   $replace
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function get($key, $replace = array(), $locale = null){
		return Illuminate\Translation\Translator::get($key, $replace, $locale);
	 }

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param string  $key
	 * @param int     $number
	 * @param array   $replace
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function choice($key, $number, $replace = array(), $locale = null){
		return Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
	 }

	/**
	 * Get the translation for a given key.
	 *
	 * @param string  $id
	 * @param array   $parameters
	 * @param string  $domain
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
		return Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
	 }

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param string  $id
	 * @param int     $number
	 * @param array   $parameters
	 * @param string  $domain
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
		return Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
	 }

	/**
	 * Load the specified language group.
	 *
	 * @param string  $namespace
	 * @param string  $group
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function load($namespace, $group, $locale){
		 Illuminate\Translation\Translator::load($namespace, $group, $locale);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string  $hint
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hint){
		 Illuminate\Translation\Translator::addNamespace($namespace, $hint);
	 }

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function parseKey($key){
		return Illuminate\Translation\Translator::parseKey($key);
	 }

	/**
	 * Get the message selector instance.
	 *
	 * @return \Symfony\Component\Translation\MessageSelector
	 * @static 
	 */
	 public static function getSelector(){
		return Illuminate\Translation\Translator::getSelector();
	 }

	/**
	 * Set the message selector instance.
	 *
	 * @param \Symfony\Component\Translation\MessageSelector  $selector
	 * @return void
	 * @static 
	 */
	 public static function setSelector($selector){
		 Illuminate\Translation\Translator::setSelector($selector);
	 }

	/**
	 * Get the language line loader implementation.
	 *
	 * @return \Illuminate\Translation\LoaderInterface
	 * @static 
	 */
	 public static function getLoader(){
		return Illuminate\Translation\Translator::getLoader();
	 }

	/**
	 * Get the default locale being used.
	 *
	 * @return string
	 * @static 
	 */
	 public static function locale(){
		return Illuminate\Translation\Translator::locale();
	 }

	/**
	 * Get the default locale being used.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		return Illuminate\Translation\Translator::getLocale();
	 }

	/**
	 * Set the default locale.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
		 Illuminate\Translation\Translator::setLocale($locale);
	 }

	/**
	 * Set the parsed value of a key.
	 *
	 * @param string  $key
	 * @param array   $parsed
	 * @return void
	 * @static 
	 */
	 public static function setParsedKey($key, $parsed){
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		 Illuminate\Translation\Translator::setParsedKey($key, $parsed);
	 }

}

class Log extends Illuminate\Support\Facades\Log{
	/**
	 * Create a new log writer instance.
	 *
	 * @param \Monolog\Logger  $monolog
	 * @param \Illuminate\Events\Dispatcher  $dispatcher
	 * @return void
	 * @static 
	 */
	 public static function __construct($monolog, $dispatcher = null){
		 Illuminate\Log\Writer::__construct($monolog, $dispatcher);
	 }

	/**
	 * Register a file log handler.
	 *
	 * @param string  $path
	 * @param string  $level
	 * @return void
	 * @static 
	 */
	 public static function useFiles($path, $level = 'debug'){
		 Illuminate\Log\Writer::useFiles($path, $level);
	 }

	/**
	 * Register a daily file log handler.
	 *
	 * @param string  $path
	 * @param int     $days
	 * @param string  $level
	 * @return void
	 * @static 
	 */
	 public static function useDailyFiles($path, $days = 0, $level = 'debug'){
		 Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
	 }

	/**
	 * Get the underlying Monolog instance.
	 *
	 * @return \Monolog\Logger
	 * @static 
	 */
	 public static function getMonolog(){
		return Illuminate\Log\Writer::getMonolog();
	 }

	/**
	 * Register a new callback handler for when
	 * a log event is triggered.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function listen($callback){
		 Illuminate\Log\Writer::listen($callback);
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getEventDispatcher(){
		return Illuminate\Log\Writer::getEventDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static 
	 */
	 public static function setEventDispatcher($dispatcher){
		 Illuminate\Log\Writer::setEventDispatcher($dispatcher);
	 }

	/**
	 * Dynamically handle error additions.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		return Illuminate\Log\Writer::__call($method, $parameters);
	 }

	/**
	 * Adds a log record at the DEBUG level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function debug($message, $context = array()){
		return Monolog\Logger::addDebug($message, $context);
	 }

	/**
	 * Adds a log record at the INFO level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function info($message, $context = array()){
		return Monolog\Logger::addInfo($message, $context);
	 }

	/**
	 * Adds a log record at the NOTICE level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function notice($message, $context = array()){
		return Monolog\Logger::addNotice($message, $context);
	 }

	/**
	 * Adds a log record at the WARNING level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function warning($message, $context = array()){
		return Monolog\Logger::addWarning($message, $context);
	 }

	/**
	 * Adds a log record at the ERROR level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function error($message, $context = array()){
		return Monolog\Logger::addError($message, $context);
	 }

	/**
	 * Adds a log record at the CRITICAL level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function critical($message, $context = array()){
		return Monolog\Logger::addCritical($message, $context);
	 }

	/**
	 * Adds a log record at the ALERT level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function alert($message, $context = array()){
		return Monolog\Logger::addAlert($message, $context);
	 }

	/**
	 * Adds a log record at the EMERGENCY level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function emergency($message, $context = array()){
		return Monolog\Logger::addEmergency($message, $context);
	 }

}

class Mail extends Illuminate\Support\Facades\Mail{
	/**
	 * Create a new Mailer instance.
	 *
	 * @param \Illuminate\View\Environment  $views
	 * @param \Swift_Mailer  $swift
	 * @return void
	 * @static 
	 */
	 public static function __construct($views, $swift){
		 Illuminate\Mail\Mailer::__construct($views, $swift);
	 }

	/**
	 * Set the global from address and name.
	 *
	 * @param string  $address
	 * @param string  $name
	 * @return void
	 * @static 
	 */
	 public static function alwaysFrom($address, $name = null){
		 Illuminate\Mail\Mailer::alwaysFrom($address, $name);
	 }

	/**
	 * Send a new message when only a plain part.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param mixed   $callback
	 * @return int
	 * @static 
	 */
	 public static function plain($view, $data, $callback){
		return Illuminate\Mail\Mailer::plain($view, $data, $callback);
	 }

	/**
	 * Send a new message using a view.
	 *
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @return int
	 * @static 
	 */
	 public static function send($view, $data, $callback){
		return Illuminate\Mail\Mailer::send($view, $data, $callback);
	 }

	/**
	 * Queue a new e-mail message for sending.
	 *
	 * @param string|array  $view
	 * @param array   $data
	 * @param Closure|string  $callback
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function queue($view, $data, $callback, $queue = null){
		 Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
	 }

	/**
	 * Queue a new e-mail message for sending on the given queue.
	 *
	 * @param string  $queue
	 * @param string|array  $view
	 * @param array   $data
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function queueOn($queue, $view, $data, $callback){
		 Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
	 }

	/**
	 * Queue a new e-mail message for sending after (n) seconds.
	 *
	 * @param int  $delay
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function later($delay, $view, $data, $callback, $queue = null){
		 Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
	 }

	/**
	 * Queue a new e-mail message for sending after (n) seconds on the given queue.
	 *
	 * @param string  $queue
	 * @param int  $delay
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function laterOn($queue, $delay, $view, $data, $callback){
		 Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
	 }

	/**
	 * Handle a queued e-mail message job.
	 *
	 * @param \Illuminate\Queue\Jobs\Job  $job
	 * @param array  $data
	 * @return void
	 * @static 
	 */
	 public static function handleQueuedMessage($job, $data){
		 Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
	 }

	/**
	 * Tell the mailer to not really send messages.
	 *
	 * @param bool  $value
	 * @return void
	 * @static 
	 */
	 public static function pretend($value = true){
		 Illuminate\Mail\Mailer::pretend($value);
	 }

	/**
	 * Get the view environment instance.
	 *
	 * @return \Illuminate\View\Environment
	 * @static 
	 */
	 public static function getViewEnvironment(){
		return Illuminate\Mail\Mailer::getViewEnvironment();
	 }

	/**
	 * Get the Swift Mailer instance.
	 *
	 * @return \Swift_Mailer
	 * @static 
	 */
	 public static function getSwiftMailer(){
		return Illuminate\Mail\Mailer::getSwiftMailer();
	 }

	/**
	 * Set the Swift Mailer instance.
	 *
	 * @param \Swift_Mailer  $swift
	 * @return void
	 * @static 
	 */
	 public static function setSwiftMailer($swift){
		 Illuminate\Mail\Mailer::setSwiftMailer($swift);
	 }

	/**
	 * Set the log writer instance.
	 *
	 * @param \Illuminate\Log\Writer  $logger
	 * @return \Illuminate\Mail\Mailer
	 * @static 
	 */
	 public static function setLogger($logger){
		return Illuminate\Mail\Mailer::setLogger($logger);
	 }

	/**
	 * Set the queue manager instance.
	 *
	 * @param \Illuminate\Queue\QueueManager  $queue
	 * @return \Illuminate\Mail\Mailer
	 * @static 
	 */
	 public static function setQueue($queue){
		return Illuminate\Mail\Mailer::setQueue($queue);
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		 Illuminate\Mail\Mailer::setContainer($container);
	 }

}

class Paginator extends Illuminate\Support\Facades\Paginator{
	/**
	 * Create a new pagination environment.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @param \Illuminate\View\Environment  $view
	 * @param \Symfony\Component\Translation\TranslatorInterface  $trans
	 * @param string  $pageName
	 * @return void
	 * @static 
	 */
	 public static function __construct($request, $view, $trans, $pageName = 'page'){
		 Illuminate\Pagination\Environment::__construct($request, $view, $trans, $pageName);
	 }

	/**
	 * Get a new paginator instance.
	 *
	 * @param array  $items
	 * @param int    $total
	 * @param int    $perPage
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public static function make($items, $total, $perPage){
		return Illuminate\Pagination\Environment::make($items, $total, $perPage);
	 }

	/**
	 * Get the pagination view.
	 *
	 * @param \Illuminate\Pagination\Paginator  $paginator
	 * @return \Illuminate\View\View
	 * @static 
	 */
	 public static function getPaginationView($paginator){
		return Illuminate\Pagination\Environment::getPaginationView($paginator);
	 }

	/**
	 * Get the number of the current page.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getCurrentPage(){
		return Illuminate\Pagination\Environment::getCurrentPage();
	 }

	/**
	 * Set the number of the current page.
	 *
	 * @param int  $number
	 * @return void
	 * @static 
	 */
	 public static function setCurrentPage($number){
		 Illuminate\Pagination\Environment::setCurrentPage($number);
	 }

	/**
	 * Get the root URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getCurrentUrl(){
		return Illuminate\Pagination\Environment::getCurrentUrl();
	 }

	/**
	 * Set the base URL in use by the paginator.
	 *
	 * @param string  $baseUrl
	 * @return void
	 * @static 
	 */
	 public static function setBaseUrl($baseUrl){
		 Illuminate\Pagination\Environment::setBaseUrl($baseUrl);
	 }

	/**
	 * Set the input page parameter name used by the paginator.
	 *
	 * @param string  $pageName
	 * @return void
	 * @static 
	 */
	 public static function setPageName($pageName){
		 Illuminate\Pagination\Environment::setPageName($pageName);
	 }

	/**
	 * Get the input page parameter name used by the paginator.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getPageName(){
		return Illuminate\Pagination\Environment::getPageName();
	 }

	/**
	 * Get the name of the pagination view.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getViewName(){
		return Illuminate\Pagination\Environment::getViewName();
	 }

	/**
	 * Set the name of the pagination view.
	 *
	 * @param string  $viewName
	 * @return void
	 * @static 
	 */
	 public static function setViewName($viewName){
		 Illuminate\Pagination\Environment::setViewName($viewName);
	 }

	/**
	 * Get the locale of the paginator.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		return Illuminate\Pagination\Environment::getLocale();
	 }

	/**
	 * Set the locale of the paginator.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
		 Illuminate\Pagination\Environment::setLocale($locale);
	 }

	/**
	 * Get the active request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		return Illuminate\Pagination\Environment::getRequest();
	 }

	/**
	 * Set the active request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return void
	 * @static 
	 */
	 public static function setRequest($request){
		 Illuminate\Pagination\Environment::setRequest($request);
	 }

	/**
	 * Get the current view driver.
	 *
	 * @return \Illuminate\View\Environment
	 * @static 
	 */
	 public static function getViewDriver(){
		return Illuminate\Pagination\Environment::getViewDriver();
	 }

	/**
	 * Set the current view driver.
	 *
	 * @param \Illuminate\View\Environment  $view
	 * @return void
	 * @static 
	 */
	 public static function setViewDriver($view){
		 Illuminate\Pagination\Environment::setViewDriver($view);
	 }

	/**
	 * Get the translator instance.
	 *
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 * @static 
	 */
	 public static function getTranslator(){
		return Illuminate\Pagination\Environment::getTranslator();
	 }

}

class Password extends Illuminate\Support\Facades\Password{
	/**
	 * Create a new password broker instance.
	 *
	 * @param \Illuminate\Auth\Reminders\ReminderRepositoryInterface  $reminders
	 * @param \Illuminate\Auth\UserProviderInterface  $users
	 * @param \Illuminate\Routing\Redirector  $redirect
	 * @param \Illuminate\Mail\Mailer  $mailer
	 * @param string  $reminderView
	 * @return void
	 * @static 
	 */
	 public static function __construct($reminders, $users, $redirect, $mailer, $reminderView){
		 Illuminate\Auth\Reminders\PasswordBroker::__construct($reminders, $users, $redirect, $mailer, $reminderView);
	 }

	/**
	 * Send a password reminder to a user.
	 *
	 * @param array    $credentials
	 * @param Closure  $callback
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function remind($credentials, $callback = null){
		return Illuminate\Auth\Reminders\PasswordBroker::remind($credentials, $callback);
	 }

	/**
	 * Send the password reminder e-mail.
	 *
	 * @param \Illuminate\Auth\Reminders\RemindableInterface  $user
	 * @param string   $token
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function sendReminder($user, $token, $callback = null){
		 Illuminate\Auth\Reminders\PasswordBroker::sendReminder($user, $token, $callback);
	 }

	/**
	 * Reset the password for the given token.
	 *
	 * @param array    $credentials
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function reset($credentials, $callback){
		return Illuminate\Auth\Reminders\PasswordBroker::reset($credentials, $callback);
	 }

	/**
	 * Get the user for the given credentials.
	 *
	 * @param array  $credentials
	 * @return \Illuminate\Auth\Reminders\RemindableInterface
	 * @static 
	 */
	 public static function getUser($credentials){
		return Illuminate\Auth\Reminders\PasswordBroker::getUser($credentials);
	 }

}

class Queue extends Illuminate\Support\Facades\Queue{
	/**
	 * Create a new queue manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return void
	 * @static 
	 */
	 public static function __construct($app){
		 Illuminate\Queue\QueueManager::__construct($app);
	 }

	/**
	 * Resolve a queue connection instance.
	 *
	 * @param string  $name
	 * @return \Illuminate\Queue\QueueInterface
	 * @static 
	 */
	 public static function connection($name = null){
		return Illuminate\Queue\QueueManager::connection($name);
	 }

	/**
	 * Add a queue connection resolver.
	 *
	 * @param string   $driver
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function addConnector($driver, $resolver){
		 Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
	 }

	/**
	 * Dynamically pass calls to the default connection.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		return Illuminate\Queue\QueueManager::__call($method, $parameters);
	 }

	/**
	 * Push a new job onto the queue.
	 *
	 * @param string  $job
	 * @param mixed   $data
	 * @param string  $queue
	 * @return mixed
	 * @static 
	 */
	 public static function push($job, $data = '', $queue = null){
		return Illuminate\Queue\SyncQueue::push($job, $data, $queue);
	 }

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @param \DateTime|int  $delay
	 * @param string  $job
	 * @param mixed  $data
	 * @param string  $queue
	 * @return mixed
	 * @static 
	 */
	 public static function later($delay, $job, $data = '', $queue = null){
		return Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
	 }

	/**
	 * Pop the next job off of the queue.
	 *
	 * @param string  $queue
	 * @return \Illuminate\Queue\Jobs\Job|null
	 * @static 
	 */
	 public static function pop($queue = null){
		return Illuminate\Queue\SyncQueue::pop($queue);
	 }

	/**
	 * Marshal a push queue request and fire the job.
	 *
	 * @return Illuminate\Http\Response
	 * @static 
	 */
	 public static function marshal(){
		//Method inherited from Illuminate\Queue\Queue
		return Illuminate\Queue\SyncQueue::marshal();
	 }

	/**
	 * Push a new an array of jobs onto the queue.
	 *
	 * @param array  $jobs
	 * @param mixed  $data
	 * @param string  $queue
	 * @return mixed
	 * @static 
	 */
	 public static function bulk($jobs, $data = '', $queue = null){
		//Method inherited from Illuminate\Queue\Queue
		return Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
	 }

	/**
	 * Get the current UNIX timestamp.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getTime(){
		//Method inherited from Illuminate\Queue\Queue
		return Illuminate\Queue\SyncQueue::getTime();
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		//Method inherited from Illuminate\Queue\Queue
		 Illuminate\Queue\SyncQueue::setContainer($container);
	 }

}

class Redirect extends Illuminate\Support\Facades\Redirect{
	/**
	 * Create a new Redirector instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $generator
	 * @return void
	 * @static 
	 */
	 public static function __construct($generator){
		 Illuminate\Routing\Redirector::__construct($generator);
	 }

	/**
	 * Create a new redirect response to the "home" route.
	 *
	 * @param int  $status
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function home($status = 302){
		return Illuminate\Routing\Redirector::home($status);
	 }

	/**
	 * Create a new redirect response to the previous location.
	 *
	 * @param int    $status
	 * @param array  $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function back($status = 302, $headers = array()){
		return Illuminate\Routing\Redirector::back($status, $headers);
	 }

	/**
	 * Create a new redirect response to the current URI.
	 *
	 * @param int    $status
	 * @param array  $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function refresh($status = 302, $headers = array()){
		return Illuminate\Routing\Redirector::refresh($status, $headers);
	 }

	/**
	 * Create a new redirect response, while putting the current URL in the session.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function guest($path, $status = 302, $headers = array(), $secure = null){
		return Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to the previously intended location.
	 *
	 * @param string  $default
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function intended($default, $status = 302, $headers = array(), $secure = null){
		return Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to the given path.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function to($path, $status = 302, $headers = array(), $secure = null){
		return Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
	 }

	/**
	 * Create a new redirect response to an external URL (no validation).
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function away($path, $status = 302, $headers = array()){
		return Illuminate\Routing\Redirector::away($path, $status, $headers);
	 }

	/**
	 * Create a new redirect response to the given HTTPS path.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function secure($path, $status = 302, $headers = array()){
		return Illuminate\Routing\Redirector::secure($path, $status, $headers);
	 }

	/**
	 * Create a new redirect response to a named route.
	 *
	 * @param string  $route
	 * @param array   $parameters
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function route($route, $parameters = array(), $status = 302, $headers = array()){
		return Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
	 }

	/**
	 * Create a new redirect response to a controller action.
	 *
	 * @param string  $action
	 * @param array   $parameters
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function action($action, $parameters = array(), $status = 302, $headers = array()){
		return Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
	 }

	/**
	 * Get the URL generator instance.
	 *
	 * @return \Illuminate\Routing\UrlGenerator
	 * @static 
	 */
	 public static function getUrlGenerator(){
		return Illuminate\Routing\Redirector::getUrlGenerator();
	 }

	/**
	 * Set the active session store.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSession($session){
		 Illuminate\Routing\Redirector::setSession($session);
	 }

}

class Redis extends Illuminate\Support\Facades\Redis{
	/**
	 * Create a new Redis connection instance.
	 *
	 * @param array  $servers
	 * @return void
	 * @static 
	 */
	 public static function __construct($servers = array()){
		 Illuminate\Redis\Database::__construct($servers);
	 }

	/**
	 * Get a specific Redis connection instance.
	 *
	 * @param string  $name
	 * @return \Predis\Connection\SingleConnectionInterface
	 * @static 
	 */
	 public static function connection($name = 'default'){
		return Illuminate\Redis\Database::connection($name);
	 }

	/**
	 * Run a command against the Redis database.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function command($method, $parameters = array()){
		return Illuminate\Redis\Database::command($method, $parameters);
	 }

	/**
	 * Dynamically make a Redis command.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		return Illuminate\Redis\Database::__call($method, $parameters);
	 }

}

class Request extends Illuminate\Support\Facades\Request{
	/**
	 * Return the Request instance.
	 *
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function instance(){
		return Illuminate\Http\Request::instance();
	 }

	/**
	 * Get the root URL for the application.
	 *
	 * @return string
	 * @static 
	 */
	 public static function root(){
		return Illuminate\Http\Request::root();
	 }

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function url(){
		return Illuminate\Http\Request::url();
	 }

	/**
	 * Get the full URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function fullUrl(){
		return Illuminate\Http\Request::fullUrl();
	 }

	/**
	 * Get the current path info for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function path(){
		return Illuminate\Http\Request::path();
	 }

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @param string  $index
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function segment($index, $default = null){
		return Illuminate\Http\Request::segment($index, $default);
	 }

	/**
	 * Get all of the segments for the request path.
	 *
	 * @return array
	 * @static 
	 */
	 public static function segments(){
		return Illuminate\Http\Request::segments();
	 }

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @param string  $pattern
	 * @return bool
	 * @static 
	 */
	 public static function is($pattern){
		return Illuminate\Http\Request::is($pattern);
	 }

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function ajax(){
		return Illuminate\Http\Request::ajax();
	 }

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function secure(){
		return Illuminate\Http\Request::secure();
	 }

	/**
	 * Determine if the request contains a given input item.
	 *
	 * @param string|array  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		return Illuminate\Http\Request::has($key);
	 }

	/**
	 * Get all of the input and files for the request.
	 *
	 * @return array
	 * @static 
	 */
	 public static function all(){
		return Illuminate\Http\Request::all();
	 }

	/**
	 * Retrieve an input item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function input($key = null, $default = null){
		return Illuminate\Http\Request::input($key, $default);
	 }

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function only($keys){
		return Illuminate\Http\Request::only($keys);
	 }

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function except($keys){
		return Illuminate\Http\Request::except($keys);
	 }

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function query($key = null, $default = null){
		return Illuminate\Http\Request::query($key, $default);
	 }

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function cookie($key = null, $default = null){
		return Illuminate\Http\Request::cookie($key, $default);
	 }

	/**
	 * Retrieve a file from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile|array
	 * @static 
	 */
	 public static function file($key = null, $default = null){
		return Illuminate\Http\Request::file($key, $default);
	 }

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasFile($key){
		return Illuminate\Http\Request::hasFile($key);
	 }

	/**
	 * Retrieve a header from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function header($key = null, $default = null){
		return Illuminate\Http\Request::header($key, $default);
	 }

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function server($key = null, $default = null){
		return Illuminate\Http\Request::server($key, $default);
	 }

	/**
	 * Retrieve an old input item.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function old($key = null, $default = null){
		return Illuminate\Http\Request::old($key, $default);
	 }

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @param string $filter
	 * @param array  $keys
	 * @return void
	 * @static 
	 */
	 public static function flash($filter = null, $keys = array()){
		 Illuminate\Http\Request::flash($filter, $keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashOnly($keys){
		 Illuminate\Http\Request::flashOnly($keys);
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashExcept($keys){
		 Illuminate\Http\Request::flashExcept($keys);
	 }

	/**
	 * Flush all of the old input from the session.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
		 Illuminate\Http\Request::flush();
	 }

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function merge($input){
		 Illuminate\Http\Request::merge($input);
	 }

	/**
	 * Replace the input for the current request.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function replace($input){
		 Illuminate\Http\Request::replace($input);
	 }

	/**
	 * Get the JSON payload for the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function json($key = null, $default = null){
		return Illuminate\Http\Request::json($key, $default);
	 }

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isJson(){
		return Illuminate\Http\Request::isJson();
	 }

	/**
	 * Determine if the current request is asking for JSON in return.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function wantsJson(){
		return Illuminate\Http\Request::wantsJson();
	 }

	/**
	 * Get the data format expected in the response.
	 *
	 * @return string
	 * @static 
	 */
	 public static function format($default = 'html'){
		return Illuminate\Http\Request::format($default);
	 }

	/**
	 * Get the Illuminate session store implementation.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSessionStore(){
		return Illuminate\Http\Request::getSessionStore();
	 }

	/**
	 * Set the Illuminate session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSessionStore($session){
		 Illuminate\Http\Request::setSessionStore($session);
	 }

	/**
	 * Determine if the session store has been set.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function hasSessionStore(){
		return Illuminate\Http\Request::hasSessionStore();
	 }

	/**
	 * Constructor.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Sets the parameters for this request.
	 * 
	 * This method also re-initializes all properties.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @return Request A new request
	 * @api 
	 * @static 
	 */
	 public static function createFromGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::createFromGlobals();
	 }

	/**
	 * Creates a Request based on a given URI and configuration.
	 * 
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @param string $uri        The URI
	 * @param string $method     The HTTP method
	 * @param array  $parameters The query (GET) or request (POST) parameters
	 * @param array  $cookies    The request cookies ($_COOKIE)
	 * @param array  $files      The request files ($_FILES)
	 * @param array  $server     The server parameters ($_SERVER)
	 * @param string $content    The raw body data
	 * @return Request A Request instance
	 * @api 
	 * @static 
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
	 }

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @param array $query      The GET parameters
	 * @param array $request    The POST parameters
	 * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array $cookies    The COOKIE parameters
	 * @param array $files      The FILES parameters
	 * @param array $server     The SERVER parameters
	 * @return Request The duplicated request
	 * @api 
	 * @static 
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
	 }

	/**
	 * Returns the request as a string.
	 *
	 * @return string The request
	 * @static 
	 */
	 public static function __toString(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::__toString();
	 }

	/**
	 * Overrides the PHP global variables according to this request instance.
	 * 
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
	 * @api 
	 * @static 
	 */
	 public static function overrideGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::overrideGlobals();
	 }

	/**
	 * Sets a list of trusted proxies.
	 * 
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @param array $proxies A list of trusted proxies
	 * @api 
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedProxies($proxies);
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @return array An array of trusted proxies.
	 * @static 
	 */
	 public static function getTrustedProxies(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedProxies();
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
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHosts($hostPatterns);
	 }

	/**
	 * Gets the list of trusted host patterns.
	 *
	 * @return array An array of trusted host patterns.
	 * @static 
	 */
	 public static function getTrustedHosts(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedHosts();
	 }

	/**
	 * Sets the name for trusted headers.
	 * 
	 * The following header keys are supported:
	 * 
	 *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 * 
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @param string $key   The header key
	 * @param string $value The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function setTrustedHeaderName($key, $value){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHeaderName($key, $value);
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
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedHeaderName($key);
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
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::normalizeQueryString($qs);
	 }

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 * 
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 * 
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static 
	 */
	 public static function enableHttpMethodParameterOverride(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::enableHttpMethodParameterOverride();
	 }

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @return Boolean True when the _method request parameter is enabled, false otherwise
	 * @static 
	 */
	 public static function getHttpMethodParameterOverride(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHttpMethodParameterOverride();
	 }

	/**
	 * Gets a "parameter" value.
	 * 
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 * 
	 * Order of precedence: GET, PATH, POST
	 * 
	 * Avoid using this method in controllers:
	 * 
	 *  * slow
	 *  * prefer to get from a "named" source
	 * 
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @param string  $key     the key
	 * @param mixed   $default the default value
	 * @param Boolean $deep    is parameter deep in multidimensional array
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null, $deep = false){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::get($key, $default, $deep);
	 }

	/**
	 * Gets the Session.
	 *
	 * @return SessionInterface|null The session
	 * @api 
	 * @static 
	 */
	 public static function getSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getSession();
	 }

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function hasPreviousSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::hasPreviousSession();
	 }

	/**
	 * Whether the request contains a Session object.
	 * 
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @return Boolean true when the Request contains a Session object, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function hasSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::hasSession();
	 }

	/**
	 * Sets the Session.
	 *
	 * @param SessionInterface $session The Session
	 * @api 
	 * @static 
	 */
	 public static function setSession($session){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setSession($session);
	 }

	/**
	 * Returns the client IP addresses.
	 * 
	 * The least trusted IP address is first, and the most trusted one last.
	 * The "real" client IP address is the first one, but this is also the
	 * least trusted one.
	 * 
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @return array The client IP addresses
	 * @see getClientIp()
	 * @static 
	 */
	 public static function getClientIps(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getClientIps();
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
	 * @api 
	 * @static 
	 */
	 public static function getClientIp(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getClientIp();
	 }

	/**
	 * Returns current script name.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScriptName(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getScriptName();
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
	 * @api 
	 * @static 
	 */
	 public static function getPathInfo(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPathInfo();
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
	 * @api 
	 * @static 
	 */
	 public static function getBasePath(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getBasePath();
	 }

	/**
	 * Returns the root url from which this request is executed.
	 * 
	 * The base URL never ends with a /.
	 * 
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @return string The raw url (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBaseUrl(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getBaseUrl();
	 }

	/**
	 * Gets the request's scheme.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScheme(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getScheme();
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
	 * @api 
	 * @static 
	 */
	 public static function getPort(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPort();
	 }

	/**
	 * Returns the user.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getUser(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUser();
	 }

	/**
	 * Returns the password.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getPassword(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPassword();
	 }

	/**
	 * Gets the user info.
	 *
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 * @static 
	 */
	 public static function getUserInfo(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUserInfo();
	 }

	/**
	 * Returns the HTTP host being requested.
	 * 
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getHttpHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHttpHost();
	 }

	/**
	 * Returns the requested URI.
	 *
	 * @return string The raw URI (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getRequestUri(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRequestUri();
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
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getSchemeAndHttpHost();
	 }

	/**
	 * Generates a normalized URI for the Request.
	 *
	 * @return string A normalized URI for the Request
	 * @see getQueryString()
	 * @api 
	 * @static 
	 */
	 public static function getUri(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUri();
	 }

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @param string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 * @api 
	 * @static 
	 */
	 public static function getUriForPath($path){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUriForPath($path);
	 }

	/**
	 * Generates the normalized query string for the Request.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @return string|null A normalized query string for the Request
	 * @api 
	 * @static 
	 */
	 public static function getQueryString(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getQueryString();
	 }

	/**
	 * Checks whether the request is secure or not.
	 * 
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isSecure(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isSecure();
	 }

	/**
	 * Returns the host name.
	 * 
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Host" header must contain the client host name.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @return string
	 * @throws \UnexpectedValueException when the host name is invalid
	 * @api 
	 * @static 
	 */
	 public static function getHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHost();
	 }

	/**
	 * Sets the request method.
	 *
	 * @param string $method
	 * @api 
	 * @static 
	 */
	 public static function setMethod($method){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setMethod($method);
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
	 * @api 
	 * @see getRealMethod
	 * @static 
	 */
	 public static function getMethod(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getMethod();
	 }

	/**
	 * Gets the "real" request method.
	 *
	 * @return string The request method
	 * @see getMethod
	 * @static 
	 */
	 public static function getRealMethod(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRealMethod();
	 }

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @param string $format The format
	 * @return string The associated mime type (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getMimeType($format){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getMimeType($format);
	 }

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @param string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getFormat($mimeType){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getFormat($mimeType);
	 }

	/**
	 * Associates a format with mime types.
	 *
	 * @param string       $format    The format
	 * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @api 
	 * @static 
	 */
	 public static function setFormat($format, $mimeTypes){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setFormat($format, $mimeTypes);
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
	 * @api 
	 * @static 
	 */
	 public static function getRequestFormat($default = 'html'){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRequestFormat($default);
	 }

	/**
	 * Sets the request format.
	 *
	 * @param string $format The request format.
	 * @api 
	 * @static 
	 */
	 public static function setRequestFormat($format){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setRequestFormat($format);
	 }

	/**
	 * Gets the format associated with the request.
	 *
	 * @return string|null The format (null if no content type is present)
	 * @api 
	 * @static 
	 */
	 public static function getContentType(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getContentType();
	 }

	/**
	 * Sets the default locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setDefaultLocale($locale){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setDefaultLocale($locale);
	 }

	/**
	 * Sets the locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setLocale($locale){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setLocale($locale);
	 }

	/**
	 * Get the locale.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getLocale();
	 }

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @param string $method Uppercase request method (GET, POST etc).
	 * @return Boolean
	 * @static 
	 */
	 public static function isMethod($method){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isMethod($method);
	 }

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isMethodSafe(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isMethodSafe();
	 }

	/**
	 * Returns the request body content.
	 *
	 * @param Boolean $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 * @throws \LogicException
	 * @static 
	 */
	 public static function getContent($asResource = false){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getContent($asResource);
	 }

	/**
	 * Gets the Etags.
	 *
	 * @return array The entity tags
	 * @static 
	 */
	 public static function getETags(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getETags();
	 }

	/**
	 * 
	 *
	 * @return Boolean
	 * @static 
	 */
	 public static function isNoCache(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isNoCache();
	 }

	/**
	 * Returns the preferred language.
	 *
	 * @param array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 * @api 
	 * @static 
	 */
	 public static function getPreferredLanguage($locales = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPreferredLanguage($locales);
	 }

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @return array Languages ordered in the user browser preferences
	 * @api 
	 * @static 
	 */
	 public static function getLanguages(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getLanguages();
	 }

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @return array List of charsets in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getCharsets(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getCharsets();
	 }

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @return array List of content types in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getAcceptableContentTypes(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getAcceptableContentTypes();
	 }

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 * 
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
	 * @return Boolean true if the request is an XMLHttpRequest, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function isXmlHttpRequest(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isXmlHttpRequest();
	 }

}

class Response extends Illuminate\Support\Facades\Response{
}

class Route extends Illuminate\Support\Facades\Route{
	/**
	 * Create a new router instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function __construct($container = null){
		 Illuminate\Routing\Router::__construct($container);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function get($pattern, $action){
		return Illuminate\Routing\Router::get($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function post($pattern, $action){
		return Illuminate\Routing\Router::post($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function put($pattern, $action){
		return Illuminate\Routing\Router::put($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function patch($pattern, $action){
		return Illuminate\Routing\Router::patch($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function delete($pattern, $action){
		return Illuminate\Routing\Router::delete($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function options($pattern, $action){
		return Illuminate\Routing\Router::options($pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $method
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function match($method, $pattern, $action){
		return Illuminate\Routing\Router::match($method, $pattern, $action);
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function any($pattern, $action){
		return Illuminate\Routing\Router::any($pattern, $action);
	 }

	/**
	 * Register an array of controllers with wildcard routing.
	 *
	 * @param array  $controllers
	 * @return void
	 * @static 
	 */
	 public static function controllers($controllers){
		 Illuminate\Routing\Router::controllers($controllers);
	 }

	/**
	 * Route a controller to a URI with wildcard routing.
	 *
	 * @param string  $uri
	 * @param string  $controller
	 * @param array   $names
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function controller($uri, $controller, $names = array()){
		return Illuminate\Routing\Router::controller($uri, $controller, $names);
	 }

	/**
	 * Route a resource to a controller.
	 *
	 * @param string  $resource
	 * @param string  $controller
	 * @param array   $options
	 * @return void
	 * @static 
	 */
	 public static function resource($resource, $controller, $options = array()){
		 Illuminate\Routing\Router::resource($resource, $controller, $options);
	 }

	/**
	 * Get the base resource URI for a given resource.
	 *
	 * @param string  $resource
	 * @return string
	 * @static 
	 */
	 public static function getResourceUri($resource){
		return Illuminate\Routing\Router::getResourceUri($resource);
	 }

	/**
	 * Format a resource wildcard parameter.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function getResourceWildcard($value){
		return Illuminate\Routing\Router::getResourceWildcard($value);
	 }

	/**
	 * Create a route group with shared attributes.
	 *
	 * @param array    $attributes
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function group($attributes, $callback){
		 Illuminate\Routing\Router::group($attributes, $callback);
	 }

	/**
	 * Get the response for a given request.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function dispatch($request){
		return Illuminate\Routing\Router::dispatch($request);
	 }

	/**
	 * Register a "before" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function before($callback){
		 Illuminate\Routing\Router::before($callback);
	 }

	/**
	 * Register an "after" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function after($callback){
		 Illuminate\Routing\Router::after($callback);
	 }

	/**
	 * Register a "close" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function close($callback){
		 Illuminate\Routing\Router::close($callback);
	 }

	/**
	 * Register a "finish" routing filters.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function finish($callback){
		 Illuminate\Routing\Router::finish($callback);
	 }

	/**
	 * Register a new filter with the application.
	 *
	 * @param string   $name
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function filter($name, $callback){
		 Illuminate\Routing\Router::filter($name, $callback);
	 }

	/**
	 * Get a registered filter callback.
	 *
	 * @param string   $name
	 * @return Closure
	 * @static 
	 */
	 public static function getFilter($name){
		return Illuminate\Routing\Router::getFilter($name);
	 }

	/**
	 * Tie a registered filter to a URI pattern.
	 *
	 * @param string  $pattern
	 * @param string|array  $names
	 * @param array|null  $methods
	 * @return void
	 * @static 
	 */
	 public static function when($pattern, $names, $methods = null){
		 Illuminate\Routing\Router::when($pattern, $names, $methods);
	 }

	/**
	 * Find the patterned filters matching a request.
	 *
	 * @param string  $method
	 * @param string  $path
	 * @return array
	 * @static 
	 */
	 public static function findPatternFilters($method, $path){
		return Illuminate\Routing\Router::findPatternFilters($method, $path);
	 }

	/**
	 * Call the finish" global filter.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request   $request
	 * @param \Symfony\Component\HttpFoundation\Response  $response
	 * @return mixed
	 * @static 
	 */
	 public static function callFinishFilter($request, $response){
		return Illuminate\Routing\Router::callFinishFilter($request, $response);
	 }

	/**
	 * Call the "close" global filter.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request   $request
	 * @param \Symfony\Component\HttpFoundation\Response  $response
	 * @return mixed
	 * @static 
	 */
	 public static function callCloseFilter($request, $response){
		return Illuminate\Routing\Router::callCloseFilter($request, $response);
	 }

	/**
	 * Set a global where pattern on all routes
	 *
	 * @param string  $key
	 * @param string  $pattern
	 * @return void
	 * @static 
	 */
	 public static function pattern($key, $pattern){
		 Illuminate\Routing\Router::pattern($key, $pattern);
	 }

	/**
	 * Register a model binder for a wildcard.
	 *
	 * @param string  $key
	 * @param string  $class
	 * @return void
	 * @static 
	 */
	 public static function model($key, $class, $callback = null){
		 Illuminate\Routing\Router::model($key, $class, $callback);
	 }

	/**
	 * Register a custom parameter binder.
	 *
	 * @param string  $key
	 * @param mixed   $binder
	 * @static 
	 */
	 public static function bind($key, $binder){
		 Illuminate\Routing\Router::bind($key, $binder);
	 }

	/**
	 * Determine if a given key has a registered binder.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasBinder($key){
		return Illuminate\Routing\Router::hasBinder($key);
	 }

	/**
	 * Call a binder for a given wildcard.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @param \Illuminate\Routing\Route  $route
	 * @return mixed
	 * @static 
	 */
	 public static function performBinding($key, $value, $route){
		return Illuminate\Routing\Router::performBinding($key, $value, $route);
	 }

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @param mixed  $value
	 * @param \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function prepare($value, $request){
		return Illuminate\Routing\Router::prepare($value, $request);
	 }

	/**
	 * Get the current route name.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function currentRouteName(){
		return Illuminate\Routing\Router::currentRouteName();
	 }

	/**
	 * Determine if the current route has a given name.
	 *
	 * @param string  $name
	 * @return bool
	 * @static 
	 */
	 public static function currentRouteNamed($name){
		return Illuminate\Routing\Router::currentRouteNamed($name);
	 }

	/**
	 * Get the current route action.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function currentRouteAction(){
		return Illuminate\Routing\Router::currentRouteAction();
	 }

	/**
	 * Determine if the current route uses a given controller action.
	 *
	 * @param string  $action
	 * @return bool
	 * @static 
	 */
	 public static function currentRouteUses($action){
		return Illuminate\Routing\Router::currentRouteUses($action);
	 }

	/**
	 * Determine if route filters are enabled.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function filtersEnabled(){
		return Illuminate\Routing\Router::filtersEnabled();
	 }

	/**
	 * Enable the running of filters.
	 *
	 * @return void
	 * @static 
	 */
	 public static function enableFilters(){
		 Illuminate\Routing\Router::enableFilters();
	 }

	/**
	 * Disable the running of all filters.
	 *
	 * @return void
	 * @static 
	 */
	 public static function disableFilters(){
		 Illuminate\Routing\Router::disableFilters();
	 }

	/**
	 * Retrieve the entire route collection.
	 *
	 * @return \Symfony\Component\Routing\RouteCollection
	 * @static 
	 */
	 public static function getRoutes(){
		return Illuminate\Routing\Router::getRoutes();
	 }

	/**
	 * Get the current request being dispatched.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		return Illuminate\Routing\Router::getRequest();
	 }

	/**
	 * Get the current route being executed.
	 *
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function getCurrentRoute(){
		return Illuminate\Routing\Router::getCurrentRoute();
	 }

	/**
	 * Set the current route on the router.
	 *
	 * @param \Illuminate\Routing\Route  $route
	 * @return void
	 * @static 
	 */
	 public static function setCurrentRoute($route){
		 Illuminate\Routing\Router::setCurrentRoute($route);
	 }

	/**
	 * Get the filters defined on the router.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getFilters(){
		return Illuminate\Routing\Router::getFilters();
	 }

	/**
	 * Get the global filters defined on the router.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getGlobalFilters(){
		return Illuminate\Routing\Router::getGlobalFilters();
	 }

	/**
	 * Get the controller inspector instance.
	 *
	 * @return \Illuminate\Routing\Controllers\Inspector
	 * @static 
	 */
	 public static function getInspector(){
		return Illuminate\Routing\Router::getInspector();
	 }

	/**
	 * Set the controller inspector instance.
	 *
	 * @param \Illuminate\Routing\Controllers\Inspector  $inspector
	 * @return void
	 * @static 
	 */
	 public static function setInspector($inspector){
		 Illuminate\Routing\Router::setInspector($inspector);
	 }

	/**
	 * Get the container used by the router.
	 *
	 * @return \Illuminate\Container\Container
	 * @static 
	 */
	 public static function getContainer(){
		return Illuminate\Routing\Router::getContainer();
	 }

	/**
	 * Set the container instance on the router.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		 Illuminate\Routing\Router::setContainer($container);
	 }

}

class Schema extends Illuminate\Support\Facades\Schema{
	/**
	 * Determine if the given table exists.
	 *
	 * @param string  $table
	 * @return bool
	 * @static 
	 */
	 public static function hasTable($table){
		return Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
	 }

	/**
	 * Create a new database Schema manager.
	 *
	 * @param \Illuminate\Database\Connection  $connection
	 * @return void
	 * @static 
	 */
	 public static function __construct($connection){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::__construct($connection);
	 }

	/**
	 * Determine if the given table has a given column.
	 *
	 * @param string  $table
	 * @param string  $column
	 * @return bool
	 * @static 
	 */
	 public static function hasColumn($table, $column){
		//Method inherited from Illuminate\Database\Schema\Builder
		return Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
	 }

	/**
	 * Modify a table on the schema.
	 *
	 * @param string   $table
	 * @param Closure  $callback
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function table($table, $callback){
		//Method inherited from Illuminate\Database\Schema\Builder
		return Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
	 }

	/**
	 * Create a new table on the schema.
	 *
	 * @param string   $table
	 * @param Closure  $callback
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function create($table, $callback){
		//Method inherited from Illuminate\Database\Schema\Builder
		return Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
	 }

	/**
	 * Drop a table from the schema.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function drop($table){
		//Method inherited from Illuminate\Database\Schema\Builder
		return Illuminate\Database\Schema\MySqlBuilder::drop($table);
	 }

	/**
	 * Drop a table from the schema if it exists.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function dropIfExists($table){
		//Method inherited from Illuminate\Database\Schema\Builder
		return Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
	 }

	/**
	 * Rename a table on the schema.
	 *
	 * @param string  $from
	 * @param string  $to
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function rename($from, $to){
		//Method inherited from Illuminate\Database\Schema\Builder
		return Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
	 }

	/**
	 * Get the database connection instance.
	 *
	 * @return \Illuminate\Database\Connection
	 * @static 
	 */
	 public static function getConnection(){
		//Method inherited from Illuminate\Database\Schema\Builder
		return Illuminate\Database\Schema\MySqlBuilder::getConnection();
	 }

	/**
	 * Set the database connection instance.
	 *
	 * @param \Illuminate\Database\Connection
	 * @return \Illuminate\Database\Schema\Builder
	 * @static 
	 */
	 public static function setConnection($connection){
		//Method inherited from Illuminate\Database\Schema\Builder
		return Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
	 }

}

class Seeder extends Illuminate\Database\Seeder{
}

class Session extends Illuminate\Support\Facades\Session{
	/**
	 * Create a new manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return void
	 * @static 
	 */
	 public static function __construct($app){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Session\SessionManager::__construct($app);
	 }

	/**
	 * Get a driver instance.
	 *
	 * @param string  $driver
	 * @return mixed
	 * @static 
	 */
	 public static function driver($driver = null){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Session\SessionManager::driver($driver);
	 }

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string   $driver
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function extend($driver, $callback){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Session\SessionManager::extend($driver, $callback);
	 }

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array
	 * @static 
	 */
	 public static function getDrivers(){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Session\SessionManager::getDrivers();
	 }

	/**
	 * Dynamically call the default driver instance.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Session\SessionManager::__call($method, $parameters);
	 }

}

class Str extends Illuminate\Support\Str{
}

class URL extends Illuminate\Support\Facades\URL{
	/**
	 * Create a new URL Generator instance.
	 *
	 * @param \Symfony\Component\Routing\RouteCollection  $routes
	 * @param \Symfony\Component\HttpFoundation\Request   $request
	 * @return void
	 * @static 
	 */
	 public static function __construct($routes, $request){
		 Illuminate\Routing\UrlGenerator::__construct($routes, $request);
	 }

	/**
	 * Get the full URL for the current request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function full(){
		return Illuminate\Routing\UrlGenerator::full();
	 }

	/**
	 * Get the current URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function current(){
		return Illuminate\Routing\UrlGenerator::current();
	 }

	/**
	 * Get the URL for the previous request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function previous(){
		return Illuminate\Routing\UrlGenerator::previous();
	 }

	/**
	 * Generate a absolute URL to the given path.
	 *
	 * @param string  $path
	 * @param mixed   $parameters
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function to($path, $parameters = array(), $secure = null){
		return Illuminate\Routing\UrlGenerator::to($path, $parameters, $secure);
	 }

	/**
	 * Generate a secure, absolute URL to the given path.
	 *
	 * @param string  $path
	 * @param array   $parameters
	 * @return string
	 * @static 
	 */
	 public static function secure($path, $parameters = array()){
		return Illuminate\Routing\UrlGenerator::secure($path, $parameters);
	 }

	/**
	 * Generate a URL to an application asset.
	 *
	 * @param string  $path
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function asset($path, $secure = null){
		return Illuminate\Routing\UrlGenerator::asset($path, $secure);
	 }

	/**
	 * Generate a URL to a secure asset.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function secureAsset($path){
		return Illuminate\Routing\UrlGenerator::secureAsset($path);
	 }

	/**
	 * Get the URL to a named route.
	 *
	 * @param string  $name
	 * @param mixed   $parameters
	 * @param bool    $absolute
	 * @return string
	 * @static 
	 */
	 public static function route($name, $parameters = array(), $absolute = true){
		return Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
	 }

	/**
	 * Get the URL to a controller action.
	 *
	 * @param string  $action
	 * @param mixed   $parameters
	 * @param bool    $absolute
	 * @return string
	 * @static 
	 */
	 public static function action($action, $parameters = array(), $absolute = true){
		return Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
	 }

	/**
	 * Determine if the given path is a valid URL.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isValidUrl($path){
		return Illuminate\Routing\UrlGenerator::isValidUrl($path);
	 }

	/**
	 * Get the request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
		return Illuminate\Routing\UrlGenerator::getRequest();
	 }

	/**
	 * Set the current request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return void
	 * @static 
	 */
	 public static function setRequest($request){
		 Illuminate\Routing\UrlGenerator::setRequest($request);
	 }

	/**
	 * Get the Symfony URL generator instance.
	 *
	 * @return \Symfony\Component\Routing\Generator\UrlGenerator
	 * @static 
	 */
	 public static function getGenerator(){
		return Illuminate\Routing\UrlGenerator::getGenerator();
	 }

	/**
	 * Set the Symfony URL generator instance.
	 *
	 * @param \Symfony\Component\Routing\Generator\UrlGenerator  $generator
	 * @return void
	 * @static 
	 */
	 public static function setGenerator($generator){
		 Illuminate\Routing\UrlGenerator::setGenerator($generator);
	 }

}

class Validator extends Illuminate\Support\Facades\Validator{
	/**
	 * Create a new Validator factory instance.
	 *
	 * @param \Symfony\Component\Translation\TranslatorInterface  $translator
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function __construct($translator, $container = null){
		 Illuminate\Validation\Factory::__construct($translator, $container);
	 }

	/**
	 * Create a new Validator instance.
	 *
	 * @param array  $data
	 * @param array  $rules
	 * @param array  $messages
	 * @return \Illuminate\Validation\Validator
	 * @static 
	 */
	 public static function make($data, $rules, $messages = array()){
		return Illuminate\Validation\Factory::make($data, $rules, $messages);
	 }

	/**
	 * Register a custom validator extension.
	 *
	 * @param string  $rule
	 * @param Closure|string  $extension
	 * @return void
	 * @static 
	 */
	 public static function extend($rule, $extension){
		 Illuminate\Validation\Factory::extend($rule, $extension);
	 }

	/**
	 * Register a custom implicit validator extension.
	 *
	 * @param string   $rule
	 * @param Closure  $extension
	 * @return void
	 * @static 
	 */
	 public static function extendImplicit($rule, $extension){
		 Illuminate\Validation\Factory::extendImplicit($rule, $extension);
	 }

	/**
	 * Set the Validator instance resolver.
	 *
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function resolver($resolver){
		 Illuminate\Validation\Factory::resolver($resolver);
	 }

	/**
	 * Get the Translator implementation.
	 *
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 * @static 
	 */
	 public static function getTranslator(){
		return Illuminate\Validation\Factory::getTranslator();
	 }

	/**
	 * Get the Presence Verifier implementation.
	 *
	 * @return \Illuminate\Validation\PresenceVerifierInterface
	 * @static 
	 */
	 public static function getPresenceVerifier(){
		return Illuminate\Validation\Factory::getPresenceVerifier();
	 }

	/**
	 * Set the Presence Verifier implementation.
	 *
	 * @param \Illuminate\Validation\PresenceVerifierInterface  $presenceVerifier
	 * @return void
	 * @static 
	 */
	 public static function setPresenceVerifier($presenceVerifier){
		 Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
	 }

}

class View extends Illuminate\Support\Facades\View{
	/**
	 * Create a new view environment instance.
	 *
	 * @param \Illuminate\View\Engines\EngineResolver  $engines
	 * @param \Illuminate\View\ViewFinderInterface  $finder
	 * @param \Illuminate\Events\Dispatcher  $events
	 * @return void
	 * @static 
	 */
	 public static function __construct($engines, $finder, $events){
		 Illuminate\View\Environment::__construct($engines, $finder, $events);
	 }

	/**
	 * Get a evaluated view contents for the given view.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param array   $mergeData
	 * @return \Illuminate\View\View
	 * @static 
	 */
	 public static function make($view, $data = array(), $mergeData = array()){
		return Illuminate\View\Environment::make($view, $data, $mergeData);
	 }

	/**
	 * Get a evaluated view contents for a named view.
	 *
	 * @param string $view
	 * @param mixed $data
	 * @return \Illuminate\View\View
	 * @static 
	 */
	 public static function of($view, $data = array()){
		return Illuminate\View\Environment::of($view, $data);
	 }

	/**
	 * Register a named view.
	 *
	 * @param string $view
	 * @param string $name
	 * @return void
	 * @static 
	 */
	 public static function name($view, $name){
		 Illuminate\View\Environment::name($view, $name);
	 }

	/**
	 * Determine if a given view exists.
	 *
	 * @param string  $view
	 * @return bool
	 * @static 
	 */
	 public static function exists($view){
		return Illuminate\View\Environment::exists($view);
	 }

	/**
	 * Get the rendered contents of a partial from a loop.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param string  $iterator
	 * @param string  $empty
	 * @return string
	 * @static 
	 */
	 public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
		return Illuminate\View\Environment::renderEach($view, $data, $iterator, $empty);
	 }

	/**
	 * Add a piece of shared data to the environment.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function share($key, $value = null){
		 Illuminate\View\Environment::share($key, $value);
	 }

	/**
	 * Register a view creator event.
	 *
	 * @param array|string  $views
	 * @param \Closure|string  $callback
	 * @return array
	 * @static 
	 */
	 public static function creator($views, $callback){
		return Illuminate\View\Environment::creator($views, $callback);
	 }

	/**
	 * Register a view composer event.
	 *
	 * @param array|string  $views
	 * @param \Closure|string  $callback
	 * @return array
	 * @static 
	 */
	 public static function composer($views, $callback){
		return Illuminate\View\Environment::composer($views, $callback);
	 }

	/**
	 * Call the composer for a given view.
	 *
	 * @param \Illuminate\View\View  $view
	 * @return void
	 * @static 
	 */
	 public static function callComposer($view){
		 Illuminate\View\Environment::callComposer($view);
	 }

	/**
	 * Call the creator for a given view.
	 *
	 * @param \Illuminate\View\View  $view
	 * @return void
	 * @static 
	 */
	 public static function callCreator($view){
		 Illuminate\View\Environment::callCreator($view);
	 }

	/**
	 * Start injecting content into a section.
	 *
	 * @param string  $section
	 * @param string  $content
	 * @return void
	 * @static 
	 */
	 public static function startSection($section, $content = ''){
		 Illuminate\View\Environment::startSection($section, $content);
	 }

	/**
	 * Inject inline content into a section.
	 *
	 * @param string  $section
	 * @param string  $content
	 * @return void
	 * @static 
	 */
	 public static function inject($section, $content){
		 Illuminate\View\Environment::inject($section, $content);
	 }

	/**
	 * Stop injecting content into a section and return its contents.
	 *
	 * @return string
	 * @static 
	 */
	 public static function yieldSection(){
		return Illuminate\View\Environment::yieldSection();
	 }

	/**
	 * Stop injecting content into a section.
	 *
	 * @param bool  $overwrite
	 * @return string
	 * @static 
	 */
	 public static function stopSection($overwrite = false){
		return Illuminate\View\Environment::stopSection($overwrite);
	 }

	/**
	 * Get the string contents of a section.
	 *
	 * @param string  $section
	 * @param string  $default
	 * @return string
	 * @static 
	 */
	 public static function yieldContent($section, $default = ''){
		return Illuminate\View\Environment::yieldContent($section, $default);
	 }

	/**
	 * Flush all of the section contents.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flushSections(){
		 Illuminate\View\Environment::flushSections();
	 }

	/**
	 * Increment the rendering counter.
	 *
	 * @return void
	 * @static 
	 */
	 public static function incrementRender(){
		 Illuminate\View\Environment::incrementRender();
	 }

	/**
	 * Decrement the rendering counter.
	 *
	 * @return void
	 * @static 
	 */
	 public static function decrementRender(){
		 Illuminate\View\Environment::decrementRender();
	 }

	/**
	 * Check if there are no active render operations.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function doneRendering(){
		return Illuminate\View\Environment::doneRendering();
	 }

	/**
	 * Add a location to the array of view locations.
	 *
	 * @param string  $location
	 * @return void
	 * @static 
	 */
	 public static function addLocation($location){
		 Illuminate\View\Environment::addLocation($location);
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string|array  $hints
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hints){
		 Illuminate\View\Environment::addNamespace($namespace, $hints);
	 }

	/**
	 * Register a valid view extension and its engine.
	 *
	 * @param string   $extension
	 * @param string   $engine
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function addExtension($extension, $engine, $resolver = null){
		 Illuminate\View\Environment::addExtension($extension, $engine, $resolver);
	 }

	/**
	 * Get the extension to engine bindings.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getExtensions(){
		return Illuminate\View\Environment::getExtensions();
	 }

	/**
	 * Get the engine resolver instance.
	 *
	 * @return \Illuminate\View\Engines\EngineResolver
	 * @static 
	 */
	 public static function getEngineResolver(){
		return Illuminate\View\Environment::getEngineResolver();
	 }

	/**
	 * Get the view finder instance.
	 *
	 * @return \Illuminate\View\ViewFinderInterface
	 * @static 
	 */
	 public static function getFinder(){
		return Illuminate\View\Environment::getFinder();
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getDispatcher(){
		return Illuminate\View\Environment::getDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static 
	 */
	 public static function setDispatcher($events){
		 Illuminate\View\Environment::setDispatcher($events);
	 }

	/**
	 * Get the IoC container instance.
	 *
	 * @return \Illuminate\Container\Container
	 * @static 
	 */
	 public static function getContainer(){
		return Illuminate\View\Environment::getContainer();
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		 Illuminate\View\Environment::setContainer($container);
	 }

	/**
	 * Get an item from the shared data.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function shared($key, $default = null){
		return Illuminate\View\Environment::shared($key, $default);
	 }

	/**
	 * Get all of the shared data for the environment.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getShared(){
		return Illuminate\View\Environment::getShared();
	 }

	/**
	 * Get the entire array of sections.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getSections(){
		return Illuminate\View\Environment::getSections();
	 }

	/**
	 * Get all of the registered named views in environment.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getNames(){
		return Illuminate\View\Environment::getNames();
	 }

}

