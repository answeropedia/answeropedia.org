<?php

class Mapper_Category__create__negative__title__Test extends Abstract_DB_TestCase
{
    protected $setUpDB = ['ru' => ['categories']];

    public function test_Exception_when_title_is_empty()
    {
        $category = new Category_Model();
        $category->title = '';

        $this->expectExceptionMessage('Category title param "" must have a length between 2 and 127');
        $category = (new Category_Mapper('ru'))->create($category);
    }

    public function test_Exception_when_title_too_short()
    {
        $category = new Category_Model();
        $category->title = 'x';

        $this->expectExceptionMessage('Category title param "x" must have a length between 2 and 127');
        $category = (new Category_Mapper('ru'))->create($category);
    }

    public function test_Exception_when_title_too_long()
    {
        $category = new Category_Model();
        $category->title = 'title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title';

        $this->expectExceptionMessage('Category title param "title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title_42_title" must have a length between 2 and 127');
        $category = (new Category_Mapper('ru'))->create($category);
    }
}