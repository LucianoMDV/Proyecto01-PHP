"use strict"
let cuerpo = document.querySelector('#cuerpo');
cuerpo.innerHTML+=`
                <form action="punto6.php" method="POST">
                    <input name="texto1" type="text">
                    <input name="texto2" type="text">
                    <button type="submit">Enviar</button>
                </form>
                `;