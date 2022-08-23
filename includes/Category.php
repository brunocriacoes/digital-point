<?php

class Category
{
    public $data;
    function __construct($name, $count = -1)
    {
        $this->data = [];
        query_posts(array('category_name' => $name, 'order' => 'ASC', 'posts_per_page' => $count));
        while (have_posts()) :
            the_post();
            $this->data[] = (object) [
                "id" => get_the_ID(),
                "title" => strip_tags( get_the_title() ),
                "resumo" => strip_tags( get_the_excerpt() ),
                "link" => get_the_permalink(),
                "content" => get_the_content(),
                "image" => get_the_post_thumbnail_url(get_the_ID(), 'full'),
            ];
        endwhile;
        wp_reset_query();
    }
}
