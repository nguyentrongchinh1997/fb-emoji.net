<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Icon
 * @package App
 */
class Icon extends Model
{
    /**
     * @var string
     */
    protected $table = 'icons';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'type'
    ];
}
