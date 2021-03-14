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
define('STAFF_POST_TYPE', 'staff');
define('NEWS_POST_TYPE', 'news');
define( 'NEWS_SLUG', 'news' );
define('SDG_POST_TYPE', 'sdg');
define( 'SDG_SLUG', 'sdg' );
// define('TOPICS_POST_TYPE_TAG', 'topics-tag');
define('NEWS_POST_TYPE_CATEGORY', 'news-category');
define('SDG_POST_TYPE_CATEGORY', 'sdg-category');

// define('BLOG_POST_TYPE', 'blog');
// define('BLOG_POST_TYPE_TAG', 'blog-tag');
// define('BLOG_POST_TYPE_CATEGORY', 'blog-category');

define( 'ABOUT_PAGE', 'about');
define( 'MAKING_PAGE', 'making');
define( 'RECRUIT_PAGE', 'recruit');
define( 'CONTACT_PAGE', 'contact');