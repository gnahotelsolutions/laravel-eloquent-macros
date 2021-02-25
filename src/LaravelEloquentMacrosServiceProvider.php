<?php

namespace Gnahotelsolutions\LaravelEloquentMacros;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;

class LaravelEloquentMacrosServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        Builder::macro('whereNot', function ($column, $operator = null, $value = null) {
            return $this->where($column, $operator, $value, 'and not');
        });

        Builder::macro('orWhereNot', function ($column, $operator = null, $value = null) {
            return $this->where($column, $operator, $value, 'or not');
        });
    }
}
