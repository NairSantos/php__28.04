<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="controller/controllerPessoa.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="lblNome"><FONT face="arial" SIZE="3" COLOR="darkgreen">Nome:</FONT></label>
                    </td>
                    <td>
                        <input type="text" name="txtNome" id="txtNome">
                    </td>
                </tr>
                    <td>
                        <label for="lblEnd"><FONT face="arial" SIZE="3" COLOR="darkgreen">Endereço:</FONT></label>
                    </td>
                    <td>
                        <input type="text" name="txtEnd" id="txtEnd">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button style="color:darkgreen">Cadastrar</button>
                    </td>
                </tr>
            </table>
    </body>
</html>

