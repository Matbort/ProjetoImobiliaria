<h1>Imoveis</h1>
<hr>
<div>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Foto</th>
                <th><a href="index.php?page=imovel">Novo</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php

                require_once 'controller/ImovelController.php';

                $imoveis = call_user_func(array('ImovelController','listar'));
                
                if(isset($imoveis) && !empty($imoveis)){
                    foreach($imoveis as $imovel){
                        ?>
                        <tr>
                            <td><?php echo $imovel->getDescricao(); ?></td>
                            <td><?php echo '<img width="30%" src="data:image/jpeg;base64,'.base64_encode($imovel->getFoto()) .'" />';; ?></td>
                            <td><?php echo $imovel->getValor(); ?></td>
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