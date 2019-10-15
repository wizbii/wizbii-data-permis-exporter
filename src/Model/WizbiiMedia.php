<?php

class WizbiiMedia implements JsonSerializable
{
    const CONTENT_TYPE_JPEG = 'image/jpeg';
    const CONTENT_TYPE_MP3 = 'audio/mpeg';
    const CONTENT_TYPE_OGG = 'audio/ogg';
    const CONTENT_TYPE_MP4 = 'video/mp4';

    private $contentType;
    private $uri;

    private function __construct($contentType, $uri)
    {
        $this->contentType = $contentType;
        $this->uri = $uri;
    }

    public function jsonSerialize()
    {
        return [
            'content_type' => $this->contentType,
            'uri' => $this->uri
        ];
    }

    public static function createJPEG($uri)
    {
        return new WizbiiMedia(self::CONTENT_TYPE_JPEG, $uri);
    }

    public static function createMp3($uri)
    {
        return new WizbiiMedia(self::CONTENT_TYPE_MP3, $uri);
    }

    public static function createOgg($uri)
    {
        return new WizbiiMedia(self::CONTENT_TYPE_OGG, $uri);
    }

    public static function createMP4($uri)
    {
        return new WizbiiMedia(self::CONTENT_TYPE_MP4, $uri);
    }
}