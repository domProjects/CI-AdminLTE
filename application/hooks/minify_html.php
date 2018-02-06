<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('minify_html'))
{
	function minify_html()
	{
		ini_set('pcre.recursion_limit', '16777');

		$CI =& get_instance();

		$buffer = $CI->output->get_output();

		$re = '%(?>[^\S ]\s*| \s{2,})(?=[^<]*+(?:<(?!/?(?:textarea|pre|script)\b)[^<]*+)*+(?:<(?>textarea|pre|script)\b| \z))%Six';

	    $new_buffer = preg_replace($re, '', $buffer);

		if ($new_buffer === NULL)
		{
			$new_buffer = $buffer;
		}

		$CI->output->set_output($new_buffer);
		$CI->output->_display();
	}
}
