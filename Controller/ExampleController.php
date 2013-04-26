<?php
class ExampleController extends AdminAppController {

    public function index(){
        // SomethingsController
        $this->Session->setFlash(__('The something has been saved'), 'alert', array(
            'plugin' => 'TwitterBootstrap',
            'class' => 'alert-success'
        ));
        // $this->Session->setFlash(__('The something could not be saved. Please, try again.'), 'alert', array(
        //     'plugin' => 'TwitterBootstrap',
        //     'class' => 'alert-error'
        // ));     
    }

    public function layout($name) {
        $this->layout = $name;
        $this->render($name);
    }
}
