<?php

class ImgMan {

    private $image;

    public function __construct($image_string) {
        $this->image = imagecreatefromstring($image_string);
    }
}