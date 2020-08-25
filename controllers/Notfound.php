<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * rFlix-Movie & Video Stremaing CMS Pro
 * ----------------------------- rFlix -----------------------------
 * -------------- Movie & Video Stremaing CMS Pro -----------------
 * -------- Professional video content management system ----------
 *
 * @package     rFlix-Movie & Video Stremaing CMS Pro
 * @author      Risfat
 * @copyright   Copyright (c) 2020 - 2021 RisfBD,
 * @license     http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
 * @link        http://risfbd.com
 * @link        md@risfbd.com
 *
 **/
 
class Notfound extends Home_Core_Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $data['title'] = '404-Page not Found';
        $data['page_name']='404';
        $this->load->view('theme/'.$this->active_theme.'/index',$data);
    }
}

