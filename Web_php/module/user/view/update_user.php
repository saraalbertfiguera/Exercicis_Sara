
<div id="contenido">
    <form autocomplete="on" method="post" name="update_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Nuevo artículo</h1>
        <table border='0'>
            <tr>
                <td>Nom: </td>
                <td><input type="text" id="nom" name="nom" placeholder="nom" value="<?php echo $articles['nom'];?>"/></td>
                <td><font color="red">
                    <span id="error_nom" class="error">
                        <?php
                            echo $error['nom']
                        ?>
                    </span>
                </font></font></td>
            </tr>



            <td>Familia: </td>
                <td>
                    <?php
                        if ($articles['familia']==="Taules"){
                    ?>
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Taules" checked/>Taules
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Seients"/>Seients
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Almacenatge" checked/>Almacenatge
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Solucions multimèdia"/>Solucions multimèdia
                    <?php    
                        }elseif ($articles['familia']==="Seients"){
                    ?>
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Taules" checked/>Taules
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Seients"/>Seients
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Almacenatge" checked/>Almacenatge
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Solucions multimèdia"/>Solucions multimèdia
                    <?php   
                        }elseif ($articles['familia']==="Almacenatge"){
                    ?>
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Taules" checked/>Taules
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Seients"/>Seients
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Almacenatge" checked/>Almacenatge
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Solucions multimèdia"/>Solucions multimèdia
                    <?php   
                        }else{
                    ?>
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Taules" checked/>Taules
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Seients"/>Seients
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Almacenatge" checked/>Almacenatge
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Solucions multimèdia"/>Solucions multimèdia
                    <?php   
                        }
                    ?>
                </td>

                <td><font color="red">
                    <span id="error_familia" class="error">
                        <?php
                         echo $error['familia']
                        ?>
                    </span>
                </font></font></td>
            </tr>


            <tr>
                <td>Mesures: </td>
                <td><input type="text" id= "mesures" name="mesures" placeholder="mesures" value="<?php echo $articles['mesures'];?>"/></td>
                <td><font color="red">
                    <span id="error_mesures" class="error">
                        <?php
                            echo $error['mesures']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
        

             <td>Material: </td>
                <?php
                    $material=explode(":", $articles['material']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Pi", $material);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "material[]" name="material[]" value="Pi" checked/>Pi
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "material[]" name="material[]" value="Pi"/>Pi
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("roure", $material);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "material[]" name="material[]" value="Roure" checked/>Roure
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "material[]" name="material[]" value="Roure"/>Roure
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("conglomerat", $material);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "material[]" name="material[]" value="Conglomerat" checked/>Conglomerat
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "material[]" name="material[]" value="Conglomerat"/>Conglomerat
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("alumini", $material);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "material[]" name="material[]" value="Alumini" checked/>Alumini
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "material[]" name="material[]" value="Alumini"/>Alumini
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("ferro", $material);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "material[]" name="material[]" value="Ferro" checked/>Ferro</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "material[]" name="material[]" value="Ferro"/>Ferro</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_material" class="error">
                        <?php
                            echo $error['material']
                        ?>
                    </span>
                </font></font></td>
            </tr>







            <tr>
                <td>Color: </td>
                <td><input type="text" id="color" name="color" placeholder="color" value="<?php echo $articles['color'];?>"/></td>
                <td><font color="red">
                    <span id="error_color" class="error">
                        <?php
                           echo $error['color']
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                 <tr>
                <td>Pes: </td>
                <td><input type="text" id="pes" name="pes" placeholder="pes" value="<?php echo $articles['pes'];?>"/></td>
                <td><font color="red">
                    <span id="error_pes" class="error">
                        <?php
                            echo $error['pes']
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>





 <tr>
                <td>Pais de fabricació: </td>
                <td><select id="pais_fabric" name="pais_fabric" placeholder="pais_fabric">
                    <?php
                        if($articles['pais_fabric']==="Espanya"){
                    ?>
                        <option value="espanya">Espanya</option>
                        <option value="portugal">Portugal</option>
                        <option value="frança">França</option>
                        <option value="italia">Itàlia</option>
                    <?php
                        }elseif($articles['pais_fabric']==="Portugal"){
                    ?>
                        <option value="espanya">Espanya</option>
                        <option value="portugal">Portugal</option>
                        <option value="frança">França</option>
                        <option value="italia">Itàlia</option>
                    <?php
                        }elseif($articles['familia']==="França"){
                    ?>
                        <option value="espanya">Espanya</option>
                        <option value="portugal">Portugal</option>
                        <option value="frança">França</option>
                        <option value="italia">Itàlia</option>
                    <?php
                        }else{
                    ?>
                        <option value="espanya">Espanya</option>
                        <option value="portugal">Portugal</option>
                        <option value="frança">França</option>
                        <option value="italia">Itàlia</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_familia" class="error">
                        <?php
                         echo $error['familia']
                        ?>
                    </span>
                </font></font></td>
            </tr>

            
            <tr>
                <td>Data de fabricació: </td>
                <td><input id="fecha"  name="data_fabric" placeholder="data_fabric" value="<?php echo $articles['data_fabric'];?>"/></td>
                <td><font color="red">
                    <span id="error_data_fabric" class="error">
                        <?php
                            echo $error['data_fabric']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Descripció: </td>
                <td><textarea cols="30" rows="5" id="descripcio" name="descripcio" placeholder="descripcio" value="<?php echo $articles['descripcio'];?>"></textarea></td>
                <td><font color="red">
                    <span id="error_descripcio" class="error">
                        <?php
                            echo $error['descripcio']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Tornar</a></td>
            </tr>
        </table>
    </form>
</div>