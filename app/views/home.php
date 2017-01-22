<!--Display Messages-->
<?php if($this->session->flashdata('registered')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('registered') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('logged_out')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('logged_out') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('need_login')) : ?>
    <?php echo '<p class="text-error">' .$this->session->flashdata('need_login') . '</p>'; ?>
<?php endif; ?>

<h1>Welcome to My First App</h1>
<p>This is a simple application using codeIgniter FrameWork . This application allows you to register a user and perform login Logout operations using databse and session.</p>
<?php if($this->session->userdata('logged_in')) : ?>
<br />
<?php endif; ?>
