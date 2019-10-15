<?php

class WizbiiGlobalObject implements JsonSerializable
{
    private $questions;
    private $series;

    public function __construct($questions = [], $series = [])
    {
        $this->questions = $questions;
        $this->series = $series;
    }

    public function jsonSerialize()
    {
        return [
            'questions' => $this->questions,
            'series' => $this->series
        ];
    }

    public function addQuestion($question)
    {
        $this->questions[] = $question;
    }

    public function addSerie($serie)
    {
        $this->series[] = $serie;
    }
}