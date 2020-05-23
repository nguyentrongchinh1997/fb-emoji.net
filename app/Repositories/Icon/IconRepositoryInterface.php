<?php


namespace App\Repositories\Icon;


/**
 * Interface IconRepositoryInterface
 * @package App\Repositories\Icon
 */
interface IconRepositoryInterface
{
    /**
     * @param $type
     * @return mixed
     */
    public function getIconsByType($type);
}
