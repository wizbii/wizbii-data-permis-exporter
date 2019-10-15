<?php

class WizbiiQuestion implements JsonSerializable
{
    private $id;
    private $type;
    private $questionDetails;
    private $responses;
    private $correction;

    public function __construct($id, $type, $questionDetails, $responses, $correction)
    {
        $this->id = $id;
        $this->type = $type;
        $this->questionDetails = $questionDetails;
        $this->responses = $responses;
        $this->correction = $correction;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'question_details' => $this->questionDetails,
            'responses' => $this->responses,
            'correction' => $this->correction
        ];
    }
}