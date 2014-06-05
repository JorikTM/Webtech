<div id="regtitel">
	<h2>Registreren</h2>
	<p>Vul eerst uw persoonlijke gegevens in. Om volledig van deze site gebruik te kunnen maken moet u ook nog een persoonlijkheidstest maken, deze staat op de volgende pagina.</p>
</div>
	<div id="registreren">
		<form id="registreerformulier" name="register" action="" method="post">
			<div class="persoonlijktekst">
				Nickname: <input type="text" name="nickname" required><br>
				Volledige naam: <input type="text" name="naam" required><br>
				E-mailadres: <input type="email" name="email" required><br>
				Wachtwoord: <input type="password" name="wachtwoord" required><br>
				Geslacht: 	<select>
								<option value="M">Man</option>
								<option value="F">Vrouw</option>
							</select><br>
				Geboortedatum(YYYY-MM-DD): <input type="date" name="gebdatum" required><br>
				Geslachtsvoorkeur: <select name="geslachtsvoorkeur">
								<option value="man">Man</option>
								<option value="vrouw">Vrouw</option>
								<option value="beide">Beide</option>
								</select>
				Leeftijdsvoorkeur (xx-yy): <input type="text" name="leeftijdsvoorkeur" required pattern="\d\d-\d\d"><br>
				Beschrijving: <textarea form="registreerformulier" name="beschrijving" id="beschrijving" required></textarea><br>
			</div>
			
			<br>Merkvoorkeuren:<br>
				
			<div id="checkboxes">
				<ul>
					<li><input type="checkbox" name="merkvoorkeur" value="1" id="1">Coca-Cola</li><br>
				    <li><input type="checkbox" name="merkvoorkeur" value="2">Pepsi</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="3">Nespresso</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="4">Douwe Egberts</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="5">Starbucks</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="6">Apple</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="7">Microsoft</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="8">Philips</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="9">Samsung</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="10">HTC</li><br>
				</ul>
				<ul>
					<li><input type="checkbox" name="merkvoorkeur" value="11">Sony</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="12">Honig</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="13">Conimex</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="14">McDonald's</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="15">Burger King</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="16">Subway</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="17">Unox</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="18">Nike</li><br>
                    <li><input type="checkbox" name="merkvoorkeur" value="19">Adidas</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="20">Ray-Ban</li><br>
				</ul>
			    <ul>
					<li><input type="checkbox" name="merkvoorkeur" value="21">G-Star</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="22">McGreggor</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="23">Zeeman</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="24">Hema</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="25">Scotch &amp; Soda</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="26">Lonsdale</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="27">H&amp;M</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="28">ZARA</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="29">Elmex</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="30">Colgate</li><br>
				</ul>	
				<ul>
					<li><input type="checkbox" name="merkvoorkeur" value="31">Jumbo</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="32">Albert Heijn</li><br>
				    <li><input type="checkbox" name="merkvoorkeur" value="33">C1000</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="34">BMW</li><br>
		   			<li><input type="checkbox" name="merkvoorkeur" value="35">Audi</li><br>
				    <li><input type="checkbox" name="merkvoorkeur" value="36">Volkswagen</li><br>
				    <li><input type="checkbox" name="merkvoorkeur" value="37">Renault</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="38">Ajax</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="39">Feyenoord</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="40">PSV</li><br>
				</ul>				
				<ul>
					<li><input type="checkbox" name="merkvoorkeur" value="41">Kit Kat</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="42">Mars</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="43">HBO</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="44">RTL 4</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="45">RTL 5</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="46">Veronica</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="47">Film 1</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="48">Facebook</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="49">Twitter</li><br>
					<li><input type="checkbox" name="merkvoorkeur" value="50">Spotify</li><br>
				</ul>	
	       </div>			
		<div class="persoonlijktekst" id="submitbutton"><p><input id="submit" type="submit" value="Maak de persoonlijkheidstest"></p></div>
	</form>
</div>
