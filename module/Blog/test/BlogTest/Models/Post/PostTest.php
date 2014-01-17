<?php

namespace BlogTest\Models\Post;

use PHPUnit_Framework_TestCase;
use Blog\Models\Post\Post;

class PostTest extends PHPUnit_Framework_TestCase
{
    public function testObjectPropertiesSet()
    {
        // setting up testing values
        $id = 1;
        $title = "tested title";

        // setting up sample case
        $post = new Post();
        $post->setId($id);
        $post->setTitle($title);

        // getting actual values
        $refPost = new \ReflectionObject($post);
        $idProp = $refPost->getProperty('_id');
        $idProp->setAccessible(true);
        $titleProp = $refPost->getProperty('_title');
        $titleProp->setAccessible(true);

        $this->assertEquals($id, $idProp->getValue($post), "ID not properly set by Post setter method");
        $this->assertEquals($title, $titleProp->getValue($post), "Title not properly set by Post setter method");
    }

    public function testObjectPropotiesGet()
    {
        // setting up testing values
        $id = 1;
        $title = "tested title";

        // setting up test case
        $post = new Post();
        $refPost = new \ReflectionObject($post);
        $idProp = $refPost->getProperty('_id');
        $idProp->setAccessible(true);
        $idProp->setValue($post, $id);

        $titleProp = $refPost->getProperty('_title');
        $titleProp->setAccessible(true);
        $titleProp->setValue($post, $title);

        $this->assertEquals($id, $post->getId(), "ID not properly returned by Post getter method");
        $this->assertEquals($title, $post->getTitle(), "Title not properly returned by Post getter method");
    }
}