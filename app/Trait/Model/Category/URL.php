<?php

trait URL_Category_Model_Trait
{
    public function get_URL(string $lang): string
    {
        $uri = $this->title;

        $uri = str_replace('_', '__', $uri);
        $uri = str_replace(' ', '_', $uri);

        return SITE_URL . '/' . $lang . '/category/' . urlencode($uri);
    }
}