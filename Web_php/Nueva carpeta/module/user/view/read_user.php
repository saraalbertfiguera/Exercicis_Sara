<div id="contenido">
    <h1>Informació de l'article</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Article: </td>
            <td>
                <?php
                    echo $user['ref'];
                ?>
            </td>
        </tr>
    
        <tr> 

            <td>Nom: </td>
            <td>
                <?php
                    echo $user['nom'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Mesures: </td>
            <td>
                <?php
                    echo $user['mesures'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Material: </td>
            <td>
                <?php
                    echo $user['material'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Color: </td>
            <td>
                <?php
                    echo $user['color'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Pes: </td>
            <td>
                <?php
                    echo $user['pes'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Pais de fabricació: </td>
            <td>
                <?php
                    echo $user['pais_fabric'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Data de fabricació: </td>
            <td>
                <?php
                    echo $user['data_fabric'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Observacions: </td>
            <td>
                <?php
                    echo $user['coment'];
                ?>
            </td>
        </tr>
        
       
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Torna</a></p>
</div>