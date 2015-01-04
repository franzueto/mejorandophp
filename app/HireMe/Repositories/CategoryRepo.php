<?php
/**
 * Created by PhpStorm.
 * User: franz
 * Date: 3/01/15
 * Time: 03:42 PM
 */

namespace HireMe\Repositories;
use HireMe\Entities\Category;


class CategoryRepo extends BaseRepo {

    public function getModel(){
        return new Category;
    }

}