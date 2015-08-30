<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Page_title {

    protected $CI;

    private $page_title = array();

    public function __construct()
    {	
		$this->CI =& get_instance();

        $this->pagetitle_open     = $this->CI->config->item('pagetitle_open');
		$this->pagetitle_close    = $this->CI->config->item('pagetitle_close');
		$this->pagetitle_el_open  = $this->CI->config->item('pagetitle_el_open');
		$this->pagetitle_el_close = $this->CI->config->item('pagetitle_el_close');
    }


    function push($title, $subtitle = '')
    {
		if (!$title) return;

        array_unshift($this->page_title, array('title' => $title, 'subtitle' => $subtitle));
	}


	function show()
	{
		if ($this->page_title)
        {
			$output = $this->pagetitle_open;

			foreach ($this->page_title as $key => $value)
            {
                if (!empty($value['subtitle']))
                {
                    $subtitle = ' ' . $this->pagetitle_el_open .  $value['subtitle'] . $this->pagetitle_el_close;
                }
                else
                {
                    $subtitle = NULL;
                }

                $output.= $value['title'] . $subtitle;
            }

			return $output. $this->pagetitle_close ."\n";
		}

		return NULL;
	}

}
