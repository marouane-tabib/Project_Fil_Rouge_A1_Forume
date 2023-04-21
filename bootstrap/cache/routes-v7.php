<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' =>
  array (
    0 => false,
    1 =>
    array (
      '/_debugbar/open' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Lvpkcy4m1ry66Ctz',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::kZHtfsFXUm7Neux0',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'products.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'products.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'products.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 =>
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/product/([^/]++)(?|(*:101)|/edit(*:114)|(*:122)))/?$}sDu',
    ),
    3 =>
    array (
      39 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 =>
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'products.show',
          ),
          1 =>
          array (
            0 => 'product',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      115 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'products.edit',
          ),
          1 =>
          array (
            0 => 'product',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      123 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'products.update',
          ),
          1 =>
          array (
            0 => 'product',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'products.destroy',
          ),
          1 =>
          array (
            0 => 'product',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      154 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'categories.show',
          ),
          1 =>
          array (
            0 => 'category',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      167 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'categories.edit',
          ),
          1 =>
          array (
            0 => 'category',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      175 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'categories.update',
          ),
          1 =>
          array (
            0 => 'category',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'categories.destroy',
          ),
          1 =>
          array (
            0 => 'category',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 =>
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' =>
  array (
    'debugbar.openhandler' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' =>
      array (
        'domain' => NULL,
        'middleware' =>
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' =>
      array (
        'domain' => NULL,
        'middleware' =>
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' =>
      array (
        'domain' => NULL,
        'middleware' =>
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' =>
      array (
        'domain' => NULL,
        'middleware' =>
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' =>
      array (
        'domain' => NULL,
        'middleware' =>
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lvpkcy4m1ry66Ctz' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' =>
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' =>
        array (
        ),
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'generated::Lvpkcy4m1ry66Ctz',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kZHtfsFXUm7Neux0' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000052c0000000000000000";}";s:4:"hash";s:44:"3DDtkgahYtM0Ou5VnYoSBjEp/KmTBtkcZCJ4ZieocyM=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::kZHtfsFXUm7Neux0',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'products.index',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'products.create',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'products',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'products.store',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'products.show',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'products.edit',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'products/{product}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'products.update',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'products/{product}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'products.destroy',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'categories.index',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'categories.create',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'categories',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'categories.store',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'categories.show',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{category}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'categories.edit',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'categories/{category}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'categories.update',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'categories/{category}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'categories.destroy',
        'uses' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdminControllers\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
