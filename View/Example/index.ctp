<div class="row">
<div class="span5">
     <h3>レイアウトのサンプル</h3>
     <ul>
          <li>
          <?php echo $this->Html->link('carousel',array(
                              'controller'=>'example',
                              'action'=>'layout','carousel',
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('fluid',array(
                              'controller'=>'example',
                              'action'=>'layout','fluid',
          ));?>          
          </li>
          <li>
          <?php echo $this->Html->link('hero',array(
                              'controller'=>'example',
                              'action'=>'layout','hero',
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('justified-nav',array(
                              'controller'=>'example',
                              'action'=>'layout','justified-nav',
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('marketing-alternate',array(
                              'controller'=>'example',
                              'action'=>'layout','marketing-alternate',
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('marketing-narrow',array(
                              'controller'=>'example',
                              'action'=>'layout','marketing-narrow',
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('signin',array(
                              'controller'=>'example',
                              'action'=>'layout','signin',
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('starter-template',array(
                              'controller'=>'example',
                              'action'=>'layout','starter-template',
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('sticky-footer-navbar',array(
                              'controller'=>'example',
                              'action'=>'layout','sticky-footer-navbar',
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('sticky-footer',array(
                              'controller'=>'example',
                              'action'=>'layout','sticky-footer',
          ));?>
          </li>
     </ul>
     </div>

     <div class="span5">
     <h3>CRUDのサンプル</h3>
     <ul>
          <li>
          <?php echo $this->Html->link('user/index',array(
                              'controller'=>'users',
                              'action'=>'index'
          ));?>          
          </li>
          <li>
          <?php echo $this->Html->link('user/add',array(
                              'controller'=>'users',
                              'action'=>'add'
          ));?>          
          </li>
          <li>
          <?php echo $this->Html->link('user/view',array(
                              'controller'=>'users',
                              'action'=>'view'
          ));?>
          </li>
          <li>
          <?php echo $this->Html->link('user/login',array(
                              'controller'=>'users',
                              'action'=>'login'
          ));?>          
          </li>
     </ul>
     </div>
     
</div>
<h3>Flashのサンプル</h3>
<?php echo $this->Session->flash(); ?>



