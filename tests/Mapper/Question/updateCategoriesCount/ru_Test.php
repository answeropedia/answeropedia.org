<?php

class Mapper_Question__updateCategoriesCount__ru__Test extends Abstract_DB_TestCase
{
    protected $setUpDB = ['ru' => ['questions']];

    public function test__Base()
    {
        $question = new \Model\Question();
        $question->id = 13;
        $question->categoriesCount = 2;

        $question = (new \Mapper\Question('ru'))->updateCategoriesCount($question);

        $updatedQuestion = (new Question_Query('ru'))->question_with_ID(13);

        $this->assertEquals(13, $updatedQuestion->id);
        $this->assertEquals(2, $updatedQuestion->categoriesCount);
    }

    public function test__EmptyArray()
    {
        $question = new \Model\Question();
        $question->id = 13;
        $question->categoriesCount = 0;

        $question = (new \Mapper\Question('ru'))->updateCategoriesCount($question);

        $updatedQuestion = (new Question_Query('ru'))->question_with_ID(13);

        $this->assertEquals(13, $updatedQuestion->id);
        $this->assertEquals(0, $updatedQuestion->categoriesCount);
    }

    public function test__CategoriesNotSet()
    {
        $question = new \Model\Question();
        $question->id = 13;

        $question = (new \Mapper\Question('ru'))->updateCategoriesCount($question);

        $this->assertEquals(13, $question->id);
        $this->assertEquals(0, $question->categoriesCount);
    }
}
