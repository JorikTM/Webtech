<div id="regtitel">
    <h2>Registreren</h2>
    <p>Vul eerst uw persoonlijke gegevens in. Om volledig van deze site gebruik te kunnen maken moet u ook nog een persoonlijkheidstest maken, deze staat op de volgende pagina.</p>
</div>
    <div id="registreren">
        <?php
        echo form_open('register/register_validation');
        
        echo validation_errors();
        
        echo "<div>Username:";
        echo form_input('username');
        echo "</div>";
        
        echo "<div>Voornaam:";
        echo form_input('voornaam');
        echo "</div>";
        
        echo "<div>Achternaam:";
        echo form_input('achternaam');
        echo "</div>";
        
        echo "<div>Email:";
        echo form_input('mail');
        echo "</div>";        
        
        echo "<div>Wachtwoord: ";
        echo form_password('password');
        echo "</div>";
        
        echo "<div>Bevestig Wachtwoord: ";
        echo form_password('cpassword');
        echo "</div>";
        
        $geslacht = array(
                  'male'  => 'Man',
                  'female' => 'Vrouw'
                );
        
        echo "<div>Geslacht: ";
        echo form_dropdown('geslacht', $geslacht, 'male');
        echo "</div>";
        
        echo "<div>Geboortedatum:";
        echo form_input('date');
        echo "</div>";
        
        $geslachtvoorkeur = array(
                  'geen' => 'Geen',
                  'male'  => 'Man',
                  'female' => 'Vrouw',
                  'malefem' => 'Man en Vrouw'
                );
        
        echo "<div>Geslachtsvoorkeur: ";
        echo form_dropdown('ges_voorkeur', $geslachtvoorkeur, 'geen');
        echo "</div>";
        
        $leeftijdvoorkeur = array(
                  'geen' => 'Geen',
                  'twintdert'  => '20-30',
                  'dertveer' => '30-40',
                  'veervijf' => '40-50',
                  'vijfplus' => '50+'
                );
        
        echo "<div>Leeftijdsvoorkeur: ";
        echo form_dropdown('leef_voorkeur', $leeftijdvoorkeur, 'geen');
        echo "</div>";
        
        echo "<div>Beschrijving:";
        echo form_textarea('beschrijving');
        echo "</div>";
        
        echo "<div> Merkvoorkeuren: </div>";
        
        echo "<div>Coca-Cola";
        echo form_checkbox('Coca-Cola');
        echo "</div>";
        
        echo "<div>Pepsi";
        echo form_checkbox('Pepsi');
        echo "</div>";
        
        echo "<div>Nespresso";
        echo form_checkbox('Nespresso');
        echo "</div>";
        
        echo "<div>Douwe-Egberts";
        echo form_checkbox('Douwe-Egberts');
        echo "</div>";
        
        echo "<div>Starbucks";
        echo form_checkbox('Starbucks');
        echo "</div>";
        
        echo "<div>Apple";
        echo form_checkbox('Apple');
        echo "</div>";
        
        echo "<div>Microsoft";
        echo form_checkbox('Microsoft');
        echo "</div>";
        
        echo "<div>Philips";
        echo form_checkbox('Philips');
        echo "</div>";
        
        echo "<div>Samsung";
        echo form_checkbox('Samsung');
        echo "</div>";
        
        echo "<div>HTC";
        echo form_checkbox('HTC');
        echo "</div>";
        
        echo "<div>Sony";
        echo form_checkbox('Sony');
        echo "</div>";
        
        echo "<div>Honig";
        echo form_checkbox('Honig');
        echo "</div>";
        
        echo "<div>Conimex";
        echo form_checkbox('Conimex');
        echo "</div>";
        
        echo "<div>McDonald's";
        echo form_checkbox('McDonalds');
        echo "</div>";
        
        echo "<div>Burger King";
        echo form_checkbox('Burger King');
        echo "</div>";
        
        echo "<div>Subway";
        echo form_checkbox('Subway');
        echo "</div>";
        
        echo "<div>Unox";
        echo form_checkbox('Unox');
        echo "</div>";
        
        echo "<div>Nike";
        echo form_checkbox('Nike');
        echo "</div>";
        
        echo "<div>Adidas";
        echo form_checkbox('Adidas');
        echo "</div>";
        
        echo "<div>Ray-Ban";
        echo form_checkbox('Ray-Ban');
        echo "</div>";
        
        echo "<div>G-Star";
        echo form_checkbox('G-Star');
        echo "</div>";
        
        echo "<div>McGreggor";
        echo form_checkbox('McGreggor');
        echo "</div>";
        
        echo "<div>Zeeman";
        echo form_checkbox('Zeeman');
        echo "</div>";
        
        echo "<div>Hema";
        echo form_checkbox('Hema');
        echo "</div>";
        
        echo "<div>Scotch &amp Soda";
        echo form_checkbox('ScotchSoda');
        echo "</div>";
        
        echo "<div>Lonsdale";
        echo form_checkbox('Lonsdale');
        echo "</div>";
        
        echo "<div>H&ampM";
        echo form_checkbox('HM');
        echo "</div>";
        
        echo "<div>Elmex";
        echo form_checkbox('Elmex');
        echo "</div>";
        
        echo "<div>Colgate";
        echo form_checkbox('Colgate');
        echo "</div>";
        
        echo "<div>Jumbo";
        echo form_checkbox('Jumbo');
        echo "</div>";
        
        echo "<div>Albert Heijn";
        echo form_checkbox('Albert Heijn');
        echo "</div>";
        
        echo "<div>C1000";
        echo form_checkbox('C1000');
        echo "</div>";
        
        echo "<div>BMW";
        echo form_checkbox('BMW');
        echo "</div>";
        
        echo "<div>Audi";
        echo form_checkbox('Audi');
        echo "</div>";
        
        echo "<div>Volkswagen";
        echo form_checkbox('Volkswagen');
        echo "</div>";
        
        echo "<div>Renault";
        echo form_checkbox('Renault');
        echo "</div>";
        
        echo "<div>Ajax";
        echo form_checkbox('Ajax');
        echo "</div>";

        echo "<div>Feyenoord";
        echo form_checkbox('Feyenoord');
        echo "</div>";
        
        echo "<div>PSV";
        echo form_checkbox('PSV');
        echo "</div>";
        
        echo "<div>Kit Kat";
        echo form_checkbox('Kit Kat');
        echo "</div>";
        
        echo "<div>Mars";
        echo form_checkbox('Mars');
        echo "</div>";
        
        echo "<div>HBO";
        echo form_checkbox('HBO');
        echo "</div>";
        
        echo "<div>RTL 4";
        echo form_checkbox('RTL 4');
        echo "</div>";
        
        echo "<div>RTL 5";
        echo form_checkbox('RTL 5');
        echo "</div>";
        
        echo "<div>Veronica";
        echo form_checkbox('Veronica');
        echo "</div>";
        
        echo "<div>Film 1";
        echo form_checkbox('Film 1');
        echo "</div>";
        
        echo "<div>Facebook";
        echo form_checkbox('Facebook');
        echo "</div>";
        
        echo "<div>Twitter";
        echo form_checkbox('Twitter');
        echo "</div>";
        
        echo "<div>Spotify";
        echo form_checkbox('Spotify');
        echo "</div>";

        echo "<div>";
        echo form_submit('register_submit', 'Maak de persoonlijkheidstest!');
        echo "</div>";

        echo form_close();
        
        ?>
</div>
