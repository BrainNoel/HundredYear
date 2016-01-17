<?php
class Login extends CI_Controller
{
    public function index()
    {
        $data['captcha'] = $this->captcha();
        $this->load->view('admin/login', $data);
    }

    public function captcha()
    {
        $this->load->helper('captcha');
        $vals = array(
            'img_path'   => './runtime/captcha/',
            'img_url'    => $this->config->item('base_url').'runtime/captcha/',
            'word'       => 'this is captcha',
            'img_width'  => '300',
            'img_height' => '42',
            // 'font_path' => './static/flat-ui/dist/fonts/lato/lato-black.ttf',
            // 'img_width' => '150',
            // 'img_height'    => 30,
            // 'expiration'    => 7200,
            // 'word_length'   => 8,
            // 'font_size' => 16,
            // 'img_id'    => 'Imageid',
            // 'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            //
            // // White background and border, black text and red grid
            // 'colors'    => array(
            //     'background' => array(255, 255, 255),
            //     'border' => array(255, 255, 255),
            //     'text' => array(0, 0, 0),
            //     'grid' => array(255, 40, 40)
            // )
        );
        $cap = create_captcha($vals);
        return $cap['image'];
    }
}
