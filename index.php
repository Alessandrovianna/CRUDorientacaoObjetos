<?php
include 'contato.class.php';

$contato = new Contato();
?>
<h1>Contatos</h1>
<a class="btn btn-success" href="adicionar.php">ADICIONAR</a><br><br>

    <table class="" border="1" width="600" style="text-align:center;">
        <tr >
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>AÇÕES</th>
        </tr>
        <?php
            $lista = $contato->getAll();
            foreach($lista as $item):
        ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['nome']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="editar.php?id=<?php echo $item['id']; ?>">EDITAR</a>
                    <a class="btn btn-sm btn-danger" href="excluir.php?id=<?php echo $item['id']; ?>">EXCLUIR</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
