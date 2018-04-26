<html>
    <head>
        <title> Lista de Categorias</title>
    </head>
    <body>
        <h1> Lista de Categorias</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th> Descrição</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($categorias as $categoria):

            ?>
                <tr>


                <td><a href="?acao=show&id= <?= $categoria->getNome(); ?>"></a></td>
                <td><?= $categoria->getDescricao(); ?></td>


            </tr>

        <?php endforeach;
        ?>

            </tbody>
        </table>
    </body>
</html>