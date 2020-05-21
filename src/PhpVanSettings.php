<?php

namespace PhpVan\Settings;

use Illuminate\Database\Eloquent\Model;

class PhpVanSettings extends Model
{
    protected $table = 'phpvan_settings';

    protected $perPage = 25;

    /**
     * PhpVanSettings constructor.
     *
     * Overwrite table name if available from config.
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if(config('phpvan_settings.table') && !empty(config('phpvan_settings.table'))) {
            $this->table = (string) config('phpvan_settings.table');
        }
    }
}
