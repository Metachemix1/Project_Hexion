<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 22/01/14
 * Time: 10:44
 */

class Pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if ( ! file_exists('application/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('template/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('template/footer', $data);
    }
}