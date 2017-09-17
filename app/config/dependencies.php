<?php
/**
 * Created by PhpStorm.
 * User: laugusto
 * Date: 9/16/17
 * Time: 8:58 PM
 */

$container = $app->getContainer();

$container['view'] = function ($container) {
    $viewConfig = $container->get('settings')['view'];
    $view = new \Slim\Views\Twig($viewConfig['templates'], [
        'cache' => $viewConfig['cache'],
        'debug' => $viewConfig['debug']
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};

$container[Loja\Action\Home::class] = function ($container) {
    return new Loja\Action\Home($container['view']);
};
