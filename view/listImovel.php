<h1>Imoveis</h1>
<hr>
<div>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Foto</th>
                <th><a href="index.php?page=imovel">Novo</th>
            </tr>
        </thead>
        <tbody>
            <?php

                require_once 'controller/ImovelController.php';

                $usuarios = call_user_func(array('ImovelController','listar'));

                if(isset($imovel) && !empty($imovel)){
                    foreach($imovel as $imovel){
                        ?>
                        <tr>
                            <td><?php echo $usuario->getDescricao(); ?></td>
                            <td><?php echo $usuario->getFoto(); ?></td>
                            <td>
                                <a href="index.php?action=editar&id<?php echo $imovel->getId();?>">Editar</a>
                                <a href="index.php?action=excluir&id=<?php echo $imovel->getId();?>">Excluir</a>
                            </td>
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado</td>
                    </tr>
                    <?php
                }
                ?>
        </tbody>
    </table>
</div>