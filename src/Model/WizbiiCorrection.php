<?php

class WizbiiCorrection implements JsonSerializable
{
    private $content;
    private $medias = [];

    public function __construct($content, $medias = [])
    {
        $this->content = $content;
        $this->medias = $medias;
    }

    public function jsonSerialize()
    {
        return [
            'content' => $this->content,
            'medias' => $this->medias
        ];
    }

    public function addMedia($media)
    {
        $this->medias[] = $media;
    }
}