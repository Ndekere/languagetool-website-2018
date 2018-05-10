<div class="section-qa">
    <div class="container">

        <h2 class="contentHead">Top Headline</h2>
        <!--<p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
        
        <div id="qa">

            <h3>
                <!--
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                -->
                Funcionalidades
            </h3>
            <div>
                O LanguageTool possui mais de <a href="http://community.languagetool.org/rule/list?lang=pt-BR">1200 regras gramaticais</a> para o Português:<br/><br/>
                <small>(Esses são alguns dos vários erros que o LanguageTool é capaz de detectar.)</small>

                <ul>
                    <li>Nós viemos <span class="errorMarker" title="Afim deve ser usado como adjetivo.">afim de</span> discutir o projeto.</li>
                    <li>Os atletas <span class="errorMarker" title="Verbos de movimento exigem a preposição A.">chegaram em</span> Curitiba na noite passada.</li>
                    <li><span class="errorMarker" title="O verbo existir admite plural.">Existe</span> muitos problemas nesta empresa.</li>
                    <li><span class="errorMarker" title="A frase deve iniciar com letra maíscula.">estamos</span> aqui para ajudar você.</li>
                    <li>Estou feliz por<span class="errorMarker" title="Espaço duplo em uma frase.">&nbsp;&nbsp;</span>você.</li>
                </ul>

                <h2>Versão em Português Europeu</h2>
                <p>O LanguageTool também possui uma página especial para o português europeu, <a href="https://languagetool.org/pt/">clique aqui</a>
                    para ser redirecionado.</p>
            </div>

            <h3>
                <!--
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                -->
                Baixar a aplicação
            </h3>
            <div>
                <p>Usar o LanguageTool localmente requer o <a href="http://www.java.com/en/download/manual.jsp">Java&nbsp;<span lang="en-gb">8</span></a> ou acima.
                    <strong>Problemas? Por favor leia a <a href="../issues">lista de problemas comuns</a>.</strong></p>

                <noscript class="warning">Por favor ative o Javascript - é usado para mostrar algumas dicas durante uma transferência</noscript>

            </div>

            <h3>
                <!--
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                -->
                LibreOffice
            </h3>
            <div>
                <ul style="padding-left: 20px">
                    <li><strong>Recomendamos utilizar a versão mais recente do
                            <a href="http://www.libreoffice.org/download">LibreOffice</a></strong>
                        visto que algumas versões mais antigas têm um erro que causa problemas
                        no arranque.</li>
                    <li>Use <em>Ferramentas -&gt; Gestor de Extensões -&gt; Adicionar...</em> no LibreOffice
                        para instalar a extensão;</li>
                    <li><strong>Reinicie o LibreOffice</strong> após a
                        instalação da extensão;</li>
                    <li>Se usar o LibreOffice 3.5.x (ou superior), <strong>ative o LanguageTool</strong>
                        em <em>Opções -> Definições de idioma -> Auxiliares de escrita -> Editar...</em>
                        , <strong>desative o LightProof e ative o LanguageTool</strong>.</li>
                </ul>

                <p>Builds diários não testados, do estado atual de desenvolvimento, estão
                    disponíveis no
                    <a href="../download/snapshots/?C=M;O=D">diretório de snapshots</a>
                    (<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-standalone/CHANGES.md">CHANGES.md</a>).
                    Versões antigas continuam disponíveis no <a href="../download/">diretório de download</a>.</p>
            </div>

            <h3>
                <!--
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                -->
                Licença &amp; Código-Fonte
            </h3>
            <div>
                <p>O LanguageTool está disponível gratuitamente sob a <a href="http://www.fsf.org/licensing/licenses/lgpl.html#SEC1">LGPL</a>.
                    O código-fonte está disponível em <a href="https://github.com/languagetool-org/">GitHub</a>.</p>
            </div>


            <h3>
                <!--
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                -->
                Versão 3.8 (lançada em 27 de julho de 2017)
            </h3>
            <div>
                <h3>Novidades</h3>
                <ul>
                    <li><strong>Estilo</strong>
                        <ul>
                            <li>Deteção de expressões prolixas;</li>
                            <li>Reconhecimento de formas infletidas de barbarismos e redundâncias;</li>
                            <li>Reconhecimento de cacofonias;</li>
                        </ul>
                    </li>
                    <li><strong>Níveis de discurso (Discurso formal)</strong>
                        <ul>
                            <li>Identificação de arcaísmos, linguagem infantil e gírias;</li>
                            <li>Melhorias significativas na deteção de linguagem informal;</li>
                        </ul>
                    </li>
                    <li><strong>Regras de tipografia</strong>
                        <ul>
                            <li>Regras para unidades do Sistema Internacional;</li>
                            <li>Melhorias significativas na formatação de números e símbolos matemáticos;</li>
                        </ul>
                    </li>
                    <li><strong>Novas categorias</strong>
                        <ul>
                            <li>Identificador de palavras alteradas pelo AO90;</li>
                            <li>Regionalismos.</li>
                        </ul>
                    </li>
                    <li><strong>Gramática</strong>
                        <ul>
                            <li>Regras para coerência de grafias;</li>
                            <li>Melhorias significativas em todos os subgrupos de regras;</li>
                        </ul>
                    </li>
                    <li><strong>Atualização dos Dicionários Portugueses Complementares 1.4</strong>
                    <li><strong>Exceções à verificação ortográfica para expressões comuns em Inglês e Francês. Melhorias na deteção de expressões em Latim.</strong>
                    </li>
                    <li><strong>Correções e melhorias diversas nos componentes antigos;</strong>
                    </li>
                </ul>

            </div>

            <h3>
                <!--
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                -->
                Versão 3.7 (lançada a 27 de março de 2017)
            </h3>
            <div>
                <h3>Novidades</h3>
                <ul>
                    <li><strong>Gramática</strong>
                        <ul>
                            <li>Regras para erros no uso de crase;</li>
                            <li>Utilização de verbos impessoais;</li>
                            <li>Ajustes nas regras de concordância nominal e verbal;</li>
                            <li>Melhorias significativas na deteção de fragmentos;</li>
                            <li>Melhorias significativas nas regras de colocação pronominal.</li>
                            <li>Novas regras gramaticais em categorias diversas</li>
                        </ul>
                    </li>
                    <li><strong>Capitalização</strong>
                        <ul>
                            <li>Novas regras para ambos os Acordos Ortográficos.</li>
                        </ul>
                    </li>
                    <li><strong>Estilo</strong>
                        <ul>
                            <li>Mais regras para deteção de duplicações;</li>
                            <li>Barbarismos;</li>
                            <li>Formatação de estrangeirismos.</li>
                        </ul>
                    </li>
                    <li><strong>Regras de tipografia</strong>
                        <ul>
                            <li>Pontuação de abreviaturas, reticências e unidades de medida;</li>
                            <li>Formatação de números;</li>
                            <li>Fórmulas químicas;</li>
                            <li>Graus, minutos e segundos;</li>
                            <li>Hífens e travessões;</li>
                        </ul>
                    </li>
                    <li><strong>Regras de semântica (contexto)</strong>
                        <ul>
                            <li>Identificação de palavras mal utilizadas por identificação do contexto;</li>
                            <li>Melhorias significativas na verificação de datas;</li>
                            <li>Validador de URLs.</li>
                        </ul>
                    </li>
                    <li><strong>Novas categorias</strong>
                        <ul>
                            <li>Marcas comercias;</li>
                            <li>Erros de tradução.</li>
                        </ul>
                    </li>
                    <li><strong>Suporte para falsos cognatos</strong>
                        <ul>
                            <li>Português para Alemão, Espanhol, Francês, Galego e Inglês.</li>
                        </ul>
                    </li>
                    <li><strong>Novos dicionários baseados em um fork do Projecto Natura (integram mais palavras derivadas)</strong>
                    <li><strong>Exceções à verificação ortográfica para certos nomes científicos, expressões estrangeiras ou em latim</strong>
                    </li>
                    <li><strong>Correções e melhorias diversas nos componentes antigos;</strong>
                    </li>
                    <li><strong>E muito mais…</strong></li>
                </ul>
            </div>
            
            <h3>
                <!--
                <span class="qa-header-icon">
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-right"></i>
                </span>
                -->
                Versão 3.6 (lançada a 28 de dezembro de 2016)
            </h3>
            <div>
                <h3>Novidades</h3>
                <ul>
                    <li><strong>Gramática</strong>
                        <ul>
                            <li>Concordância nominal de género e número;<!-- <span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel und Nomen bezüglich Genus">Der Haus</span> ist groß.--></li>
                            <li>Concordância verbal entre sujeito e verbo;<!-- <span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel, Adjektiv und Nomen">das roten Blatt</span> Papier auf.--></li>
                            <li>Verficação de homónimos e parónimos acentuados.<!--  <span class="errorMarker" title="Die Präposition 'wegen' erfordert i.d.R. den Genitiv.">wegen diesem</span> Stau zu spät gekommen.--></li>
                        </ul>
                    </li>
                    <li><strong>Palavras compostas</strong>
                        <ul>
                            <li>Novas regras para deteção de palavras compostas;<!--  <span class="errorMarker" title="Meinten Sie 'Französische' Revolution (1789–1799)? Zu mehrteiligen Namen gehörende Adjektive werden großgeschrieben.">französische</span> Revolution war ein wichtiges historisches Ereignis.--></li>
                            <li>Melhorias significativas no reconhecimento de palavras hifenizadas;<!-- <span class="errorMarker" title="Dieser Satz fängt nicht mit einem großgeschriebenen Wort an">überprüfen</span> der Großschreibung am Satzanfang.--></li>
                        </ul>
                    </li>
                    <li><strong>Regras para duplicação de elementos</strong>
                        <!-- <ul>
                            <li>Er hat <span class="errorMarker" title="'dieselbe' wird zusammengeschrieben.">die selbe</span> Frage gestellt.</li>
                        </ul>-->
                    </li>
                    <li><strong>Regras para reconhecimento de vícios de linguagem</strong>
                        <ul>
                            <li>Redundâncias;<!--  <span class="errorMarker" title="Nur hinter einem Komma steht ein Leerzeichen, aber nicht davor."> ,</span> ob sie kommen möchte.--></li>
                            <li>Clichés;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
                            <li>Repetições;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
                        </ul>
                    </li>
                    <li><strong>Regras de tipografia</strong>
                        <ul>
                            <li>Símbolos monetários;<!--  <span class="errorMarker" title="Nur hinter einem Komma steht ein Leerzeichen, aber nicht davor."> ,</span> ob sie kommen möchte.--></li>
                            <li>Espaçamento;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
                            <li>Sinais tipográficos;<!--  <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.--></li>
                        </ul>
                    </li>
                    <li><strong>Regras de semântica</strong>
                        <ul>
                            <li>Reconhecimento e validação de datas;<!--  <span class="errorMarker" title="Möglicher Rechtschreibfehler gefunden. Vorschlag: normale">nromale</span> Rechtschreibprüfung:--></li>
                        </ul>
                    </li>
                    <li><strong>Regras de estilo</strong>
                        <ul>
                            <li>Repetições;<!--  <span class="errorMarker" title="Meinten Sie 'elektrische Spannung'? 'Volt-Zahl' ist eine umgangssprachliche Ausdrucksweise.">Volt-Zahl</span> benötigt.--></li>
                            <li>Gerundismo;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                            <li>Voz passiva;<!-- <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                            <li>Frases longas; <!-- <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                            <li>Deteção de fragmentos;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                        </ul>
                    </li>
                    <li><strong>Reconhecimento das várias variantes de Português</strong>
                        <ul>
                            <li>Regras específicas para Português de Portugal;<!--  <span class="errorMarker" title="Meinten Sie 'elektrische Spannung'? 'Volt-Zahl' ist eine umgangssprachliche Ausdrucksweise.">Volt-Zahl</span> benötigt.--></li>
                            <li>Regras específicas para o Novo Acordo Ortográfico;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                            <li>Suporte adicionado para Português de Angola, Cabo Verde, Timor Leste, Guiné-Bissau, Macau, Moçambique e São Tomé e Príncipe;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                            <li>Atualização de dicionários e da base de dados morfológica;<!--  <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?--></li>
                            <!-- <li> <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>-->
                        </ul>
                    </li>
                    <li><strong>Correções e melhorias diversas nos componentes antigos;</strong> <!-- <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin:
            <ul>
                <li>My <span class="errorMarker" title="'chef' bedeutet 'Chefkoch'/'Koch'. Meinten Sie 'chief' oder 'boss'?">chef</span> told me I'm not allowed to take vacation days.</li>
            </ul>-->
                    </li>
                    <li><strong>E muito mais…</strong></li>
                </ul>
            </div>
            
        </div>
    
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#qa").accordion({
            heightStyle: "content",
            active: 0,
            collapsible: true
        });
    });
</script>