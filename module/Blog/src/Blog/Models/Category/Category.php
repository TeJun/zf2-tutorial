<?php

namespace Blog\Models\Category;

use Blog\Models;

class Category extends Models\DomainModelAbstract
{
    private $_name;

    /**
     * @param $id
     * @return Category
     */
    public function setId($id){
        $this->_id = $id;
        return $this;
    }

    /**
     * @param $name
     * @return Category
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }
}