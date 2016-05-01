<?php


namespace App\Providers;

use Collective\Annotations\AnnotationsServiceProvider as ServiceProvider;

/**
 * Class AnnotationServiceProvider
 */
class AnnotationServiceProvider extends ServiceProvider
{
    /**
     * The classes to scan for event annotations.
     *
     * @var array
     */
    protected $scanEvents = [];

    /**
     * The classes to scan for route annotations.
     *
     * @var array
     */
    protected $scanRoutes = [];
}
