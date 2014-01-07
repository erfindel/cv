<?php
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use FF\ServiceProvider\LessServiceProvider;

$cv = Yaml::parse(__DIR__ . '/../config/cv.yml');

$app = new Silex\Application();
$app['locale'] = 'fr';

//$app['debug'] = true;

// Register to service provider : Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../assets/views',
));

// Register FF Silex Less service provider
$app->register(new LessServiceProvider(), array(
    'less.sources'     => array(__DIR__.'/../assets/less/style.less'), // specify one or serveral .less files
    'less.target'      => __DIR__.'/css/extras.css', // specify .css target file
    'less.formatter'      => LessServiceProvider::FORMATTER_COMPRESSED,
    //'less.target_mode' => 0775, // Optional
));




$app->get('/', function () use ($app, $cv) {
    return $app['twig']->render('cv.html.twig', array(
    	'cv' => $cv,
    ));
});

$app->run();




