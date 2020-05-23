<?php


namespace App\Repositories;


/**
 * Class Repository
 * @package App\Repositories
 */
abstract class Repository implements RepositoryInterface
{
    /**
     * @var
     */
    protected $_model;

    /**
     * Repository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * @return mixed
     */
    abstract public function getModel();

    /**
     *
     */
    public function setModel(){
        $this->_model = app()->make($this->getModel());
    }

    /**
     * @return mixed
     */
    public function all(){
        return $this->_model->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id){
        return $this->_model->find($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->_model->findOrFail($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->_model->destroy($id);
    }

    /**
     * @param array $attrs
     * @return mixed
     */
    public function create($attrs = [])
    {
        return $this->_model->create($attrs);
    }
}
