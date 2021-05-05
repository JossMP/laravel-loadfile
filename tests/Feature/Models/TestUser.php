<?php

namespace Tests\Feature\Models;

use EllGreen\LaravelLoadFile\Builder\Builder;
use EllGreen\LaravelLoadFile\Laravel\Traits\LoadsFiles;
use Illuminate\Database\Eloquent\Model;

class TestUser extends Model
{
    use LoadsFiles;

    public function loadFileOptions(Builder $builder): void
    {
        $builder->replace();
    }
}
