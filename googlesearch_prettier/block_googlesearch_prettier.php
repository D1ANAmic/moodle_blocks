<?php

/**
 *
 * @package   block_googlesearch_prettier
 * @author    Diana Schilling
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_googlesearch_prettier extends block_base {
    function init() {
        $this->title = get_string('pluginname', 'block_googlesearch_prettier');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.

    function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }

        $curlSession = curl_init();
        curl_setopt($curlSession, CURLOPT_URL, 'https://www.googleapis.com/customsearch/v1?key=%20AIzaSyCNEJlaZE_mRrL0OujeDGg6QHEhPqn5ILE&cx=003456580005672116285:3dfak_ktt3q&filetype=html&q=moodle%20blocks');
        curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

        $jsonData = curl_exec($curlSession);
        curl_close($curlSession);

        $obj = json_decode($jsonData);
        $items = $obj->items;

        $searchstring = 'Such-Ergebnisse für "Moodle Blocks": <br><br>';

        foreach($items as $key=>$value){
          $searchstring .= '<a href="' . $value->link . '">' . $value->link . '</a><br>';
        }
        
        $this->content         =  new stdClass;
        $this->content->text   = $searchstring;
        $this->content->footer = '';
     
        return $this->content;
    }

    public function instance_allow_multiple() {
        return true;
    }
}