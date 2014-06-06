<div id="login">
	<h2>Inloggen</h2>
		<?php
		echo form_open('login/login_validation');
        
        echo validation_errors();
        
        echo "<div>Email:";
        echo form_input('email', $this->input->post('email'));
        echo "</div>";
        
        echo "<div>Password: ";
        echo form_password('password');
        echo "</div>";
        
        echo "<div>";
        echo form_submit('login_submit', 'Login');
        echo "</div>";

		echo form_close();
		
		?>
	<p>Heb je nog geen account?</br> <a href="<?= base_url();?>register">Registreren</a> is gratis!</p>
</div>

