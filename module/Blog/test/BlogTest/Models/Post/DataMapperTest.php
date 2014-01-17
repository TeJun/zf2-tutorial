<?php

namespace BlogTest\Models\Post;

use PHPUnit_Framework_TestCase;
use Blog\Models\Post\MySQLDataMapper;
use Blog\Models\Post\Post;

class MySQLDataMapperTest extends PHPUnit_Framework_TestCase
{
    public function testGetPostById()
    {
        // test values
        $id = 1;
        $title = 'first tested post';

        // setting up sample
        $pdm = new MySQLDataMapper();
        $post = $pdm->fetchPostById($id);

        $this->assertInstanceOf('Blog\Models\Post\Post', $post,
                'Data Mapper did not return appropriate instance type');
        $this->assertEquals($id, $post->getId());
        $this->assertEquals($title, $post->getTitle());
    }
}