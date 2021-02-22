<?php


namespace Laravel\Calc;


use Illuminate\Support\ServiceProvider;
use Laravel\Calc\Calc\Calculator;
use Laravel\Calc\Calc\Contracts\CalcInterface;

class CalcServicesProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CalcInterface::class,Calculator::class);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views','calc');
    }
}