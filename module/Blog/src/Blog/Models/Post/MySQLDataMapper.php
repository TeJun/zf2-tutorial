<?php

namespace Blog\Models\Post;

use Blog\Models\DataMapperAbstract;

class MySQLDataMapper extends DataMapperAbstract implements DataMapperInterface
{
    /**
     * @param $id
     * @see Post
     */
    public function fetchPostById($id)
    {
        $post = new Post();
        $post->setId(1)
             ->setTitle('first tested post');

        return $post;
    }

    public function fetchPostsByCategoryId($id)
    {

    }
}