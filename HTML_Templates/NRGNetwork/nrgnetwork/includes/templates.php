<?php

class TT_VC_Templates{

    function __construct(){
        add_filter( 'vc_load_default_templates', array($this, 'custom_template_for_vc') );
    }

    public function custom_template_for_vc($templates){

        // array_unshift( $templates, $data );

        return $templates;

    }

}

if( function_exists('vc_map') )
    new TT_VC_Templates();