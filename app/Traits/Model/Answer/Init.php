<?php

namespace Traits\Model\Answer;

trait Init
{
    public static function init_with_DB_state(array $state): self
    {
        $answer = new self();

        $answer->id = (int) $state['q_id'];
        $answer->text = $state['a_text'];
        $answer->updatedAt = $state['a_updated_at'];

        return $answer;
    }
}
