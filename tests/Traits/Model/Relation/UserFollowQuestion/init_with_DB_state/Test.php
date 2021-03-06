<?php

namespace Test\Traits\Model\Relation\UserFollowQuestion\init_with_DB_state;

class Test extends \PHPUnit\Framework\TestCase
{
    public function test__EnFullParams_ReturnObject()
    {
        $rel = \Model\Relation\UserFollowQuestion::initWithDBState([
            'id'          => 13,
            'user_id'     => 3,
            'question_id' => 9,
            'created_at'  => '2015-11-29 09:28:34',
        ]);

        $this->assertEquals(13, $rel->id);
        $this->assertEquals(3, $rel->userID);
        $this->assertEquals(9, $rel->questionID);
        $this->assertEquals('2015-11-29 09:28:34', $rel->createdAt);
    }

    public function test_RuFullParams_ReturnObject()
    {
        $rel = \Model\Relation\UserFollowQuestion::initWithDBState([
            'id'          => 13,
            'user_id'     => 3,
            'question_id' => 9,
            'created_at'  => '2015-11-29 09:28:34',
        ]);

        $this->assertEquals(13, $rel->id);
        $this->assertEquals(3, $rel->userID);
        $this->assertEquals(9, $rel->questionID);
        $this->assertEquals('2015-11-29 09:28:34', $rel->createdAt);
    }
}
