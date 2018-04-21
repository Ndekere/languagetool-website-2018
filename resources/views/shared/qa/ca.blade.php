<div class="section-qa">
    <div class="container">

        <h2 class="contentHead"><!-- set top headline here --></h2>
        <!--<p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
        
        <div id="qa">
            
            {{-- 1 --}}
            <h3>
                <!--<span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>-->                
                Instal·lació
            </h3>
            <div>
                <p>Per a usar LanguageTool localment cal tenir instal·lat <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;8</a> o posterior.
                <strong>Teniu problemes? Consulteu la <a href="../issues">llista de problemes habituals</a>.</strong></p>

            </div>

            <h3>
                <!--<span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>-->
                Funcions
            </h3>
            <div>
                <p>Per a usar LanguageTool localment cal tenir instal·lat <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;8</a> o posterior.
                    <strong>Teniu problemes? Consulteu la <a href="../issues">llista de problemes habituals</a>.</strong></p>


                <h2>Funcions</h2>

                LanguageTool aplica <a href="http://community.languagetool.org/rule/list?lang=ca">més de 2.500</a> regles per a trobar errades en texts en català, més enllà de les que detecta un simple corrector ortogràfic.<br/><br/>

                <small>Passeu el cursor per damunt d'un error per a veure la informació corresponent.</small>

                <a class="fancyboxImage" title="LanguageTool com a extensió en LibreOffice.org" href="images/screenshot.png"><img style="margin: 15px" align="right" src="images/screenshot_small.png" alt="Screenshot"/></a>

                <ul>
                    <li>Gramàtica
                        <ul>
                            <li><span class="errorMarker" title="Error de concordança. Podria ser: 'el ganivet', 'els ganivets'.">El ganivets</span> no tallen.</li>
                            <li>La prova consistia <span class="errorMarker" title="Cal canviar la preposició: 'a'.">en</span> saltar més lluny que els altres.</li>
                            <li>Si hagués vingut, tot <span class="errorMarker" title="Falta un verb en condicional: 'haguera', 'hauria'.">hagués</span> anat bé.</li>
                            <li>És un fet d'allò més <span class="errorMarker" title="Reviseu la concordança de l'adjectiu «interessants».">interessants</span>.</li>
                            <li>L'home <span class="errorMarker" title="Reviseu la construcció de relatiu. Potser cal escriure: 'amb el qual', 'amb què'.">amb el que</span> vaig parlar.
                            <li>L'intel·lectual americà i <span class="errorMarker" title="Cal escriure: 'la intel·lectual'.">l'intel·lectual</span> francesa.</li>
                        </ul>
                    </li>
                    <li>Majúscules i minúscules
                        <ul>
                            <li><span class="errorMarker" title="Aquesta frase no comença amb majúscula">aquest</span> llibre m'ha agradat molt.</li>
                            <li>El 3 de <span class="errorMarker" title="Els mesos de l'any s'escriuen en minúsucula: 'juny'.">Juny</span> de 1856.</li>
                        </ul>
                    </li>
                    <li>Confusions i errors de picatge
                        <ul>
                            <li>Viu <span class="errorMarker" title="¿Volíeu dir 'a la'?">ala</span> ciutat de Manchester.</li>
                            <li>Va entrar per la porta de <span class="errorMarker" title="Cal escriure 'darrere'.">darrera</span>.</li>
                            <li>Havia <span class="errorMarker" title="Possible confusió: ¿Volíeu dir 'infringit' (= transgredir) en lloc de 'infligit' (= aplicar)?">infligit</span> moltes lleis.</li>
                            <li>No hauria pogut <span class="errorMarker" title="¿Volíeu dir 'aprovar'?">aprovat</span> els pressupostos.</li>
                        </ul>
                    </li>
                    <li>Errors de puntuació
                        <ul>
                            <li>Veniu ací<span class="errorMarker" title="Falta un espai darrere de la coma.">,</span>xiquets.</li>
                            <li>Si hagués vingut<span class="errorMarker" title="Dues comes consecutives.">,,</span> tot hauria anat bé.</li>
                        </ul>
                    </li>
                    <li>Paraules errònies segons el context
                        <ul>
                            <li>en les zones <span class="errorMarker" title="¿Volíeu dir 'costaneres' (= relatiu a la costa)?">costeres</span></li>
                            <li>Va ser una mesura <span class="errorMarker" title="¿Volíeu dir 'disciplinària'?">disciplinar</span>.</li>
                        </ul>
                    </li>

                    <li>Variants regionals i preferències estilístiques i editorials (opcionals i configurables)
                        <ul>
                            <li>Jo no <span class="errorMarker" title="Forma verbal pròpia del valencià">parle</span> mai de futbol.</li>
                            <li>Se sent <span class="errorMarker" title="Accentuació no valenciana. Substituïu per 'sotmés'.">sotmès</span> a pressions.</li>
                            <li>Per què no vas venir<span class="errorMarker" title="Interrogant sense parella.">?</span></li>
                        </ul>
                    </li>
                    <li>I moltes coses més.</li>
                </ul>
            </div>
            
            <h3>
                <!--<span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>-->
                Limitacions conegudes
            </h3>
            <div>
                La versió de LanguageTool en català es troba en ple desenvolupament. Ha avançat molt, però encara resta molt de camí per recórrer.
                Cada tres mesos publiquem una versió nova i actualitzada del corrector. Entre les limitacions conegudes del programa hi ha les següents:
                <ul>
                    <li>Els adjectius col·locats darrere d'un grup nominal però separats del nom al qual realment modifiquen poden provocar falses alarmes.
                        Això no obstant, la regla que detecta aquest error és útil en molts casos.
                        Ex.: Vivien a la casa paterna <span class="errorMarker" title="Reviseu la concordança de l'adjectiu «confosos».">confosos</span> entre els criats.</li>
                    <li>Les paraules no catalanes i els noms propis que casualment coincideixen amb paraules comunes catalanes poden causar falses alarmes.
                        Ex.: Llavors <span class="errorMarker" title="Falta algun element entre verbs: coma, conjunció, pronom relatiu, etc.">aparegué du</span> Pré.</li>
                </ul>
            </div>
            
            <h3>
                <!--<span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>-->
                Instruccions d'instal·lació per a LibreOffice/OpenOffice
            </h3>
            <div>
                LanguageTool funciona com una extensió per als paquets ofimàtics <a href="http://ca.libreoffice.org/" target="_blank">LibreOffice</a> i <a href="http://ca.openoffice.org/" target="_blank">Apache OpenOffice</a> de <a href="http://ca.wikipedia.org/wiki/Programari_lliure" target="_blank">programari lliure</a>. Per a usar LanguageTool, seguiu els següents passos:

                <ol>
                    <li>En cas que no tingueu instal·lat Java en el vostre ordinador, descarregueu-lo gratuïtament <a href="http://www.java.com/de/download/manual.jsp" target="_blank">ací</a> i instal·leu-lo. Els usuaris d'Ubuntu han d'instal·lar el paquet <a href="apt:libreoffice-java-common">libreoffice-java-common</a>.</li>
                    <li>Descarregueu la darrera versió de LanguageTool. El botó de descàrrega es troba al principi d'aquesta pàgina.</li>
                    <li>Obriu LibreOffice o OpenOffice i aneu al menú d'<i>Eines</i> i seleccioneu el <i>Gestor d'extensions</i>.</li>
                    <li>Feu clic en <i>Afegeix&hellip;</i>, seleccioneu l'arxiu descarregat en el pas 2 i feu clic en <i>Obre</i>.</li>
                    <li>Després de la instal·lació, reinicieu LibreOffice o OpenOffice.</li>
                </ol>

                Tan bon punt s'activi la comprovació d'ortografia i gramàtica, els problemes detectats per LanguageTool en el text apareixeran marcats en blau. Podeu canviar les opcions de LanguageTool en <i>Eines &rarr; LanguageTool &rarr; Configuració&hellip;</i>.
            </div>

            <h3>
                <!--<span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>-->
                Com s'usa LanguageTool com a aplicació independent
            </h3>
            <div>
                <ol>
                    <li>Descarregueu i descomprimiu l'arxiu zip (per exemple, fent clic amb el botó dret del ratolí &rarr; <i>descomprimeix</i> &rarr; <i>aquí o en un altre lloc</i>).</li>
                    <li>Executeu l'arxiu languagetool.jar amb Java (potser fent-hi doble-clic).</li>
                </ol>
            </div>

            <h3>
                <!--<span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>-->
                Contacte
            </h3>
            <div>
                <p>Podeu fer consultes en el nostre <a href="https://forum.languagetool.org/">fòrum</a> (per a totes les llengües). També podeu informar de falses alarmes o fer propostes de noves regles.
                    Per a comentaris específics de LanguageTool en català, podeu escriure a <a href="mailto:corrector@softcatala.org">corrector@softcatala.org</a>.</p>

            </div>

        </div>
    
    </div>
</div>

<!--
<script>
    $(document).ready(function() {
        $("#qa").accordion({
            heightStyle: "content",
            active: 0,
            collapsible: true
        });
    });
</script>
-->