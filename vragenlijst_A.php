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

<form action="includes/vragenlijstA.inc.php" method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
    <h2>Vragenlijst A</h2>
    <div id="wrapper">

        <div id="vragenlijstA_pagina1">
            pagina 1
            <div id="vraag1">
                <p>Ik ben blij dat ik op deze school zit</p>
                <label class="form-control"><input type="radio" name="vraag1" value="PS3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag1" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag1" value="PS1"/>Dat is niet zo</label>
            </div>

            <div id="vraag2">
                <p>Ik maak mijn huiswerk voor school vaak slordig</p>
                <label class="form-control"><input type="radio" name="vraag2" value="LG1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag2" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag2" value="LG3"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag3">
                <p>Ik kan het verhaal van een boek goed na vertellen</p>
                <label class="form-control"><input type="radio" name="vraag3" value="UV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag3" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag3" value="UV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag4">
                <p>De meeste klasgenoten gaan leuker met elkaar om dan met mij</p>
                <label class="form-control"><input type="radio" name="vraag4" value="SA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag4" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag4" value="SA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag5">
                <p>Ik vind het moeilijk de hele les mijn hoofd bij mijn werk te houden</p>
                <label class="form-control"><input type="radio" name="vraag5" value="CK1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag5" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag5" value="CK3"/>Dat is niet zo</label>
            </div>

            <div id="vraag6">
                <p>Als ik een proefwerk gemaakt heb, denk ik meestal dat ik het wel goed gedaan heb</p>
                <label class="form-control"><input type="radio" name="vraag6" value="ZP3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag6" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag6" value="ZP1"/>Dat is niet zo</label>
            </div>

            <div id="vraag7">
                <p>Ik vind sommige leraren/leraressen veel te streng</p>
                <label class="form-control"><input type="radio" name="vraag7" value="RL1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag7" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag7" value="RL3"/>Dat is niet zo</label>
            </div>

            <div id="vraag8">
                <p>Ik durf best in een volle klas iets aan de leraar/lerares te vragen</p>
                <label class="form-control"><input type="radio" name="vraag8" value="SV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag8" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag8" value="SV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag9">
                <p>Ik kan gemakkelijk aan mijn huiswerk blijven werken</p>
                <label class="form-control"><input type="radio" name="vraag9" value="HA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag9" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag9" value="HA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag10">
                <p>Ik word wel eens ongeduldig als ik lang moet wachten</p>
                <label class="form-control"><input type="radio" name="vraag10" value="SW1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag10" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag10" value="SW3"/>Dat is niet zo</label>
            </div>

            <div id="vraag11">
                <p>Ik houd er van mijn werk voor school goed te doen, ook al kost dat veel moeite</p>
                <label class="form-control"><input type="radio" name="vraag11" value="LG3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag11" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag11" value="LG1"/>Dat is niet zo</label>
            </div>

            <div id="vraag12">
                <p>Als ik mijn mening moet geven, kan ik slecht uit mijn woorden komen</p>
                <label class="form-control"><input type="radio" name="vraag12" value="UV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag12" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag12" value="UV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag13">
                <p>Ik kan goed met mijn klasgenoten opschieten</p>
                <label class="form-control"><input type="radio" name="vraag13" value="SA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag13" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag13" value="SA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag14">
                <p>In de klas zit ik vaak aan dingen te denken, die niets met de les te maken hebben</p>
                <label class="form-control"><input type="radio" name="vraag14" value="CK1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag14" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag14" value="CK3"/>Dat is niet zo</label>
            </div>

            <div id="vraag15">
                <p>Vlak voordat ik een proefwerk krijg, ben ik bang dat ik door de zenuwen iets zal vergeten</p>
                <label class="form-control"><input type="radio" name="vraag15" value="ZP1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag15" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag15" value="ZP3"/>Dat is niet zo</label>
            </div>

            <div id="vraag16">
                <p>De meeste leraren/leraressen gaan op een prettige manier met mij om</p>
                <label class="form-control"><input type="radio" name="vraag16" value="RL3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag16" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag16" value="RL1"/>Dat is niet zo</label>
            </div>
        </div>

        <br><br><br>

        <div id="vragenlijstA_pagina2">
            pagina 2
            <div id="vraag17">
                <p>Ik vind het vervelend om voor de klas te moeten komen</p>
                <label class="form-control"><input type="radio" name="vraag17" value="SV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag17" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag17" value="SV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag18">
                <p>Als ik iets leuks wil gaan doen, maak ik eerst mijn huiswerk af</p>
                <label class="form-control"><input type="radio" name="vraag18" value="HA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag18" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag18" value="HA1"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag19">
                <p>Ik ben altijd vriendelijk tegen al mijn klasgenoten, ook als ze onaardig zijn</p>
                <label class="form-control"><input type="radio" name="vraag19" value="SW3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag19" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag19" value="SW1"/>Dat is niet zo</label>
            </div>

            <div id="vraag20">
                <p>Ik heb geen zin om naar school te gaan</p>
                <label class="form-control"><input type="radio" name="vraag20" value="PS1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag20" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag20" value="PS3"/>Dat is niet zo</label>
            </div>

            <div id="vraag21">
                <p>Als ik het antwoord weet op een vraag, vind ik het moeilijk om het duidelijk te zeggen</p>
                <label class="form-control"><input type="radio" name="vraag21" value="UV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag21" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag21" value="UV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag22">
                <p>Ik vind dat we met aardige jongens en meisjes in de klas zitten</p>
                <label class="form-control"><input type="radio" name="vraag22" value="SA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag22" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag22" value="SA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag23">
                <p>Bij de meeste lessen let ik goed op</p>
                <label class="form-control"><input type="radio" name="vraag23" value="CK3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag23" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag23" value="CK1"/>Dat is niet zo</label>
            </div>

            <div id="vraag24">
                <p>Ik ben erg bang voor proefwerken</p>
                <label class="form-control"><input type="radio" name="vraag24" value="ZP1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag24" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag24" value="ZP3"/>Dat is niet zo</label>
            </div>

            <div id="vraag25">
                <p>Sommige leraren/leraressen hebben geen geduld om mij iets uit te leggen</p>
                <label class="form-control"><input type="radio" name="vraag25" value="RL1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag25" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag25" value="RL3"/>Dat is niet zo</label>
            </div>

            <div id="vraag26">
                <p>Als ik namens de klas iets moet zeggen tegen de leraar/lerares, dan durf ik dat best</p>
                <label class="form-control"><input type="radio" name="vraag26" value="SV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag26" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag26" value="SV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag27">
                <p>Ik heb een hekel aan huiswerk</p>
                <label class="form-control"><input type="radio" name="vraag27" value="HA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag27" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag27" value="HA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag28">
                <p>Ik doe altijd direct wat me gevraagd wordt</p>
                <label class="form-control"><input type="radio" name="vraag28" value="SW3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag28" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag28" value="SW1"/>Dat is niet zo</label>
            </div>

            <div id="vraag29">
                <p>De meeste vakken op school vind ik vervelend</p>
                <label class="form-control"><input type="radio" name="vraag29" value="PS1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag29" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag29" value="PS3"/>Dat is niet zo</label>
            </div>

            <div id="vraag30">
                <p>Ik wil graag veel leren op school</p>
                <label class="form-control"><input type="radio" name="vraag30" value="LG3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag30" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag30" value="LG1"/>Dat is niet zo</label>
            </div>

            <div id="vraag31">
                <p>Ik heb in deze klas weinig vrienden of vriendinnen</p>
                <label class="form-control"><input type="radio" name="vraag31" value="SA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag31" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag31" value="SA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag32">
                <p>Ik mis vaak iets van wat er tijdens de les gezegd wordt</p>
                <label class="form-control"><input type="radio" name="vraag32" value="CK1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag32" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag32" value="CK3"/>Dat is niet zo</label>
            </div>
        </div>

        <br><br><br>
        
        <div id="vragenlijstA_pagina3">
            pagina 3
            <div id="vraag33">
                <p>Als ik mijn werk goed geleerd heb en ik krijg een beurt voor een cijfer, voel ik me meestal zeker van mezelf</p>
                <label class="form-control"><input type="radio" name="vraag33" value="ZP3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag33" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag33" value="ZP1"/>Dat is niet zo</label>
            </div>

            <div id="vraag34">
                <p>Ik denk dat de meeste leraren/leraressen me heel goed helpen als ik moeilijkheden heb met het schoolwerk</p>
                <label class="form-control"><input type="radio" name="vraag34" value="RL3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag34" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag34" value="RL1"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag35">
                <p>Als een leraar/lerares boos op mij is voor iets dat ik niet gedaan heb, dan durf ik dat best te zeggen</p>
                <label class="form-control"><input type="radio" name="vraag35" value="SV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag35" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag35" value="SV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag36">
                <p>Ik begin meestal uit mezelf aan mijn huiswerk</p>
                <label class="form-control"><input type="radio" name="vraag36" value="HA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag36" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag36" value="HA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag37">
                <p>Als mijn vrienden/vriendinnen iets doen wat niet mag, doe ik daar wel eens aan mee</p>
                <label class="form-control"><input type="radio" name="vraag37" value="SW1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag37" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag37" value="SW3"/>Dat is niet zo</label>
            </div>

            <div id="vraag38">
                <p>Ik vind dat we op deze school genoeg leuke dingen doen</p>
                <label class="form-control"><input type="radio" name="vraag38" value="PS3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag38" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag38" value="PS1"/>Dat is niet zo</label>
            </div>

            <div id="vraag39">
                <p>Ik leer minder goed dan ik kan</p>
                <label class="form-control"><input type="radio" name="vraag39" value="LG1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag39" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag39" value="LG3"/>Dat is niet zo</label>
            </div>

            <div id="vraag40">
                <p>Omdat ik moeilijk kan opschrijven wat ik denk, doe ik lang over mijn opstellen</p>
                <label class="form-control"><input type="radio" name="vraag40" value="UV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag40" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag40" value="UV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag41">
                <p>Ik kan tijdens de les goed stil zitten</p>
                <label class="form-control"><input type="radio" name="vraag41" value="CK3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag41" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag41" value="CK1"/>Dat is niet zo</label>
            </div>

            <div id="vraag42">
                <p>Als de leraar/lerares zegt dat we een beurt krijgen voor een cijfer, dan ben ik bang dat ik het slecht zal doen</p>
                <label class="form-control"><input type="radio" name="vraag42" value="ZP1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag42" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag42" value="ZP3"/>Dat is niet zo</label>
            </div>

            <div id="vraag43">
                <p>Er zijn leraren/leraressen die heel slecht les geven</p>
                <label class="form-control"><input type="radio" name="vraag43" value="RL1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag43" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag43" value="RL3"/>Dat is niet zo</label>
            </div>

            <div id="vraag44">
                <p>Ik vind het eng om een kamer binnen te gaan waar veel mensen zijn</p>
                <label class="form-control"><input type="radio" name="vraag44" value="SV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag44" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag44" value="SV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag45">
                <p>Ik doe meestal heel weinig aan mijn huiswerk</p>
                <label class="form-control"><input type="radio" name="vraag45" value="HA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag45" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag45" value="HA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag46">
                <p>Ik vind al mijn leraren/leraressen altijd heel aardig</p>
                <label class="form-control"><input type="radio" name="vraag46" value="SW3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag46" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag46" value="SW1"/>Dat is niet zo</label>
            </div>

            <div id="vraag47">
                <p>Als ik mag kiezen, zit ik liever op een andere school</p>
                <label class="form-control"><input type="radio" name="vraag47" value="PS1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag47" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag47" value="PS3"/>Dat is niet zo</label>
            </div>

            <div id="vraag48">
                <p>Ik werk hard voor alle vakken om goede cijfers te krijgen</p>
                <label class="form-control"><input type="radio" name="vraag48" value="LG3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag48" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag48" value="LG1"/>Dat is niet zo</label>
            </div>
        </div>

        <br><br><br>

        <div id="vragenlijstA_pagina4">
            pagina 4
            <div id="vraag49">
                <p>Als ik iets in mijn eigen woorden op moet schrijven, dan lukt me dat wel</p>
                <label class="form-control"><input type="radio" name="vraag49" value="UV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag49" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag49" value="UV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag50">
                <p>Als ik klasgenoten vraag of ze me willen helpen, dan zijn er genoeg die dat doen</p>
                <label class="form-control"><input type="radio" name="vraag50" value="SA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag50" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag50" value="SA1"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag51">
                <p>Bij een proefwerk ben ik meestal rustig en kan ik met aandacht werken</p>
                <label class="form-control"><input type="radio" name="vraag51" value="ZP3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag51" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag51" value="ZP1"/>Dat is niet zo</label>
            </div>

            <div id="vraag52">
                <p>Bij de meeste leraren/leraressen voel ik me goed op mijn gemak</p>
                <label class="form-control"><input type="radio" name="vraag52" value="RL3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag52" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag52" value="RL1"/>Dat is niet zo</label>
            </div>

            <div id="vraag53">
                <p>Als de leraar/lerares iets aan me vraagt in de klas, voel ik me verlegen</p>
                <label class="form-control"><input type="radio" name="vraag53" value="SV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag53" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag53" value="SV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag54">
                <p>Als ik huiswerk heb, stel ik het zo lang mogelijk uit voor ik eraan begin</p>
                <label class="form-control"><input type="radio" name="vraag54" value="HA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag54" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag54" value="HA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag55">
                <p>Ik drijf wel eens mijn zin door als ik iets heel graag wil</p>
                <label class="form-control"><input type="radio" name="vraag55" value="SW1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag55" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag55" value="SW3"/>Dat is niet zo</label>
            </div>

            <div id="vraag56">
                <p>Ik vind het best leuk op school</p>
                <label class="form-control"><input type="radio" name="vraag56" value="PS3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag56" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag56" value="PS1"/>Dat is niet zo</label>
            </div>

            <div id="vraag57">
                <p>Aan hard werken voor school heb ik een hekel</p>
                <label class="form-control"><input type="radio" name="vraag57" value="LG1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag57" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag57" value="LG3"/>Dat is niet zo</label>
            </div>

            <div id="vraag58">
                <p>Als de leraar/lerares mij iets vraagt wat ik weet, kan ik vlot en duidelijk antwoord geven</p>
                <label class="form-control"><input type="radio" name="vraag58" value="UV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag58" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag58" value="UV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag59">
                <p>Ik word vaak gepest door de anderen uit de klas</p>
                <label class="form-control"><input type="radio" name="vraag59" value="SA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag59" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag59" value="SA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag60">
                <p>Tijdens de les kan ik goed mijn mond houden</p>
                <label class="form-control"><input type="radio" name="vraag60" value="CK3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag60" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag60" value="CK1"/>Dat is niet zo</label>
            </div>

            <div id="vraag61">
                <p>Sommige leraren/leraressen zijn aardiger tegen anderen dan tegen mij</p>
                <label class="form-control"><input type="radio" name="vraag61" value="RL1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag61" value="RL2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag61" value="RL3"/>Dat is niet zo</label>
            </div>

            <div id="vraag62">
                <p>Als we in de klas met zijn allen ergens over praten, durf ik best te zeggen wat ik er van denk</p>
                <label class="form-control"><input type="radio" name="vraag62" value="SV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag62" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag62" value="SV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag63">
                <p>Als ik mijn huiswerk maak, gaat het vaak maar langzaam</p>
                <label class="form-control"><input type="radio" name="vraag63" value="HA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag63" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag63" value="HA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag64">
                <p>Ik ben altijd beleefd tegen volwassenen</p>
                <label class="form-control"><input type="radio" name="vraag64" value="SW3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag64" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag64" value="SW1"/>Dat is niet zo</label>
            </div>
        </div>

        <br><br><br>

        <div id="vragenlijstA_pagina5">
            pagina 5
            <div id="vraag65">
                <p>Ik krijg slecht les op deze school</p>
                <label class="form-control"><input type="radio" name="vraag65" value="PS1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag65" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag65" value="PS3"/>Dat is niet zo</label>
            </div>

            <div id="vraag66">
                <p>Ik vind het voor mijzelf belangrijk om naar school te gaan</p>
                <label class="form-control"><input type="radio" name="vraag66" value="LG3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag66" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag66" value="LG1"/>Dat is niet zo</label>
            </div>
            
            <div id="vraag67">
                <p>Ik vind het gemakkelijk een verhaal zo te schrijven dat de leraar/lerares het begrijpt</p>
                <label class="form-control"><input type="radio" name="vraag67" value="UV3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag67" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag67" value="UV1"/>Dat is niet zo</label>
            </div>

            <div id="vraag68">
                <p>Ik vind het leuk om met mijn klasgenoten om te gaan</p>
                <label class="form-control"><input type="radio" name="vraag68" value="SA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag68" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag68" value="SA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag69">
                <p>Ik word in de klas snel afgeleid</p>
                <label class="form-control"><input type="radio" name="vraag69" value="CK1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag69" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag69" value="CK3"/>Dat is niet zo</label>
            </div>

            <div id="vraag70">
                <p>Als we de cijfers terugkrijgen van een proefwerk, voel ik me erg zenuwachtig</p>
                <label class="form-control"><input type="radio" name="vraag70" value="ZP1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag70" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag70" value="ZP3"/>Dat is niet zo</label>
            </div>

            <div id="vraag71">
                <p>Ik word verlegen als plotseling iedereen in de klas naar mij kijkt</p>
                <label class="form-control"><input type="radio" name="vraag71" value="SV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag71" value="SV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag71" value="SV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag72">
                <p>Ik besteed veel aandacht aan mijn huiswerk</p>
                <label class="form-control"><input type="radio" name="vraag72" value="HA3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag72" value="HA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag72" value="HA1"/>Dat is niet zo</label>
            </div>

            <div id="vraag73">
                <p>Ik vertel wel eens een leugentje</p>
                <label class="form-control"><input type="radio" name="vraag73" value="SW1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag73" value="SW2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag73" value="SW3"/>Dat is niet zo</label>
            </div>

            <div id="vraag74">
                <p>Meestal heb ik plezier in het werk voor school</p>
                <label class="form-control"><input type="radio" name="vraag74" value="PS3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag74" value="PS2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag74" value="PS1"/>Dat is niet zo</label>
            </div>

            <div id="vraag75">
                <p>Ik vind van mezelf dat ik weinig mijn best doe op school</p>
                <label class="form-control"><input type="radio" name="vraag75" value="LG1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag75" value="LG2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag75" value="LG3"/>Dat is niet zo</label>
            </div>

            <div id="vraag76">
                <p>Als ik iets moet opschrijven, heb ik moeite om goede zinnen te maken</p>
                <label class="form-control"><input type="radio" name="vraag76" value="UV1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag76" value="UV2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag76" value="UV3"/>Dat is niet zo</label>
            </div>

            <div id="vraag77">
                <p>Ik voel me in de klas vaak eenzaam</p>
                <label class="form-control"><input type="radio" name="vraag77" value="SA1" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag77" value="SA2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag77" value="SA3"/>Dat is niet zo</label>
            </div>

            <div id="vraag78">
                <p>Ik kan gemakkelijk de hele ochtend mijn aandacht bij het werk houden</p>
                <label class="form-control"><input type="radio" name="vraag78" value="CK3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag78" value="CK2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag78" value="CK1"/>Dat is niet zo</label>
            </div>

            <div id="vraag79">
                <p>Als ik mijn best heb gedaan, lever ik mijn werk in met een gevoel dat ik het wel voldoende heb gemaakt</p>
                <label class="form-control"><input type="radio" name="vraag79" value="ZP3" required/>Dat is zo</label>
                <label class="form-control"><input type="radio" name="vraag79" value="ZP2"/>Dat weet ik niet</label>
                <label class="form-control"><input type="radio" name="vraag79" value="ZP1"/>Dat is niet zo</label>
            </div>

            <div id="vraag80">
                <p>Met de meeste leraren/leraressen kan ik goed opschieten</p>
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

const page1 = document.getElementById('vragenlijstA_pagina1');
const page2 = document.getElementById('vragenlijstA_pagina2');
const page3 = document.getElementById('vragenlijstA_pagina3');
const page4 = document.getElementById('vragenlijstA_pagina4');
const page5 = document.getElementById('vragenlijstA_pagina5');

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
