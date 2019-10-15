<?php

class WizbiiPossibleValues implements JsonSerializable
{
    const CONTENT_YES = "yes";
    const CONTENT_NO = "no";
    const STATUS_VALID = "valid";
    const STATUS_INVALID = "invalid";

    private $content;
    private $status;

    public function __construct($content, $status)
    {
        $this->content = $content;
        $this->status = $status;
    }

    public function jsonSerialize()
    {
        return [
            'content' => $this->content,
            'status' => $this->status
        ];
    }
}