<?php
/*
    Plugin Name: EWDK Allowed Block Types
    Author: Emil Wibe - EW Web Design
    Author URI: https://ew.dk    
*/

add_action('allowed_block_types', function(){
return array(
    //CUSTOM BLOCKS
    'acf/ew-slider',
    //COMMON BLOCKS
    'core/paragraph', //DOES ALSO APPLY TO INLINE IMAGES
    'core/image',
    'core/heading',
    'core/gallery',
    'core/list',
    'core/quote',
    'core/audio',
    'core/cover',
    'core/file',
    'core/video',
    //FORMATTING
    'core/preformatted',
    'core/code',
    'core/freeform: Classic Edit',
    'core/html: Custom HTML',
    'core/pullquote',
    'core/table',
    'core/verse',
    //LAYOUT
    'core/button',
    'core/columns',
    'core/media-text',
    'core/more',
    'core/nextpage: Page break',
    'core/separator',
    'core/spacer',
    //WIDGETS
    'core/shortcode',
    'core/archives',
    'core/categories',
    'core/latest-comments',
    'core/latest-posts',
    //EMBEDS
    'core/embed',
    'core-embed/twitter',
    'core-embed/youtube',
    'core-embed/facebook',
    'core-embed/instagram',
    'core-embed/wordpress',
    'core-embed/soundcloud',
    'core-embed/spotify',
    'core-embed/flickr',
    'core-embed/vimeo',
    'core-embed/animoto',
    'core-embed/cloudup',
    'core-embed/collegehumor',
    'core-embed/dailymotion',
    'core-embed/funnyordie',
    'core-embed/hulu',
    'core-embed/imgur',
    'core-embed/issuu',
    'core-embed/kickstarter',
    'core-embed/meetup-com',
    'core-embed/mixcloud',
    'core-embed/photobucket',
    'core-embed/polldaddy',
    'core-embed/reddit',
    'core-embed/reverbnation',
    'core-embed/screencast',
    'core-embed/scribd',
    'core-embed/slideshare',
    'core-embed/smugmug',
    'core-embed/speaker',
    'core-embed/ted',
    'core-embed/tumblr',
    'core-embed/videopress',
    'core-embed/wordpress-tv',
    );
});