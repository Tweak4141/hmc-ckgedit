<?php

if(!defined('DOKU_INC')) define('DOKU_INC',realpath(dirname(__FILE__).'/../../../').'/');
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_ckgedit_mediamanager extends DokuWiki_Action_Plugin {
    function __construct()
    {
        $this->setupLocale();
    }


    function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('MEDIAMANAGER_STARTED', 'AFTER', $this, 'mediaman_started');
    }
    
    function mediaman_started($event) {
        echo '<script type="text/javascript">
        if (opener.CKEDITOR !== undefined) {
        window.onload = function () {
         jQuery( document ).ready(function() {
               jQuery( ".odd, .even" ).each( function( index, element ){
                     if(!this.title.match(/\.(jpg|jpeg|png|tiff?|gif)$/)){
                     jQuery( this ).html(LANG.plugins.ckgedit.mediamgr_notice+": <b>" + this.title  +"</b>");
                     }
              });
        });
    };
    }</script>';
    }
}
