<?php
    require('./modules.php')
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
                    <div id="modalTitle">Alteração / Cadastro de Usuário </div>
                </div>
                <div id="modalContent">
                    <div id ="modalChangeUser" style="width:100%;height:100%" hidden>
                        <div id="outterFormDiv">
                            <form method="post" onsubmit="return false">
                                <div class="modalInputDiv">
                                    <label>Insira o CPF do usuário</label>
                                    <input type="text" placeholder="CPF" id="changeUserCpf">
                                </div>
                                <div class="modalInputDiv">
                                    <label>Insira a senha do usuário</label>
                                    <input type="text" placeholder="Senha" id="changeUserPass">
                                </div>
                                <div class="modalInputDiv">
                                    <label>Insira o nome do usuário</label>
                                    <input type="text" placeholder="Nome" id="changeUserName">
                                </div>
                                <div class="modalInputDiv">
                                    <label>Insira o telefone do usuário</label>
                                    <input type="text" placeholder="Telefone" id="changeUserPhone">
                                </div>
                                <div class="modalInputDiv">
                                    <label>Insira o número da residência</label>
                                    <input type="number" placeholder="Número residência" id="changeUserHouseNum">
                                </div>
                                <div class="modalInputDiv">
                                    <label>Insira o bloco do usuário</label>
                                    <input type="number" placeholder="Bloco" id="changeUserBlockNum">
                                </div>
                                <div class="modalInputDiv">
                                    <label>Insira a permissão do usuário</label>
                                    <select id="changeUserProfile">
                                        <option>morador</option>
                                        <option>zelador</option>
                                        <option>subsindico</option>
                                        <option>sindico</option>
                                    </select>
                                </div>
                                <div class="modalInputDiv submitButton">
                                    <input type=submit value="Registrar" onclick="ChangeUser()">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id ="modalLostAndFound" style="width:100%;height:100%" hidden>
                        <div id="tableOutterDiv">
                        <table id="tableLostAndFound">
                            <thead>
                                <tr>
                                    <td>id ticket</td>
                                    <td>descrição</td>
                                    <td>local</td> 
                                    <td>encontrado por:</td>
                                </tr>
                            </thead>
                            <tbody id="tableLostAndFoundBody">

                            </tbody>
                        </table>
                        </div>
                        <div id="outterFormDiv">
                        <form method="post" onsubmit="return false">
                            <div class="modalInputDiv">
                                <label>Insira o número do ticket (para tickets já criados)</label>
                                <input type="number" placeholder="Id ticket" id="idTicket">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira o CPF do usuário que encontrou</label>
                                <input type="text" placeholder="Cpf" id="lostAndFoundCpf1">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira o CPF do usuário que retirou (para tickets já criados)</label>
                                <input type="text" placeholder="Cpf" id="lostAndFoundCpf2">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira o local em que o item foi encontrado</label>
                                <input type="text" placeholder="Local" id="lostAndFoundPlace">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira uma descrição do item</label>
                                <input type="text" placeholder="Descrição" id="lostAndFoundText">
                            </div>
                            <div class="modalInputDiv submitButton">
                                <input type=submit value="Registrar" onclick="LostAndFound()">
                            </div>
                        </form>
                    </div>
                    </div>
                    <div id ="modalPartyRoom" style="width:100%;height:100%" hidden>
                    <div id="tableOutterDiv">
                        <table id="tablePartyRoom">
                            <thead>
                                <tr>
                                    <td>Id reserva</td>
                                    <td>Responsável</td>
                                    <td>Inicio</td>
                                    <td>Fim</td> 
                                </tr>
                            </thead>
                            <tbody id="tablePartyRoomBody">

                            </tbody>
                        </table>
                        </div>
                        <div id="outterFormDiv">
                            <form method="post" onsubmit="return false">
                                <div class="modalInputDiv">
                                    <label>Insira o seu CPF</label>
                                    <input type="text" placeholder="CPF" id="partyRoomCpf">
                                </div>
                                <div class="modalInputDiv">
                                    <label>Insira o horário de início</label>
                                    <input type="text" placeholder="ex. 12:30" id="partyRoomStart">
                                </div>
                                <div class="modalInputDiv">
                                    <label>Insira o horário de término</label>
                                    <input type="text" placeholder="ex. 12:30" id="partyRoomEnd">
                                </div>
                                <div class="modalInputDiv submitButton">
                                    <input type=submit value="Registrar" onclick="PartyRoom()">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id ="modalRegisterTicket" style="width:100%;height:100%" hidden>
                    <div id="outterFormDiv">
                        <form method="post">
                            <div class="modalInputDiv">
                                <label>Insira o seu CPF</label>
                                <input type="text" placeholder="CPF">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira o horário da ocorrência</label>
                                <input type="text" placeholder="ex. 12:30">
                            </div>
                            <div class="modalInputDiv">
                                <label>Selecione o tipo de ocorrência</label>
                                <select>
                                    <option>Pertubação de sossego</option>
                                    <option>Horário limite ultrapassado</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div class="modalInputDiv submitButton">
                                <input type=submit value="Registrar">
                            </div>
                        </form>
                    </div>
                    </div>
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
        <?php
        
        if($_COOKIE['permission'] == 'sindico' || $_GET['permission'] == 'subsindico'){
            echo($ModuleChangePerson);
            echo($ModuleLostAndFound);
            echo($ModulePartyRoom);
            echo($ModuleRegisterTicket);
        }else if($_COOKIE['permission'] == 'morador' || $_COOKIE['permission'] == 'zelador'){
            echo($ModuleLostAndFound);
            echo($ModulePartyRoom);
            echo($ModuleRegisterTicket);
        }
        
        ?>
            </div>
        </div>
        <script>            

            async function ChangeUser(){


                let cpf = document.getElementById('changeUserCpf').value
                let name = document.getElementById('changeUserName').value
                let phone = document.getElementById('changeUserPhone').value
                let houseNum = parseInt(document.getElementById('changeUserHouseNum').value)
                let blockNum = parseInt(document.getElementById('changeUserBlockNum').value)
                let password = document.getElementById('changeUserPass').value
                let profile = document.getElementById('changeUserProfile').value
                
                if(profile == "zelador" || profile == "porteiro"){
                    var url = 'http://35.198.5.41:3000/employee/new'
                    var numSal = 1500.00;
                }else{
                    var url = 'http://35.198.5.41:3000/resident/new'
                }
                const payload = JSON.stringify({
                    name,
                    password,
                    cpf,
                    telephone: phone,
                    number: houseNum,
                    block: blockNum,
                    profile: profile,
                    office: profile,
                    salary: numSal,
                })
				
               let response = await fetch(url, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer <?php echo($_COOKIE['accessToken'])?>'
                    },
                    method: 'post',
                    body: payload,
                })

                response = await response.json()
			}

            async function LostAndFound(){
                let idTicket = parseInt(document.getElementById('idTicket').value)
                let cpf1 = document.getElementById('lostAndFoundCpf1').value
                let cpf2 = document.getElementById('lostAndFoundCpf2').value
                let place = document.getElementById('lostAndFoundPlace').value
                let text = document.getElementById('lostAndFoundText').value

                if(idTicket == null){
                    var payload = JSON.stringify({
                        cpf: cpf1,
                        local: place,
                        description: text,
                    })
                }else{
                    var payload = JSON.stringify({
                    cpf: cpf2,
                    id: idTicket,
                    })
                }          
                
                

               let response = await fetch('http://35.198.5.41:3000/lost-and-found/new', {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer  <?php echo($_COOKIE['accessToken'])?>'
                    },
                    method: 'post',
                    body: payload,
                })

                response = await response.json()
                GetLostAndFound()
			}
            
            GetLostAndFound()

            async function GetLostAndFound(){

               let response = await fetch('http://35.198.5.41:3000/lost-and-found/list', {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer  <?php echo($_COOKIE['accessToken'])?>'
                    },
                    method: 'get',
                })

                response = await response.json()
                document.getElementById('tableLostAndFoundBody').parentNode.removeChild(document.getElementById('tableLostAndFoundBody'));
                newTbody = document.createElement('tbody')
                newTbody.setAttribute('id', 'tableLostAndFoundBody')
                document.getElementById('tableLostAndFound').appendChild(newTbody)
                response.forEach(MountLostAndFoundTable)
			}

            function MountLostAndFoundTable(element, index, array){
                let row = document.createElement("tr")
                
                delete element.id_input_person
                delete element.id_withdrawal_person                

                for(i = 0;i < 4;i++){
                    let data = document.createElement("td")
                    data.innerHTML = Object.values(element)[i]
                    row.appendChild(data)
                }
                document.getElementById('tableLostAndFoundBody').appendChild(row)
            }

            async function PartyRoom(){
                let date = new Date(Date.now()).toISOString()
                date = date.split('T')
                
                cpf = document.getElementById('partyRoomCpf').value
                start = date[0] + ' ' + document.getElementById('partyRoomStart').value + ':00'
                end = date[0] + ' ' + document.getElementById('partyRoomEnd').value + ':00'
                
                const payload = JSON.stringify({
                    cpf: cpf,
                    startReservation: start,
                    endReservation: end,
                })

               let response = await fetch('http://35.198.5.41:3000/salon/new', {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer  <?php echo($_COOKIE['accessToken'])?>'
                    },
                    method: 'post',
                    body: payload,
                })

                response = await response.json()
            }
            GetPartyRoom()
            async function GetPartyRoom(){

               let response = await fetch('http://35.198.5.41:3000/salon/list', {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer  <?php echo($_COOKIE['accessToken'])?>'
                    },
                    method: 'get',
                })

                response = await response.json()
                document.getElementById('tablePartyRoomBody').parentNode.removeChild(document.getElementById('tablePartyRoomBody'));
                newTbody = document.createElement('tbody')
                newTbody.setAttribute('id', 'tablePartyRoomBody')
                document.getElementById('tablePartyRoom').appendChild(newTbody)
                response.forEach(MountPartyRoomTable)
            }

            function MountPartyRoomTable(element, index, array){
                let row = document.createElement("tr")   
                element.start_reservation = element.start_reservation.replace('T', ' ')
                element.start_reservation = element.start_reservation.replace('Z', ' ')
                element.start_reservation = element.start_reservation.replace(':00.000', ' ')


                element.end_reservation = element.end_reservation.replace('T', ' ')
                element.end_reservation = element.end_reservation.replace('Z', ' ')  
                element.end_reservation = element.start_reservation.replace(':00.000', ' ')

                //element.start_reservation.split(".")
                tempObject = {id_reserva: element.id,name : element.name, start : element.start_reservation, end : element.end_reservation } 
                for(i = 0;i < 4;i++){
                    let data = document.createElement("td")
                    data.innerHTML = Object.values(tempObject)[i]
                    row.appendChild(data)
                }
                document.getElementById('tablePartyRoomBody').appendChild(row)
            }


            function OpenModalChangeUser(){
                document.getElementById('modalChangeUser').removeAttribute('hidden')
                document.getElementById('modalLostAndFound').setAttribute('hidden', '')
                document.getElementById('modalPartyRoom').setAttribute('hidden','')
                document.getElementById('modalRegisterTicket').setAttribute('hidden','')
            }

            function OpenModalLostAndFound(){
                document.getElementById('modalLostAndFound').removeAttribute('hidden')
                document.getElementById('modalChangeUser').setAttribute('hidden','')
                document.getElementById('modalPartyRoom').setAttribute('hidden','')
                document.getElementById('modalRegisterTicket').setAttribute('hidden','')
            }

            function OpenModalPartyRoom(){
                document.getElementById('modalLostAndFound').setAttribute('hidden','')
                document.getElementById('modalChangeUser').setAttribute('hidden','')
                document.getElementById('modalPartyRoom').removeAttribute('hidden')
                document.getElementById('modalRegisterTicket').setAttribute('hidden','')
            }            

            function OpenModalRegisterTicket(){
                document.getElementById('modalLostAndFound').setAttribute('hidden','')
                document.getElementById('modalChangeUser').setAttribute('hidden','')
                document.getElementById('modalPartyRoom').setAttribute('hidden','')
                document.getElementById('modalRegisterTicket').removeAttribute('hidden')
            }      

            function ModalReturn(){
                document.getElementById('greyPanel').setAttribute('hidden','true')
            }

            function OpenModal(modalTitle){
                document.getElementById('greyPanel').removeAttribute('hidden')
                document.getElementById('modalTitle').innerHTML = modalTitle
                if(modalTitle == 'Alteração / Cadastro de Usuário'){
                    OpenModalChangeUser()
                }
                if(modalTitle == 'Achados e Perdidos'){
                    OpenModalLostAndFound()
                }
                if(modalTitle == 'Reservar Salão de Festas'){
                    OpenModalPartyRoom()
                }
                if(modalTitle == 'Registrar Ocorrência'){
                    OpenModalRegisterTicket()
                }
            }
        </script>
	</body>
</html>