<?php

$load_release_hash = function () {
    $map = get_template_directory().'/anticache.json';
    if (!file_exists($map)) {
        return '';
    }
    $content = json_decode(file_get_contents($map));
    if (!is_object($content) || !isset($content->anticache)) {
        return '';
    }

    return $content->anticache;
};

define('ANTICACHE_HASH', $load_release_hash());
define('TOPICS_POST_TYPE', 'topics');
define('NEWS_POST_TYPE', 'news');
define( 'NEWS_SLUG', 'news' );
// define('TOPICS_POST_TYPE_TAG', 'topics-tag');
define('TOPICS_POST_TYPE_CATEGORY', 'topics-category');
define('NEWS_POST_TYPE_CATEGORY', 'news-category');

// define('BLOG_POST_TYPE', 'blog');
// define('BLOG_POST_TYPE_TAG', 'blog-tag');
// define('BLOG_POST_TYPE_CATEGORY', 'blog-category');
