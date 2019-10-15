<?php

class WizbiiSerie implements JsonSerializable
{
    private $id;
    private $type;
    private $questionIds;

    public function __construct($id, $type, $questionIds = [])
    {
        $this->id = $id;
        $this->type = $type;
        $this->questionIds = $questionIds;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'question_ids' => $this->questionIds
        ];
    }

    public function addQuestionId($questionId)
    {
        $this->questionIds[] = $questionId;
    }
}