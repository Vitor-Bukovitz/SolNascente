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
                                    <option>sub-sindico</option>
                                    <option>sindico</option>
                                </select>
                            </div>
                            <div class="modalInputDiv submitButton">
                                <input type=submit value="Registrar" onclick="ChangeUser()">
                            </div>
                        </form>
                    </div>
                    <div id ="modalLostAndFound" style="width:100%;height:100%" hidden>
                        <form method="post">
                            <div class="modalInputDiv">
                                <label>Insira o nome do usuário que encontrou</label>
                                <input type="text" placeholder="Nome">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira o nome do usuário que retirou</label>
                                <input type="text" placeholder="Nome">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira o local em que o item foi encontrado</label>
                                <input type="text" placeholder="Local">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira uma descrição do item</label>
                                <input type="text" placeholder="Descrição">
                            </div>
                            <div class="modalInputDiv submitButton">
                                <input type=submit value="Registrar">
                            </div>
                        </form>
                    </div>
                    <div id ="modalPartyRoom" style="width:100%;height:100%" hidden>
                        <form method="post">
                            <div class="modalInputDiv">
                                <label>Insira o seu CPF</label>
                                <input type="text" placeholder="CPF">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira o horário de início</label>
                                <input type="text" placeholder="ex. 12:30">
                            </div>
                            <div class="modalInputDiv">
                                <label>Insira o horário de término</label>
                                <input type="text" placeholder="ex. 12:30">
                            </div>
                            <div class="modalInputDiv submitButton">
                                <input type=submit value="Registrar">
                            </div>
                        </form>
                    </div>
                    <div id ="modalRegisterTicket" style="width:100%;height:100%" hidden>
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
        }else if($_GET['permission'] == 'morador'){
            echo($ModuleLostAndFound);
            echo($ModulePartyRoom);
            echo($ModuleRegisterTicket);
        }
        
        ?>
            </div>
        </div>
        <script>            

            function ChangeUser(){
				let cpf = document.getElementById('changeUserCpf').value
                let name = document.getElementById('changeUserName').value
                let phone = document.getElementById('changeUserPhone').value
                let houseNum = parseInt(document.getElementById('changeUserHouseNum').value)
                let blockNum = parseInt(document.getElementById('changeUserBlockNum').value)
                let password = document.getElementById('changeUserPass').value
                let profile = document.getElementById('changeUserProfile').value
				let request = new XMLHttpRequest()
                
                let opts = JSON.stringify({
                    name: String(name),
                    password: String(password),
                    cpf:  String(cpf),
                    telephone: String(phone),
                    number: Number(houseNum),
                    block: Number(blockNum),
                    profile: String(profile)
                })

                fetch('http://35.198.5.41:3000/resident/new', {
                    method: 'post',
                    body: opts
                }).then(function(response) {
                    return response.json();
                }).then(function(result){
                    alert(Object.entries(result))
                })

                parameters = "name=" + name + "&password=" + password + "&cpf=" + cpf + "&telephone =" + phone +
                "&number="+houseNum + "&block=" + blockNum + "&profile=" + profile

				request.open('POST', 'http://35.198.5.41:3000/resident/new')
                //request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                request.setRequestHeader('Authorization', '<?php echo($_COOKIE['accessToken']);?>');
				request.onreadystatechange = function(){					
					if(request.readyState === 4) {
						if(request.status === 200 || request.status === 201) { 
							const updateResponse = JSON.parse(request.response)
							alert(request.response)
							document.cookie = "id =" + updateResponse.id;
							document.cookie = "accesToken =" + updateResponse.token;
							if(updateResponse.profile != null){
								document.cookie = "permission =" + updateResponse.profile;
							}else{
								document.cookie = "permission =" + updateResponse.perfil;
							}
							window.location = 'http://192.168.25.61:366/SolNascente/front-end/panel'
						}else{
							alert("Senha ou CPF inválidos")
						}
            		}
				}
				//request.send(parameters)
			}



            function OpenModalChangeUser(){
                document.getElementById('modalChangeUser').removeAttribute('hidden')
                document.getElementById('modalLostAndFound').setAttribute('hidden', '')
                document.getElementById('modalPartyRoom').setAttribute('hidden','')
                document.getElementById('RegisterTicket').setAttribute('hidden','')
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