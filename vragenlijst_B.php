<?php 

include_once 'header.php';

# Deze regel is nodig wanneer de pagina wordt bezocht zonder dat er ingelogd is
set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);

$leerlingNr = ($_SESSION["leerlingNr"]); 
$leerlingNr = "214425";
?>

<link rel="stylesheet" type="text/css" href="css/vragenlijst.css">

<form action="includes/vragenlijstB.inc.php" method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
    <h2>Vragenlijst B</h2>
    <div id="wrapper">

        <div id="vragenlijstB_pagina1">
            pagina 1
            <div id="vraag1">
                <p>Ik vind het leuk om naar school te gaan</p>
                <label class="form-control"><input type="radio" name="vraag1" value="PS3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag1" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag1" value="PS1"/>Dat is niet zo</label>
            </div>

            <div id="vraag2">
                <p>Als ik mijn best doe voor goede cijfers op mijn rapport, kan ik het moeilijk volhouden</p>
                <label class="form-control"><input type="radio" name="vraag2" value="LG1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag2" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag2" value="LG3"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag3">
                <p>Ik vind dat ik duidelijk kan zeggen wat ik bedoel</p>
                <label class="form-control"><input type="radio" name="vraag3" value="UV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag3" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag3" value="UV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag4">
                <p>Volgend jaar wil ik liever met anderen in de klas zitten</p>
                <label class="form-control"><input type="radio" name="vraag4" value="SA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag4" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag4" value="SA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag5">
                <p>Bij de meeste lessen kan ik moeilijk opletten</p>
                <label class="form-control"><input type="radio" name="vraag5" value="CK1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag5" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag5" value="CK3"/>Dat is niet zo</label>
            </div>

            <div id="vraag6">
                <p>Als ik een proefwerk moet maken, dan heb ik vooraf meestal het gevoel dat ik het wel kan</p>
                <label class="form-control"><input type="radio" name="vraag6" value="ZP3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag6" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag6" value="ZP1"/>Dat is niet zo</label>
            </div>

            <div id="vraag7">
                <p>Sommige leraren/leraressen behandelen je als een klein kind</p>
                <label class="form-control"><input type="radio" name="vraag7" value="RL1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag7" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag7" value="RL3"/>Dat is niet zo</label>
            </div>

            <div id="vraag8">
                <p>Als ik iets niet snap, durf ik dat best in de volle klas tegen de leraar/lerares te zeggen</p>
                <label class="form-control"><input type="radio" name="vraag8" value="SV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag8" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag8" value="SV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag9">
                <p>Ik maak mijn huiswerk meestal heel goed</p>
                <label class="form-control"><input type="radio" name="vraag9" value="HA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag9" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag9" value="HA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag10">
                <p>Ik voel me vervelend als iemand in de klas onaardig tegen me is</p>
                <label class="form-control"><input type="radio" name="vraag10" value="SW1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag10" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag10" value="SW3"/>Dat is niet zo</label>
            </div>

            <div id="vraag11">
                <p>Ik doe vaak moeite om mijn werk voor school netjes te maken</p>
                <label class="form-control"><input type="radio" name="vraag11" value="LG3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag11" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag11" value="LG1"/>Dat is niet zo</label>
            </div>

            <div id="vraag12">
                <p>Als ik aan een leraar/lerares iets moet vertellen, kan ik soms moeilijk uit mijn woorden komen</p>
                <label class="form-control"><input type="radio" name="vraag12" value="UV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag12" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag12" value="UV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag13">
                <p>Ik vind dat de meeste van mijn klasgenoten prettig met mij omgaan</p>
                <label class="form-control"><input type="radio" name="vraag13" value="SA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag13" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag13" value="SA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag14">
                <p>Ik zit tijdens de lessen vaak te kletsen</p>
                <label class="form-control"><input type="radio" name="vraag14" value="CK1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag14" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag14" value="CK3"/>Dat is niet zo</label>
            </div>

            <div id="vraag15">
                <p>Ik ben zenuwachtig als de cijfers voor een proefwerk worden uitgedeeld</p>
                <label class="form-control"><input type="radio" name="vraag15" value="ZP1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag15" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag15" value="ZP3"/>Dat is niet zo</label>
            </div>

            <div id="vraag16">
                <p>De meeste leraren/leraressen zijn aardig tegen mij</p>
                <label class="form-control"><input type="radio" name="vraag16" value="RL3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag16" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag16" value="RL1"/>Dat is niet zo</label>
            </div>
        </div>

        <br><br><br>

        <div id="vragenlijstB_pagina2">
            pagina 2
            <div id="vraag17">
                <p>Als ik iemand die ik niet ken een hand moet geven, dan ben ik daarna het liefst zo snel mogelijk weg</p>
                <label class="form-control"><input type="radio" name="vraag17" value="SV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag17" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag17" value="SV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag18">
                <p>Als ik huiswerk heb, begin ik er zo snel mogelijk aan</p>
                <label class="form-control"><input type="radio" name="vraag18" value="HA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag18" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag18" value="HA1"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag19">
                <p>Ik wacht altijd rustig op mijn beurt, ook al dringen anderen voor</p>
                <label class="form-control"><input type="radio" name="vraag19" value="SW3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag19" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag19" value="SW1"/>Dat is niet zo</label>
            </div>

            <div id="vraag20">
                <p>Ik vind dit een rot school</p>
                <label class="form-control"><input type="radio" name="vraag20" value="PS1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag20" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag20" value="PS3"/>Dat is niet zo</label>
            </div>

            <div id="vraag21">
                <p>Ik vind het moeilijk om op te schrijven wat ik denk</p>
                <label class="form-control"><input type="radio" name="vraag21" value="UV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag21" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag21" value="UV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag22">
                <p>Ik voel me goed op mijn gemak bij mijn klasgenoten</p>
                <label class="form-control"><input type="radio" name="vraag22" value="SA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag22" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag22" value="SA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag23">
                <p>Ik kan in de klas goed mijn hoofd bij het werk houden</p>
                <label class="form-control"><input type="radio" name="vraag23" value="CK3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag23" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag23" value="CK1"/>Dat is niet zo</label>
            </div>

            <div id="vraag24">
                <p>Als ik weet dat ik mijn werk goed geleerd heb, ben ik toch zenuwachtig voor het proefwerk</p>
                <label class="form-control"><input type="radio" name="vraag24" value="ZP1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag24" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag24" value="ZP3"/>Dat is niet zo</label>
            </div>

            <div id="vraag25">
                <p>Er zijn weinig leraren/leraressen die me goed helpen met mijn werk voor school</p>
                <label class="form-control"><input type="radio" name="vraag25" value="RL1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag25" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag25" value="RL3"/>Dat is niet zo</label>
            </div>

            <div id="vraag26">
                <p>Als ik iets heb meegemaakt, durf ik dat best aan de anderen in de klas te vertellen</p>
                <label class="form-control"><input type="radio" name="vraag26" value="SV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag26" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag26" value="SV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag27">
                <p>Als ik voor huiswerk iets moet leren, heb ik daar vaak moeite mee</p>
                <label class="form-control"><input type="radio" name="vraag27" value="HA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag27" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag27" value="HA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag28">
                <p>Ik houd mij altijd aan de schoolregels</p>
                <label class="form-control"><input type="radio" name="vraag28" value="SW3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag28" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag28" value="SW1"/>Dat is niet zo</label>
            </div>

            <div id="vraag29">
                <p>Ik vind dat er op deze school veel veranderd moet worden</p>
                <label class="form-control"><input type="radio" name="vraag29" value="PS1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag29" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag29" value="PS3"/>Dat is niet zo</label>
            </div>

            <div id="vraag30">
                <p>Ik doe goed mijn best op school</p>
                <label class="form-control"><input type="radio" name="vraag30" value="LG3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag30" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag30" value="LG1"/>Dat is niet zo</label>
            </div>

            <div id="vraag31">
                <p>Ik vind weinig van mijn klasgenoten echt aardig</p>
                <label class="form-control"><input type="radio" name="vraag31" value="SA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag31" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag31" value="SA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag32">
                <p>Tijdens de les doe ik vaak mee met lol maken</p>
                <label class="form-control"><input type="radio" name="vraag32" value="CK1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag32" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag32" value="CK3"/>Dat is niet zo</label>
            </div>
        </div>

        <br><br><br>
        
        <div id="vragenlijstB_pagina3">
            pagina 3
            <div id="vraag33">
                <p>Als ik tijdens de les denk dat ik het anwoord op een vraag weet, voel ik me meestal zeker genoeg om het te zeggen</p>
                <label class="form-control"><input type="radio" name="vraag33" value="ZP3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag33" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag33" value="ZP1"/>Dat is niet zo</label>
            </div>

            <div id="vraag34">
                <p>Er zijn genoeg leraren/leraressen die geduldig luisteren als ik iets vraag</p>
                <label class="form-control"><input type="radio" name="vraag34" value="RL3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag34" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag34" value="RL1"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag35">
                <p>Als ze me vragen om namens de klas een leraar/lerares te feliciteren en een cadeau te geven, dan durf ik dat best te doen</p>
                <label class="form-control"><input type="radio" name="vraag35" value="SV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag35" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag35" value="SV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag36">
                <p>Ik vind het huiswerk voor de meeste vakken belangrijk om te doen</p>
                <label class="form-control"><input type="radio" name="vraag36" value="HA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag36" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag36" value="HA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag37">
                <p>Ik heb wel eens iets vervelends verteld over iemand, die er zelf niet bij was</p>
                <label class="form-control"><input type="radio" name="vraag37" value="SW1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag37" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag37" value="SW3"/>Dat is niet zo</label>
            </div>

            <div id="vraag38">
                <p>De meeste vakken op school doe ik met plezier</p>
                <label class="form-control"><input type="radio" name="vraag38" value="PS3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag38" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag38" value="PS1"/>Dat is niet zo</label>
            </div>

            <div id="vraag39">
                <p>Voor sommige vakken zou ik veel beter kunnen werken dan ik nu doe</p>
                <label class="form-control"><input type="radio" name="vraag39" value="LG1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag39" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag39" value="LG3"/>Dat is niet zo</label>
            </div>

            <div id="vraag40">
                <p>Ik vind het moeilijk om een zin zo te schrijven dat iedereen het begrijpt</p>
                <label class="form-control"><input type="radio" name="vraag40" value="UV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag40" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag40" value="UV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag41">
                <p>Als de leraar/lerares iets op het bord schrijft, let ik extra goed op</p>
                <label class="form-control"><input type="radio" name="vraag41" value="CK3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag41" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag41" value="CK1"/>Dat is niet zo</label>
            </div>

            <div id="vraag42">
                <p>Ik ben vaak ongerust over wat voor cijfers ik haal</p>
                <label class="form-control"><input type="radio" name="vraag42" value="ZP1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag42" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag42" value="ZP3"/>Dat is niet zo</label>
            </div>

            <div id="vraag43">
                <p>Er zijn weinig leraren/leraressen die me begrijpen</p>
                <label class="form-control"><input type="radio" name="vraag43" value="RL1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag43" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag43" value="RL3"/>Dat is niet zo</label>
            </div>

            <div id="vraag44">
                <p>Wanneer ik een beurt krijg en de klas kijkt naar mij, dan vind ik dat vervelend</p>
                <label class="form-control"><input type="radio" name="vraag44" value="SV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag44" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag44" value="SV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag45">
                <p>Ik begin pas aan mijn huiswerk als ze dat thuis tegen me zeggen</p>
                <label class="form-control"><input type="radio" name="vraag45" value="HA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag45" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag45" value="HA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag46">
                <p>Ik ben altijd eerlijk tegen iedereen</p>
                <label class="form-control"><input type="radio" name="vraag46" value="SW3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag46" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag46" value="SW1"/>Dat is niet zo</label>
            </div>

            <div id="vraag47">
                <p>Ik vind het vervelend op school</p>
                <label class="form-control"><input type="radio" name="vraag47" value="PS1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag47" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag47" value="PS3"/>Dat is niet zo</label>
            </div>

            <div id="vraag48">
                <p>Ik wil hard werken op school om later vooruit te komen</p>
                <label class="form-control"><input type="radio" name="vraag48" value="LG3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag48" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag48" value="LG1"/>Dat is niet zo</label>
            </div>
        </div>

        <br><br><br>

        <div id="vragenlijstB_pagina4">
            pagina 4
            <div id="vraag49">
                <p>Als ik een spreekbeurt houd, kan ik er gemakkelijk een goed verhaal van maken</p>
                <label class="form-control"><input type="radio" name="vraag49" value="UV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag49" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag49" value="UV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag50">
                <p>Op school kan ik makkelijk vrienden of vriendinnen maken</p>
                <label class="form-control"><input type="radio" name="vraag50" value="SA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag50" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag50" value="SA1"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag51">
                <p>Als ik goed geleerd heb voor een proefwerk, denk ik meestal dat het wel zal lukken</p>
                <label class="form-control"><input type="radio" name="vraag51" value="ZP3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag51" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag51" value="ZP1"/>Dat is niet zo</label>
            </div>

            <div id="vraag52">
                <p>De meeste leraren/leraressen geven goed les</p>
                <label class="form-control"><input type="radio" name="vraag52" value="RL3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag52" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag52" value="RL1"/>Dat is niet zo</label>
            </div>

            <div id="vraag53">
                <p>Als ik ergens binnenkom, waar een heleboel mensen zijn, dan voel ik mij verlegen</p>
                <label class="form-control"><input type="radio" name="vraag53" value="SV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag53" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag53" value="SV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag54">
                <p>Na school ga ik soms iets doen wat ik leuk vind, zodat ik geen tijd meer heb voor mijn huiswerk</p>
                <label class="form-control"><input type="radio" name="vraag54" value="HA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag54" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag54" value="HA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag55">
                <p>Ik ben wel eens onaardig tegen iemand</p>
                <label class="form-control"><input type="radio" name="vraag55" value="SW1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag55" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag55" value="SW3"/>Dat is niet zo</label>
            </div>

            <div id="vraag56">
                <p>Als we naar een andere buurt verhuizen, wil ik het liefst op deze school blijven</p>
                <label class="form-control"><input type="radio" name="vraag56" value="PS3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag56" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag56" value="PS1"/>Dat is niet zo</label>
            </div>

            <div id="vraag57">
                <p>Veel dingen, die we voor school moeten leren, vind ik onbelangrijk</p>
                <label class="form-control"><input type="radio" name="vraag57" value="LG1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag57" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag57" value="LG3"/>Dat is niet zo</label>
            </div>

            <div id="vraag58">
                <p>Ik kan snel een verhaal in mijn eigen woorden opschrijven, zodat de leraar/lerares het begrijpt</p>
                <label class="form-control"><input type="radio" name="vraag58" value="UV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag58" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag58" value="UV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag59">
                <p>De anderen uit de klas lachen me vaak uit</p>
                <label class="form-control"><input type="radio" name="vraag59" value="SA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag59" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag59" value="SA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag60">
                <p>Als ik in de klas werk moet maken, kan ik mijn gedachten er goed bij houden</p>
                <label class="form-control"><input type="radio" name="vraag60" value="CK3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag60" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag60" value="CK1"/>Dat is niet zo</label>
            </div>

            <div id="vraag61">
                <p>Er zijn leraren/leraressen waaraan ik een heken heb</p>
                <label class="form-control"><input type="radio" name="vraag61" value="RL1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag61" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag61" value="RL3"/>Dat is niet zo</label>
            </div>

            <div id="vraag62">
                <p>Als de leraar/lerares iets over mij zegt wat niet waar is, durf ik dat best te zeggen</p>
                <label class="form-control"><input type="radio" name="vraag62" value="SV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag62" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag62" value="SV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag63">
                <p>De leraar/lerares zegt vaak dat ik mijn huiswerk beter moet maken</p>
                <label class="form-control"><input type="radio" name="vraag63" value="HA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag63" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag63" value="HA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag64">
                <p>In de klas steek ik altijd eerst mijn vinger op voor ik iets zeg</p>
                <label class="form-control"><input type="radio" name="vraag64" value="SW3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag64" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag64" value="SW1"/>Dat is niet zo</label>
            </div>
        </div>

        <br><br><br>

        <div id="vragenlijstB_pagina5">
            pagina 5
            <div id="vraag65">
                <p>Ik zit de hele dag uit te kijken naar het moment dat de school uitgaat</p>
                <label class="form-control"><input type="radio" name="vraag65" value="PS1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag65" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag65" value="PS3"/>Dat is niet zo</label>
            </div>

            <div id="vraag66">
                <p>Ik werk hard op school, omdat ik leren belangrijk vind</p>
                <label class="form-control"><input type="radio" name="vraag66" value="LG3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag66" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag66" value="LG1"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag67">
                <p>Als ik het antwoord weet op een vraag, kan ik het vlot en duidelijk opschrijven</p>
                <label class="form-control"><input type="radio" name="vraag67" value="UV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag67" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag67" value="UV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag68">
                <p>Op school ga ik veel met mijn klasgenoten om</p>
                <label class="form-control"><input type="radio" name="vraag68" value="SA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag68" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag68" value="SA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag69">
                <p>Ik zit onder de les vaak te dromen</p>
                <label class="form-control"><input type="radio" name="vraag69" value="CK1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag69" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag69" value="CK3"/>Dat is niet zo</label>
            </div>

            <div id="vraag70">
                <p>Als de leraar/lerares zegt dat hij/zij me gaat overhoren, dan word ik al zenuwachtig</p>
                <label class="form-control"><input type="radio" name="vraag70" value="ZP1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag70" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag70" value="ZP3"/>Dat is niet zo</label>
            </div>

            <div id="vraag71">
                <p>Als een leraar/lerares die ik niet goed ken iets tegen mij zegt, voel ik me verlegen</p>
                <label class="form-control"><input type="radio" name="vraag71" value="SV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag71" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag71" value="SV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag72">
                <p>Als ik aan mijn huiswerk bezig ben, schiet ik meestal goed op</p>
                <label class="form-control"><input type="radio" name="vraag72" value="HA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag72" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag72" value="HA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag73">
                <p>Ik praat wel eens tijdens de les als ik eigenlijk moet opletten</p>
                <label class="form-control"><input type="radio" name="vraag73" value="SW1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag73" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag73" value="SW3"/>Dat is niet zo</label>
            </div>

            <div id="vraag74">
                <p>Ik ben tevreden over de manier waarop ik les krijg op deze school</p>
                <label class="form-control"><input type="radio" name="vraag74" value="PS3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag74" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag74" value="PS1"/>Dat is niet zo</label>
            </div>

            <div id="vraag75">
                <p>Ik doe voor weinig vakken echt mijn best</p>
                <label class="form-control"><input type="radio" name="vraag75" value="LG1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag75" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag75" value="LG3"/>Dat is niet zo</label>
            </div>

            <div id="vraag76">
                <p>Het kost me vaak moeite om precies te zeggen wat ik bedoel</p>
                <label class="form-control"><input type="radio" name="vraag76" value="UV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag76" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag76" value="UV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag77">
                <p>Ik voel mij in onze klas er een beetje buiten staan</p>
                <label class="form-control"><input type="radio" name="vraag77" value="SA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag77" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag77" value="SA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag78">
                <p>Ik let meestal goed op als de leraar/lerares iets uitlegt</p>
                <label class="form-control"><input type="radio" name="vraag78" value="CK3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag78" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag78" value="CK1"/>Dat is niet zo</label>
            </div>

            <div id="vraag79">
                <p>Als de leraar/lerares werk van ons teruggeeft, heb ik meestal het gevoel dat ik het wel voldoende heb gemaakt</p>
                <label class="form-control"><input type="radio" name="vraag79" value="ZP3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag79" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag79" value="ZP1"/>Dat is niet zo</label>
            </div>

            <div id="vraag80">
                <p>Ik vind dat de meeste leraren/leraressen eerlijk straf geven</p>
                <label class="form-control"><input type="radio" name="vraag80" value="RL3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag80" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag80" value="RL1"/>Dat is niet zo</label>
            </div>
        </div>

        <input type="hidden" name="leerlingNr" value='<?php echo "$leerlingNr";?>'/>
        <button style='z-index: 999; position: absolute; top: 10vh; right: 0;' type='submit' name='submit'>Lever vragenlijst in</button>
    </div>
</form>

<?php
    if (isset($_GET["error"])) {
        echo "<div id='error'>";
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Vul alstublieft alle velden in</p>";
        }
        else if ($_GET["error"] == "already_submitted") {
            echo "<p>Deze vragenlijst is al eens ingevuld met dit leerlingnummer</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Er is iets misgegaan. Probeer het opnieuw</p>";
        }
        else if ($_GET["error"] == "wrongsubmit") {
            echo "<p>Er is iets misgegaan bij het opslaan van uw resultaten. Excuses voor het ongemak</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>U heeft succesvol de vragenlijst ingevuld</p>";
        }
        # Indien nodig kunnen hier nieuwe errorhandlers geplaatst worden
        echo "<p onclick='closeError()'>&#x2715;</p></div>";
    }
?>

<div style='z-index: 999; position: absolute; top: 0; right: 0;'>
    <button id="page1_btn"><p>page1_btn</p></button>
    <button id="page2_btn"><p>page2_btn</p></button>
    <button id="page3_btn"><p>page3_btn</p></button>
    <button id="page4_btn"><p>page4_btn</p></button>
    <button id="page5_btn"><p>page5_btn</p></button>
</div>

<?php include_once 'footer.php'; ?>  

<script>
// Deze functie is verantwoordelijk voor de animatie van een error
function closeError() {
  document.getElementById("error").style.right = "-30vw";
  setTimeout(()=> {
    document.getElementById("error").style.display = "none";;
      }
      ,500);
}
// De hieronderstaande code is verantwoordelijk voor de pagina selectie
const page1_btn = document.getElementById('page1_btn');
const page2_btn = document.getElementById('page2_btn');
const page3_btn = document.getElementById('page3_btn');
const page4_btn = document.getElementById('page4_btn');
const page5_btn = document.getElementById('page5_btn');

const page1 = document.getElementById('vragenlijstB_pagina1');
const page2 = document.getElementById('vragenlijstB_pagina2');
const page3 = document.getElementById('vragenlijstB_pagina3');
const page4 = document.getElementById('vragenlijstB_pagina4');
const page5 = document.getElementById('vragenlijstB_pagina5');

page1_btn.addEventListener('click', () => {
    if (page1.style.display === 'none') {
        page1.style.display = 'grid'
        page2.style.display = 'none'
        page3.style.display = 'none'
        page4.style.display = 'none'
        page5.style.display = 'none'
        page1_btn.style.textDecoration = 'underline var(--main-txt-color)'
        page2_btn.style.textDecoration = 'none'
        page3_btn.style.textDecoration = 'none';
        page4_btn.style.textDecoration = 'none';
        page5_btn.style.textDecoration = 'none';
    } else {
        page1.style.display = 'grid'
        page2.style.display = 'none'
        page3.style.display = 'none'
        page4.style.display = 'none'
        page5.style.display = 'none'
        page1_btn.style.textDecoration = 'underline var(--main-txt-color)'
        page2_btn.style.textDecoration = 'none'
        page3_btn.style.textDecoration = 'none';
        page4_btn.style.textDecoration = 'none';
        page5_btn.style.textDecoration = 'none';
    }
});

page2_btn.addEventListener('click', () => {
    if (page2.style.display === 'none') {
        page1.style.display = 'none'
        page2.style.display = 'grid'
        page3.style.display = 'none'
        page4.style.display = 'none'
        page5.style.display = 'none'
        page1_btn.style.textDecoration = 'none'
        page2_btn.style.textDecoration = 'underline var(--main-txt-color)'
        page3_btn.style.textDecoration = 'none';
        page4_btn.style.textDecoration = 'none';
        page5_btn.style.textDecoration = 'none';
    } else {
        page1.style.display = 'none'
        page2.style.display = 'grid'
        page3.style.display = 'none'
        page4.style.display = 'none'
        page5.style.display = 'none'
        page1_btn.style.textDecoration = 'none'
        page2_btn.style.textDecoration = 'underline var(--main-txt-color)'
        page3_btn.style.textDecoration = 'none';
        page4_btn.style.textDecoration = 'none';
        page5_btn.style.textDecoration = 'none';
    }
});

page3_btn.addEventListener('click', () => {
    if (page3.style.display === 'none') {
        page1.style.display = 'none'
        page2.style.display = 'none'
        page3.style.display = 'grid'
        page4.style.display = 'none'
        page5.style.display = 'none'
        page1_btn.style.textDecoration = 'none'
        page2_btn.style.textDecoration = 'none'
        page3_btn.style.textDecoration = 'underline var(--main-txt-color)';
        page4_btn.style.textDecoration = 'none';
        page5_btn.style.textDecoration = 'none';
    } else {
        page1.style.display = 'none'
        page2.style.display = 'none'
        page3.style.display = 'grid'
        page4.style.display = 'none'
        page5.style.display = 'none'
        page1_btn.style.textDecoration = 'none'
        page2_btn.style.textDecoration = 'none'
        page3_btn.style.textDecoration = 'underline var(--main-txt-color)';
        page4_btn.style.textDecoration = 'none';
        page5_btn.style.textDecoration = 'none';
    }
});

page4_btn.addEventListener('click', () => {
    if (page4.style.display === 'none') {
        page1.style.display = 'none'
        page2.style.display = 'none'
        page3.style.display = 'none'
        page4.style.display = 'grid'
        page5.style.display = 'none'
        page1_btn.style.textDecoration = 'none'
        page2_btn.style.textDecoration = 'none'
        page3_btn.style.textDecoration = 'none';
        page4_btn.style.textDecoration = 'underline var(--main-txt-color)';
        page5_btn.style.textDecoration = 'none';
    } else {
        page1.style.display = 'none'
        page2.style.display = 'none'
        page3.style.display = 'none'
        page4.style.display = 'grid'
        page5.style.display = 'none'
        page1_btn.style.textDecoration = 'none'
        page2_btn.style.textDecoration = 'none'
        page3_btn.style.textDecoration = 'none';
        page4_btn.style.textDecoration = 'underline var(--main-txt-color)';
        page5_btn.style.textDecoration = 'none';
    }
});

page5_btn.addEventListener('click', () => {
    if (page5.style.display === 'none') {
        page1.style.display = 'none'
        page2.style.display = 'none'
        page3.style.display = 'none'
        page4.style.display = 'none'
        page5.style.display = 'grid'
        page1_btn.style.textDecoration = 'none'
        page2_btn.style.textDecoration = 'none'
        page3_btn.style.textDecoration = 'none';
        page4_btn.style.textDecoration = 'none';
        page5_btn.style.textDecoration = 'underline var(--main-txt-color)';
    } else {
        page1.style.display = 'none'
        page2.style.display = 'none'
        page3.style.display = 'none'
        page4.style.display = 'none'
        page5.style.display = 'grid'
        page1_btn.style.textDecoration = 'none'
        page2_btn.style.textDecoration = 'none'
        page3_btn.style.textDecoration = 'none';
        page4_btn.style.textDecoration = 'none';
        page5_btn.style.textDecoration = 'underline var(--main-txt-color)';
    }
});
</script>
