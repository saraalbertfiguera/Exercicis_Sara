
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
                            echo $error['nom']
                        ?>
                    </span>
                </font></font></td>
            </tr>
    
            <tr>
                <td>Familia: </td>
                <td><select id="familia" name="familia" placeholder="familia">
                    <option value="taules">Taules</option>
                    <option value="seients">Seients</option>
                    <option value="almacenatge">Almacenatge</option>
                    <option value="solucions_multimedia">Solucions multimèdia</option>
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
                <td>Mesures: </td>
                <td><input type="text" id= "mesures" name="mesures" placeholder="mesures" value=""/></td>
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
                <td><input type="text" id="color" name="color" placeholder="color" value=""/></td>
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
                <td><input type="text" id="pes" name="pes" placeholder="pes" value=""/></td>
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
                <td><input id="fecha"  name="data_fabric" placeholder="data_fabric" value=""/></td>
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
                <td><textarea cols="30" rows="5" id="descripcio" name="descripcio" placeholder="descripcio" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_descripcio" class="error">
                        <?php
                            echo $error['descripcio']
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