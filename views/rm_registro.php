<?php 
//include_once '\views\header.php';
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/header.php');
?>
    <main id="rm_registro">
        <section>
            <h2>requisición de adquisiciones, arrendamientos y servicios</h2>
            <div>
                <form action="/armonizacion_contable/add_requisicion.php" method="POST">
                    <section>
                        <div class="field">
                            <label for="">folio solicitante</label>
                            <input type="text" name="folio_sol_req" require autocomplete>
                        </div>
                        <div class="field">
                            <label for="">folio adquisiciones</label>
                            <input type="text" name="folio_ad_req" require>
                        </div>
                        <div class="field">
                            <label for="">fecha de requisición</label>
                            <input type="date" name="fecha_req" require>
                        </div>
                        <div class="field">
                            <label for="">número de oficio</label>
                            <input type="text" name="num_oficio_req" require>
                        </div>
                        <div class="field">
                            <label for="">fecha de oficio</label>
                            <input type="date" name="fecha_oficio_req" require>
                        </div>
                    </section>
                    <section>
                        <div class="textbox">
                            <label for="">descripción de bienes y/o servicios incluyendo datos técnicos</label>
                            <textarea name="descripcion_req" cols="30" rows="10" require></textarea>
                        </div>
                        <div class="textbox">
                            <label for="">justificación y uso de los bienes y/o servicios solicitados</label>
                            <textarea name="justificacion_req" cols="30" rows="10" require></textarea>
                        </div>

                    </section>
                    <section>
                        <div class="field">
                            <label for="">unidad de medida</label>                     
                            <select name="umedida_req" require>
                               <option value="">Seleccione una opción</option> 
                               <?php 
                                  $u_media = pg_query($conexionDb, "SELECT * FROM cat_unidad_medida ORDER BY desc_unidad_medida ASC");                                   
                                  while($id_medida = pg_fetch_array($u_media)){
                                  echo'<OPTION VALUE="'.$id_medida['id_unidad_medida'].'">'.$id_medida['desc_unidad_medida'].'</OPTION>';
                                  }
                               ?>   
                            </select>
                        </div>                        
                        <div class="field">
                            <label for="">cantidad</label>
                            <input type="number" name="cantidad_req" require>
                        </div>
                        <div class="field">
                            <label for="">partida presupuestal</label>                                                          
                            <select name="ppresupuestal" require>                               
                            <option value="">Seleccione una opción</option>                               
                               <?php 
                                  $p_presupuestal = pg_query($conexionDb, "SELECT * FROM cat_ppresupuestal ORDER BY desc_ppresupuestal ASC");                                   
                                  while($id_ppresupuestal = pg_fetch_array($p_presupuestal)){
                                  echo'<option value="'.$id_ppresupuestal['id_ppresupuestal'].'">'.$id_ppresupuestal['desc_ppresupuestal'].'</option>';
                                  }
                               ?>   
                            </select>
                            </select>
                        </div>
                        <div class="field">
                            <label for="">surtimiento de los vienes y/o servicios en:</label>
                            <select name="surtimiento_req" require>                                
                                <option value="">Seleccione una opción</option>                               
                               <?php 
                                  $surtimiento = pg_query($conexionDb, "SELECT * FROM cat_surtimiento ORDER BY desc_surtimiento ASC");                                   
                                  while($id_surtimiento = pg_fetch_array($surtimiento)){
                                  echo'<option value="'.$id_surtimiento['id_surtimiento'].'">'.$id_surtimiento['desc_surtimiento'].'</option>';
                                  }
                               ?>  
                            </select>
                        </div>
                        <div class="field">
                            <label for="">costo aproximado</label>
                            <input type="numeric" name="costo_aprox_req" require></input>
                        </div>
                        
                        <div class="field">
                            <label for="">solicita</label>
                            <select name="solicita_req" require>
                                <option value="">Seleccione una opción</option>
                                <?php 
                                  $c_solicita = pg_query($conexionDb, "SELECT nombre_usuario||' '||apepat_usuario||' '||apemat_usuario AS nombre_solicita, id_area_usuario FROM usuarios 
                                                                       WHERE id_area_usuario = 6 AND id_estatus_usuario = 1 ORDER BY id_area_usuario ASC");                                   
                                  while($id_solicita = pg_fetch_array($c_solicita)){
                                  echo'<option value="'.$id_solicita['id_usuario'].'">'.$id_solicita['nombre_solicita'].'</option>';
                                  }
                               ?>  
                            </select>
                        </div>
                        <!-- <div class="field">
                            <label for="">cargo solicita</label>
                            <input type="text" name="cargo_sol_req" require value = 6>
                        </div>                               -->
                        <div class="field">
                            <label for="">revisa</label>
                            <select name="revisa_req" require>
                                <option value="">Seleccione una opción</option>
                                <?php 
                                  $c_revisa = pg_query($conexionDb, "SELECT nombre_usuario||' '||apepat_usuario||' '||apemat_usuario AS nombre_revisa, id_area_usuario FROM usuarios 
                                                                       WHERE id_area_usuario = 4 OR id_area_usuario = 2 AND id_estatus_usuario = 1 ORDER BY id_area_usuario DESC");                                   
                                  while($id_revisa = pg_fetch_array($c_revisa)){
                                  echo'<option value="'.$id_revisa['id_usuario'].'">'.$id_revisa['nombre_revisa'].'</option>';
                                  }
                               ?>  
                            </select>
                        </div>
                        <!-- <div class="field">
                            <label for="">cargo revisa</label>
                            <input type="text" name="cargo_rev_req" require value = 4>
                        </div>                         -->
                        <div class="field">
                            <label for="">autoriza</label>
                            <select name="autoriza_req" require>
                                <option value="">Seleccione una opción</option>
                                <optio<?php 
                                  $c_autoriza = pg_query($conexionDb, "SELECT nombre_usuario||' '||apepat_usuario||' '||apemat_usuario AS nombre_autoriza, id_area_usuario FROM usuarios 
                                                                       WHERE id_area_usuario = 2 AND id_estatus_usuario = 1 ORDER BY id_area_usuario DESC");                                   
                                  while($id_autoriza = pg_fetch_array($c_autoriza)){
                                    $id_autoriza['id_area_usuario'];
                                    echo'<option value="'.$id_autoriza['id_usuario'].'">'.$id_autoriza['nombre_autoriza'].'</option>';
                                  }
                               ?>  
                            </select>
                        </div>
                        <!-- <div class="field">
                            <label for="">cargo autoriza</label>
                            <input type="text" name="cargo_aut_req" require value = 2 >
                        </div>                          -->
                    </section>
                    <div class="submit">
                        <input type="submit" value="Registrar">
                    </div>
                    <div>
                         <tbody>          
                             <tr>
                                 
                             </tr>    

                    </div>                

            </div>
        </section>
    </main>
    <?php 
    include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/footer.php');
    ?>