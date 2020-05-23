<?php


namespace App\Repositories\Icon;


use App\Repositories\Repository;

/**
 * Class IconRepository
 * @package App\Repositories\Icon
 */
class IconRepository extends Repository implements IconRepositoryInterface
{
    /**
     * @return mixed|string
     */
    public function getModel()
    {
        return \App\Icon::class;
    }

    /**
     * @param $type
     * @return mixed
     */
    public function getIconsByType($type)
    {
        return $this->_model->where('type', $type)
            ->get();
    }
}
