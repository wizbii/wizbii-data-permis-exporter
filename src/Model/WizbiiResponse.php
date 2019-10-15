<?php

class WizbiiResponse implements JsonSerializable
{
    private $content;
    private $possibleValues;

    public function __construct($content, $possibleValues = [])
    {
        $this->content = $content;
        $this->possibleValues = $possibleValues;
    }

    public function jsonSerialize()
    {
        return [
            'content' => $this->content,
            'possible_values' => $this->possibleValues
        ];
    }

    public function addPossibleValue($possibleValue)
    {
        $this->possibleValues[] = $possibleValue;
    }
}