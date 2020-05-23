<?php


namespace App\Repositories;


/**
 * Interface RepositoryInterface
 * @package App\Repositories
 */
interface RepositoryInterface
{
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param $id
     * @return mixed
     */
    public function findOrFail($id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);

    /**
     * @param array $attrs
     * @return mixed
     */
    public function create($attrs = []);
}
