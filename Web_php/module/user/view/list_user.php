<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LLISTA D'ARTICLES</h3>
    	</div>
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table>
                <tr>
                    <td width=125><b>Usuario</b></th>
                    <td width=125><b>DNI</b></th>
                    <td width=125><b>Nombre</b></th>
                    <th width=350><b>Accion</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HI HA CAP ARTICLE</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['ref'] . '</td>';
                    	   	echo '<td width=125>'. $row['nom'] . '</td>';
                    	   	echo '<td width=125>'. $row['familia'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['article'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['article'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_user&op=delete&id='.$row['article'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>