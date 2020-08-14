<?php

$ModulechangePerson = '<div class="module" id="changePerson" title="Alterar Condômino" onclick="OpenModal(title)">
    <div class="moduleIcon">
        <svg style="padding-top:5%" width="80%" height="80%" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="white" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        </svg>
    </div>
    <div class="moduleTitle">
        Alterar Condômino
    </div>
</div>';

$ModuleLostAndFound = '<div class="module" id="lostAndFound" title="Achados e Perdidos" onclick="OpenModal(title)">
<div class="moduleIcon">
    <svg style="padding-top:5%" width="80%" height="80%" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
    </svg>
</div>
<div class="moduleTitle">
Achados e Perdidos
</div>
</div>';

$ModulePartyRoom = '<div class="module" id="partyRoom" title="Reservar Salão de Festas" onclick="OpenModal(title)">
<div class="moduleIcon">
    <svg style="padding-top:5%" width="80%" height="80%" viewBox="0 0 16 16" class="bi bi-calendar2-check" fill="white" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
        <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
        <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
      </svg>
</div>
<div class="moduleTitle">
Reservar Salão de festas
</div>
</div>';

$ModuleRegisterTicket = '<div class="module" id="registerTicket" title="Registrar Ocorrência" onclick="OpenModal(title)">
<div class="moduleIcon">
    <svg style="padding-top:5%" width="80%" height="80%" viewBox="0 0 16 16" class="bi bi-stickies" fill="white" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z"/>
        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h11A1.5 1.5 0 0 1 16 3.5v6.086a1.5 1.5 0 0 1-.44 1.06l-4.914 4.915a1.5 1.5 0 0 1-1.06.439H3.5A1.5 1.5 0 0 1 2 14.5v-11zM3.5 3a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5h6.086a.5.5 0 0 0 .353-.146l4.915-4.915A.5.5 0 0 0 15 9.586V3.5a.5.5 0 0 0-.5-.5h-11z"/>
        <path fill-rule="evenodd" d="M10.5 10a.5.5 0 0 0-.5.5v5H9v-5A1.5 1.5 0 0 1 10.5 9h5v1h-5z"/>
      </svg>
</div>
<div class="moduleTitle">
Registrar Ocorrência
</div>
</div>';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<link rel='shortcut icon' href='../src/images/icon.ico'/>
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>        
        <meta charset="utf-8">

		<link href='../src/styles/logged.css' rel='stylesheet'>
        <title>Painel</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet"> 
	</head>
	<body>
        <div id="greyPanel" hidden>
            <div id="modal">
                <div id="modalHeader">
                    <div id="modalBackIcon" onclick="ModalReturn()">
                        <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                            <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
                          </svg>
                    </div>
                    <div id="modalTitle">Alteraçao de Usuario</div>
                </div>
            </div>
        </div>
        <div id="navBar">
            <div id="navBarTitle">
                Sol Nascente
            </div>
        </div>
        <div id="panel">
            <div id="panelObscure"></div>
            <div id="innerPanel">
                <!--<div class="module" id="changePerson" title="Alterar Condômino" onclick="OpenModal(title)">
                    <div class="moduleIcon">
                        <svg style="padding-top:5%" width="80%" height="80%" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      </svg>
                    </div>
                    <div class="moduleTitle">
                    Alterar Condômino
                    </div>
                </div>
                <div class="module" id="lostAndFound" title="Achados e Perdidos" onclick="OpenModal(title)">
                    <div class="moduleIcon">
                        <svg style="padding-top:5%" width="80%" height="80%" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                        </svg>
                    </div>
                    <div class="moduleTitle">
                    Achados e Perdidos
                    </div>
                </div>
                <div class="module" id="partyRoom" title="Reservar Salão de Festas" onclick="OpenModal(title)">
                    <div class="moduleIcon">
                        <svg style="padding-top:5%" width="80%" height="80%" viewBox="0 0 16 16" class="bi bi-calendar2-check" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                          </svg>
                    </div>
                    <div class="moduleTitle">
                    Reservar Salão de festas
                    </div>
                </div>
                <div class="module" id="registerTicket" title="Registrar Ocorrência" onclick="OpenModal(title)">
                    <div class="moduleIcon">
                        <svg style="padding-top:5%" width="80%" height="80%" viewBox="0 0 16 16" class="bi bi-stickies" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z"/>
                            <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h11A1.5 1.5 0 0 1 16 3.5v6.086a1.5 1.5 0 0 1-.44 1.06l-4.914 4.915a1.5 1.5 0 0 1-1.06.439H3.5A1.5 1.5 0 0 1 2 14.5v-11zM3.5 3a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5h6.086a.5.5 0 0 0 .353-.146l4.915-4.915A.5.5 0 0 0 15 9.586V3.5a.5.5 0 0 0-.5-.5h-11z"/>
                            <path fill-rule="evenodd" d="M10.5 10a.5.5 0 0 0-.5.5v5H9v-5A1.5 1.5 0 0 1 10.5 9h5v1h-5z"/>
                          </svg>
                    </div>
                    <div class="moduleTitle">
                    Registrar Ocorrência
                    </div>
                </div>
            </div>
        </div>-->
        <?php
        
        if($_GET['perfil'] == 'sindico' ||$_GET['perfil'] == 'subsindico'){
            echo($ModulechangePerson);
            echo($ModuleLostAndFound);
            echo($ModulePartyRoom);
            echo($ModuleRegisterTicket);
        }else if($_GET['perfil'] == 'morador'){
            echo($ModuleLostAndFound);
            echo($ModulePartyRoom);
            echo($ModuleRegisterTicket);
        }
        
        ?>
        <script>
            function ModalReturn(){
                document.getElementById('greyPanel').setAttribute('hidden','true')
            }

            function OpenModal(modalTitle){
                document.getElementById('greyPanel').removeAttribute('hidden')
                document.getElementById('modalTitle').innerHTML = modalTitle
            }
        </script>
	</body>
</html>