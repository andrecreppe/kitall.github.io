<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alteração</title>
</head>
<body>
    <form action="../../php/alt_prod.php" method="post">
       (o link da imagem é mudado de acordo com o nome do produto)
        <table border="1">
            <tr>
                <td>Código:</td>
                <td>
                    <input type="number" name="id"
                        value="<?php echo $_GET['id']; ?>" readonly>
                </td> 
            </tr>
            <tr>
                <td>Nome:</td>
                <td>
                    <input type="text" name="nome"
                        value="<?php echo $_GET['nome']; ?>">
                </td>
            </tr>
            <tr>
                <td>Estoque:</td>
                <td>
                    <input type="number" name="qtd"
                        value="<?php echo $_GET['qtd']; ?>">
                </td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td>
                    <input type="number" name="preco"
                        value="<?php echo $_GET['preco']; ?>">
                </td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td>
                    <textarea rows="4" cols="50" name="descricao"><?php echo $_GET['descricao']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Excluído:</td>
                <td>
                    <?php
                    
                        if($_GET['excluido'] == 't')
                        {
                            echo "Sim<input type='radio' name='exclusao' value='1' checked>";
                            echo "&nbsp;&nbsp;Não<input type='radio' name='exclusao' value='0'>";
                        }
                        else
                        {
                            echo "Sim<input type='radio' name='exclusao' value='1'>";
                            echo "&nbsp;&nbsp;Não<input type='radio' name='exclusao' value='0' checked>"; 
                        }
                    ?>
                </td> 
            </tr>
            <tr>
                <td><input type="submit" value="Confirmar"></td>
                <td><input type="button" value="Cancelar" onclick="location.replace(document.referrer);"></td>
            </tr>
        </table>
    </form>
</body>
</html>