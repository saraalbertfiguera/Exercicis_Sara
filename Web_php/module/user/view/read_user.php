<div id="contenido">
    <h1>Informació de l'article</h1>
    <p>
    <table border='0'>
        <tr>
            <td>Referència: </td>
            <td>

                <?php
                    echo $articles['ref'];

                ?>
            </td>
        </tr>
    
        <tr> 

            <td>Nom: </td>
            <td>
                <?php
                    echo $articles['nom'];
                ?>
            </td>
        </tr>
                <tr> 

            <td>Familia: </td>
            <td>
                <?php
                    echo $articles['familia'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Mesures: </td>
            <td>
                <?php
                    echo $articles['mesures'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Material: </td>
            <td>
                <?php
                    echo $articles['material'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Color: </td>
            <td>
                <?php
                    echo $articles['color'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Pes: </td>
            <td>
                <?php
                    echo $articles['pes'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Pais de fabricació:    </td>
            <td>
                <?php
                    echo $articles['pais_fabric'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Data de fabricació:     </td>
            <td>
                <?php
                    echo $articles['data_fabric'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Descripció: </td>
            <td>
                <?php
                    echo $articles['descripcio'];
                ?>
            </td>
        </tr>
        
       
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Torna</a></p>
</div>