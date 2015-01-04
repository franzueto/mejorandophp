<?php
/**
 * Created by PhpStorm.
 * User: franz
 * Date: 3/01/15
 * Time: 06:02 PM
 */

namespace HireMe\Repositories;


abstract class BaseRepo {

    protected $model;

    public function __construct(){
        $this->model = $this->getModel();
    }

    abstract public function getModel();

    public function find($id){
        return $this->model->find($id);
    }

}