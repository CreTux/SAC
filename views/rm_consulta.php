<?php 
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/db.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/usuario.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/includes/sesion_usuario.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/header.php');

$conexion_db    = new DB();
$sesion_usuario = new sesionUsuario();
$nombre_usuario = new Usuario(); 

?>

    <main id="rm_consulta">
        <section>
            <span>
                <h1>consulta</h1>
            </span>

            <div class=" table_consulta">
                <table>
                    <thead>
                        <tr>
                            <th>Folio</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Unidad de medida</th>
                            <th>Partida Presupuestal</th>
                            <th>Fecha</th>
                            <th>Costo Aproximado</th>
                            <th>Estado</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Papel</td>
                            <td>100</td>
                            <td>Pz</td>
                            <td>1</td>
                            <td>01/01/2020</td>
                            <td>$100</td>
                            <td>
                                En tramite
                            </td>
                            <td><a href="#">IR</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lapiz</td>
                            <td>50</td>
                            <td>Pz</td>
                            <td>2</td>
                            <td>01/01/2020</td>
                            <td>$100</td>
                            <td>
                                Concluido
                            </td>
                            <td><a href="#">IR</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Clips</td>
                            <td>5000</td>
                            <td>Pz</td>
                            <td>3</td>
                            <td>01/01/2020</td>
                            <td >$100</td>
                            <td>
                            En tramite
                            </td>
                            <td><a href="#">IR</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rollos</td>
                            <td>56</td>
                            <td>Pz</td>
                            <td>4</td>
                            <td>01/01/2020</td>
                            <td>$100</td>
                            <td>
                                Concluido
                            </td>
                            <td><a href="#">IR</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Toner</td>
                            <td>200</td>
                            <td>Pz</td>
                            <td>5</td>
                            <td>01/01/2020</td>
                            <td>$100</td>
                            <td>
                                En tramite
                            </td>
                            <td><a href="#">IR</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php include_once ($_SERVER['DOCUMENT_ROOT'].'/armonizacion_contable/views/footer.php'); ?>