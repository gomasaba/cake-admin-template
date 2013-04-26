<div class="signin">
    <div class="signin-box">
    <h2 class="form-signin-heading">Sign in</h2>

    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo $this->Form->input('username', array(
            'label' => 'Username',
            'type' => 'text',
            'class' => 'input-block-level',
        )); ?>
        <?php echo $this->Form->input('password', array(
            'label' => 'Password',
            'type' => 'password',
            'class' => 'input-block-level',
        )); ?>
        <?php echo $this->Form->submit('Sign in', array(
            'div' => false,
            'class' => 'btn btn-primary',
        )); ?>
        <label class="remember">
            <input type="checkbox" name="rememberMe" value="yes">
            <strong class="remember-label">Stay signed in</strong>
        </label>
    </fieldset>
    <?php echo $this->Form->end(); ?>

    <ul>
      <li>
        <a id="link-forgot-pwd" href="#">Can't access your account?</a>
      </li>
    </ul>
    </div>
</div>
