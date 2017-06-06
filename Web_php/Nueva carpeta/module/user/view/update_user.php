
<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_user&op=create">
        <h1>Nuevo artículo</h1>
        <table border='0'>
            <tr>
                <td>Nom: </td>
                <td><input type="text" id="nom" name="nom" placeholder="nom" value="<?php echo $user['nom'];?>"/></td>
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
                        if ($user['familia']==="Taules"){
                    ?>
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Taules" checked/>Taules
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Seients"/>Seients
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Almacenatge" checked/>Almacenatge
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Solucions multimèdia"/>Solucions multimèdia
                    <?php    
                        }elseif ($user['familia']==="Seients"){
                    ?>
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Taules" checked/>Taules
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Seients"/>Seients
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Almacenatge" checked/>Almacenatge
                        <input type="radio" id="familia" name="familia" placeholder="familia" value="Solucions multimèdia"/>Solucions multimèdia
                    <?php   
                        }elseif ($user['familia']==="Almacenatge"){
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
                <td><input type="text" id= "mesures" name="mesures" placeholder="mesures" value="<?php echo $user['mesures'];?>"/></td>
                <td><font color="red">
                    <span id="error_mesures" class="error">
                        <?php
                            echo $error['mesures']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Material: </td>
                <td><input type="checkbox" id= "material" name="material" placeholder= "material" value="Pi"/>Pi
                    <input type="checkbox" id= "material" name="material" placeholder= "material" value="Roure"/>Roure
                    <input type="checkbox" id= "material" name="material" placeholder= "material" value="Conglomerat"/>Conglomerat
                    <input type="checkbox" id= "material" name="material" placeholder= "material" value="Alumini"/>Alumini
                    <input type="checkbox" id= "material" name="material" placeholder= "material" value="Ferro"/>Ferro
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
                <td><input type="text" id="color" name="color" placeholder="color" value=="<?php echo $user['color'];?>"/></td>
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
                <td><input type="text" id="pes" name="pes" placeholder="pes" value="<?php echo $user['pes'];?>"/></td>
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
                        if($user['pais_fabric']==="Espanya"){
                    ?>
                        <option value="espanya">Espanya</option>
                        <option value="portugal">Portugal</option>
                        <option value="frança">França</option>
                        <option value="italia">Itàlia</option>
                    <?php
                        }elseif($user['pais_fabric']==="Portugal"){
                    ?>
                        <option value="espanya">Espanya</option>
                        <option value="portugal">Portugal</option>
                        <option value="frança">França</option>
                        <option value="italia">Itàlia</option>
                    <?php
                        }elseif($user['familia']==="França"){
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
                <td>Pais_fabric: </td>
                <td><select id="pais_fabric" name="pais_fabric" placeholder="pais_fabric">
                    <option value="España">España</option>
                    <option value="Portugal">Portugal</option>
                    <option value="França">Francia</option>
                    <option value="Italia">Francia</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_pais_fabric" class="error">
                        <?php
                          echo $error['pais_fabric']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Data_fabric: </td>
                <td><input type="text"  id="data_fabric"  name="data_fabric" placeholder="data_fabric" value="<?php echo $user['data_fabric'];?>"/></td>
                <td><font color="red">
                    <span id="error_data_fabric" class="error">
                        <?php
                            echo $error['data_fabric']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Observacions: </td>
                <td><textarea cols="30" rows="5" id="coment" name="coment" placeholder="coment" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_coment" class="error">
                        <?php
                            echo $error['coment']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>