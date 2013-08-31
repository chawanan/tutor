<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FACEBOOK_HELPER extends CI_Model {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
     // public function __construct(){
        // parent::__construct();
        // parse_str( $_SERVER['QUERY_STRING'], $_REQUEST );
        // $CI = & get_instance();
        // $CI->config->load("facebook",TRUE);
        // $config = $CI->config->item('facebook');
        // $this->load->library('Facebook', $config);
     // }
     
     
     //Type 1) work 2) portfolio 3) event gallery
     function getPagePhoto()
     {
        //382607191872039 << Dr.Apichai Fanpage
        //Replace with your Facebook Page ID
        //https://graph.facebook.com/382607191872039/albums?fields=id,name,description&limit=500
        $facebook_page_owner = "382607191872039";
     
        //Set the cache time and the location of where the cache is stored.
        $cachetime = 3;
        $cachefile = APPPATH."cache/albums";
     
        //checks if file exists and the cache is "recent" enough
        // if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile))
        // {
            // $string = file_get_contents($cachefile);
        // }
        // //if cache is too "old"
        // else
        // {
            //get ID of albums, the names of albums and the limit of how many albums to get. If the limit isn't set, then only 25 albums are displayed (Thanks to "Jeremy" for solution)
            $string = file_get_contents('https://graph.facebook.com/'.$facebook_page_owner.'/albums?fields=id,name,description&limit=500');
     
            //open the cache file and write the info of albums to the file (for quicker retrieval)
            $fp = fopen($cachefile, 'w');
            fwrite($fp, $string);
            fclose($fp);
        //}
        
        //decode the cached file
        $jdata = json_decode($string);
              
         return $jdata;     
      }     
    
}


/* End of file facebookHelper.php */
/* Location: ./application/models/facebookHelper.php */