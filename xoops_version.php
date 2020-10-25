<?php

$modversion['name'] = _MI_HUMORVIDEO_NAME;
$modversion['version'] = 0.01;
$modversion['description'] = _MI_HUMORVIDEO_DESC;
$modversion['credits'] = 'humornegro.com';
$modversion['help'] = 'humorvideo.html';
$modversion['license'] = 'humornegro.com';
$modversion['official'] = 0;
$modversion['image'] = 'images/humorvideo_slogo.png';
$modversion['dirname'] = 'humorvideo';

// Menu
$modversion['hasMain'] = 1;
$modversion['hasAdmin'] = 0;

// Blocks
$modversion['blocks'][1]['file'] = 'humorvideo.php';
$modversion['blocks'][1]['name'] = _MI_HUMORVIDEO_BNAME1;
$modversion['blocks'][1]['description'] = 'Shows today video thumb in a block, width=120';
$modversion['blocks'][1]['show_func'] = 'b_humorvideo_show';
