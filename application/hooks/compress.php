<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$CI     =& get_instance();
$buffer = $CI->output->get_output();

$search = array(
    '/\>[^\S ]+/s',
    '/[^\S ]+\</s',
    '/(\s)+/s',
    '#(?://)?<!\[CDATA\[(.*?)(?://)?\]\]>#s',
    '/\>(\s)+\</'
);

$replace = array(
    '>',
    '<',
    '\\1',
    "//&lt;![CDATA[\n".'\1'."\n//]]>",
    '><'
);

$buffer = preg_replace($search, $replace, $buffer);

$CI->output->set_output($buffer);
$CI->output->_display();
