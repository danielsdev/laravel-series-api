<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\Series;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('series', 'Series\ListSeriesAction');
$router->post('series', 'Series\CreateSeriesAction');
$router->get('series/{id}', 'Series\GetSeriesAction');
$router->patch('series/{id}', 'Series\UpdateSeriesAction');
$router->delete('series/{id}', 'Series\DeleteSeriesAction');

$router->get('series/{id}/seasons', 'Season\ListSeasonAction');
$router->get('series/{id}/episodes', 'Episode\ListEpisodeAction');

$router->patch('episodes/{id}/watch', 'Episode\WatchEpisodeAction');
