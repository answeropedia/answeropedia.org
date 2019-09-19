<?php

namespace Traits\Model\Question;

trait Image
{
    public function get_image_URL_large(string $lang): string
    {
        return SITE_URL . '/uploads/img/' . $lang . '/' . $this->id . '/' . $this->imageBaseName . '_lg.jpg';
    }

    public function get_image_URL_medium(string $lang): string
    {
        return SITE_URL . '/uploads/img/' . $lang . '/' . $this->id . '/' . $this->imageBaseName . '_md.jpg';
    }
}
