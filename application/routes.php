/*
	It's easy to route with Incair.
*/
Route::get('/', function()
{
	return View::make('home.index');
});

/*
	Fast event listening,
	good for errors.
*/
Event::listen('404', function()
{
	return Response::error('404');
});
Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
	Route filtering provides an easy method for
	attaching functionality to your routes.
*/
Route::filter('before', function()
{
	// Do stuff before every request to your application...
});
Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});
Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});
Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});