<?php

class AdminAppController extends Controller {

    public $components = array(
            'Session',
            // 'Auth' => array(
            //     'authenticate' => array(
            //         'Form' => array(
            //             'fields' => array('username' => 'email')
            //         )
            //     )
            // ),
            'Paginator'=>array(
                    'paramType'=>'querystring',
                    'maxLimit' => 10,
            )
    );
    public $helpers = array(
        'Html' => array('className' => 'TwitterBootstrap.BootstrapHtml'),
        'Form' => array('className' => 'TwitterBootstrap.BootstrapForm'),
        'Paginator' => array('className' => 'TwitterBootstrap.BootstrapPaginator'),
        'Time','Number'
    );
/**
 * [beforeFilter description]
 * @return [type] [description]
 */
    public function beforeFilter(){
        $this->siteName = Configure::read('Admin.site_name');
        $this->layout   = Configure::read('Admin.layout');
    }    
/**
 * beforeRender method
 * @access public
 * @return void
 */
    public function beforeRender() {
        $this->set('site_name',$this->siteName);
        $this->set('title_for_layout',(empty($this->pageTitle)) ? $this->siteName : $this->pageTitle .' / '.$this->siteName );
    }
}
