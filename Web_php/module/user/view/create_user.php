<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_user&op=create">
        <h1>Nuevo artículo</h1>
        <table border='0'>
            <tr>
                <td>Nom: </td>
                <td><input type="text" id="nom" name="nom" placeholder="nom" value=""/></td>
                <td><font color="red">
                    <span id="error_nom" class="error">
                        <?php
                            if(isset($error_nom)){
                                echo "$error_nom";
                            }else{
                                echo " ";
                            }
                        ?>
                    </span>
                </font></font></td>
            </tr>





            <tr>
                <td>Familia: </td>
                <td><select id="familia[]" name="familia[]" placeholder="familia">
                    <option value="taules">Taules</option>
                    <option value="seients">Seients</option>
                    <option value="almacenatge">Almacenatge</option>
                    <option value="solucions_multimedia">Solucions multimèdia</option>
                    </select></td>
                <td><font color="red">
                    <span id="error_idioma" class="error">
                        <?php
                            if(isset($error_idioma)){
                                echo "$error_idioma";
                            }else{
                                echo " ";
                            }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Mesures: </td>
                <td><input type="text" id= "mesures" name="mesures" placeholder="mesures" value=""/></td>
                <td><font color="red">
                    <span id="error_mesures" class="error">
                        <?php
                            if(isset($error_mesures)){
                                echo "$error_mesures";
                            }else{
                                echo " ";
                            }
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Material: </td>

<td><input type="text" id="material" name="material" placeholder="material" value=""/></td>
                <td><font color="red">
                    <span id="error_material" class="error">
                        <?php
                            if(isset($error_nom)){
                                echo "$error_material";
                            }else{
                                echo " ";
                            }
                        ?>
                    </span>
                </font></font></td>




                <!--<td><input type="checkbox" id= "material[]" name="material[]" placeholder= "material" value="Pi"/>informatica
                    <input type="checkbox" id= "material[]" name="material[]" placeholder= "material" value="Roure"/>alimentacion
                    <input type="checkbox" id= "material[]" name="material[]" placeholder= "material" value="Conglomerat"/>automovil
                    <input type="checkbox" id= "material[]" name="material[]" placeholder= "material" value="Alumini"/>alimentacion
                    <input type="checkbox" id= "material[]" name="material[]" placeholder= "material" value="Ferro"/>alimentacion
                </td> 
                <td><font color="red">
                    <span id="error_material" class="error">
                        <?php
                            if(isset($error_material)){
                                echo "$error_material";
                            }else{
                                echo " ";
                            }
                        ?>
                    </span>
                </font></font></td>
            </tr>
                    -->
            <tr>
                <td>Color: </td>
                <td><input type="text" id="color" name="color" placeholder="color" value=""/></td>
                <td><font color="red">
                    <span id="error_color" class="error">
                        <?php
                            if(isset($error_color)){
                                echo "$error_color";
                            }else{
                                echo " ";
                            }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                 <tr>
                <td>Pes: </td>
                <td><input type="text" id="pes" name="pes" placeholder="pes" value=""/></td>
                <td><font color="red">
                    <span id="error_pes" class="error">
                        <?php
                            if(isset($error_pes)){
                                echo "$error_pes";
                            }else{
                                echo " ";
                            }
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>

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
                            if(isset($errpr_pais_fabric)){
                                echo "$error_pais_fabric";
                            }else{
                                echo " ";
                            }
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Data_fabric: </td>
                <td><input id="fecha" type="text" name="data_fabric" placeholder="data_fabric" value=""/></td>
                <td><font color="red">
                    <span id="error_data_fabric" class="error">
                        <?php
                            if(isset($error_data_fabric)){
                                echo "$error_data_fabric";
                            }else{
                                echo " ";
                            }
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
                            if(isset($error_coment)){
                                echo "$error_coment";
                            }else{
                                echo " ";
                            }
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