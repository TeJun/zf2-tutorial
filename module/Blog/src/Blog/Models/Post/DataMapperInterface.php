<?php

namespace Blog\Models\Post;

interface DataMapperInterface
{
    /**
     * @param $id
     * @return Post;
     */
    public function fetchPostById($id);
    public function fetchPostsByCategoryId($id);
}