<div id="contenido">
    <h1>Informació de l'article</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Article: </td>
            <td>
                <?php
                    echo $article['ref'];
                ?>
            </td>
        </tr>
    
        <tr> //`nom`, `familia`, `mesures`, `material`, `color`, `pes`, `pais_fabric`, `data_fabric`, `coment

            <td>Nom: </td>
            <td>
                <?php
                    echo $article['nom'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Mesures: </td>
            <td>
                <?php
                    echo $article['mesures'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Material: </td>
            <td>
                <?php
                    echo $article['material'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Color: </td>
            <td>
                <?php
                    echo $article['color'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Pes: </td>
            <td>
                <?php
                    echo $article['pes'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Pais de fabricació: </td>
            <td>
                <?php
                    echo $article['pais_fabric'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Data de fabricació: </td>
            <td>
                <?php
                    echo $article['data_fabric'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Observacions: </td>
            <td>
                <?php
                    echo $article['coment'];
                ?>
            </td>
        </tr>
        
       
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Torna</a></p>
</div>