<div id="login">
	<h2>Inloggen</h2>
		<?php
		echo form_open('login/login_validation');
        
        echo validation_errors();
        
        echo "<p id=>Nickname:";
        echo form_input('nickname');
        echo "</p>";
        
        echo "<p>Password:";
        echo form_password('password');
        echo "</p>";
        
        echo "<p>";
        echo form_submit('login_submit', 'Login');
        echo "</p>";

		echo form_close();
		
		?>
	<p>Heb je nog geen account?</br> <a href="<?= base_url();?>index.php/register">Registreren</a> is gratis!</p>
</div>

