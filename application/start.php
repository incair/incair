<?php
// PHP Errors Configuration
ini_set('display_errors', 'On');

// Incair Config Loader
Incair\Event::listen(Laravel\Config::loader, function($bundle, $file)
{
	return Incair\Config::file($bundle, $file);
});

// Register Class Aliases
$aliases = Incair\Config::get('application.aliases');
Incair\Autoloader::$aliases = $aliases;

// Auto-loader Mappings
Autoloader::map(array(
	'Base_Controller' => path('app').'controllers/base.php',
));

// Auto-loader Directories
Autoloader::directories(array(
	path('app').'models',
	path('app').'libraries',
));

// Incair View Loader
Event::listen(View::loader, function($bundle, $view)
{
	return View::file($bundle, $view, Bundle::path($bundle).'views');
});

// Incair Language Loader
Event::listen(Lang::loader, function($bundle, $language, $file)
{
	return Lang::file($bundle, $language, $file);
});

// Attach the Incair Profiler
if (Config::get('application.profiler'))
{
	Profiler::attach();
}

// Enable the Blade View Engine
Blade::sharpen();

// Set the Default Timezone
date_default_timezone_set(Config::get('application.timezone'));

// Start/Load the User Session
if ( ! Request::cli() and Config::get('session.driver') !== '')
{
	Session::load();
}