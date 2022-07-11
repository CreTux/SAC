<?php
//include_once '\views\header.php';
include_once($_SERVER['DOCUMENT_ROOT'] . '/armonizacion_contable/views/header.php');
$conexion_db    = new DB();
//$sesion_usuario = new sesionUsuario();
$nombre_usuario = new Usuario();
$conexion_db->conecta_db();
$conexionDb = $conexion_db->conecta_db();
?>

<main class="contenedor sombra">

    <h2> Registro de Egresos</h2>

    <div>
        <form action="#" method="post" class="formularioEgresos">
            <div class="formularioEgresos__part1">
                <label for="capitulo">Capitulo: </label>
                <select>
                    <option value="1"> Prueba 1</option>
                    <option value="2"> Prueba 2</option>
                    <option value="3"> Prueba 3</option>
                </select>
            </div>
            <div class="formularioEgresos__part2">
                <div class="celda">
                    <label for="centro_gestor">Centro Gestor:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="clasificador">Clasificador:</label>
                    <select>
                        <option value=""></option>
                        <option title="1" value="1">0000000000</option>
                        <option title="2" value="2">124003P001</option>
                        <option title="3" value="3">124004P002</option>
                        <option title="10" value="10">134001O001</option>
                        <option title="14" value="14">152039M002</option>
                        <option title="4" value="4">152104M001</option>
                        <option title="13" value="13">152298M002</option>
                        <option title="5" value="5">172002N001</option>
                        <option title="11" value="11">268294P004</option>
                        <option title="12" value="12">269039E044</option>
                        <option title="6" value="6">269169E044</option>
                        <option title="7" value="7">269170E076</option>
                        <option title="8" value="8">269170J001</option>
                        <option title="9" value="9">271001O001</option>
                    </select>
                </div>
                <div class="celda">
                    <label for="valor_publico">Valor Público:</label>
                    <select>
                        <option value=""></option>
                        <option title="1" value="1">000</option>
                        <option title="2" value="2">150</option>
                        <option title="3" value="3">160</option>
                        <option title="4" value="4">163</option>
                        <option title="5" value="5">531</option>
                        <option title="6" value="6">632</option>
                    </select>
                </div>
                <div class="celda">
                    <label for="fondo">Fondo:</label>
                    <select id="fondo" onchange="validar(this)">
                        <option value=""></option>
                        <option value="141200">141200</option>
                        <option value="141203">141203</option>
                        <option value="141204">141204</option>
                        <option value="141210">141210</option>
                        <option value="141220">141220</option>
                        <option value="141295">141295</option>
                    </select>
                </div>
                <div class="celda">
                    <label for="posicion_presupuestal">Posición Presupuestal:</label>
                    <select name="" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="formularioEgresos__part3">
                <div class="celda">
                    <label for="presupuesto_original">Presupuesto Original:</label>
                    <input type="text">
                </div>
            </div>
            <div class="formularioEgresos__part4">
                <div class="celda">
                    <label for="enero">Enero:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="febrero">Febrero:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="marzo">Marzo:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="abril">Abril:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="mayo">Mayo:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="junio">Junio:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="julio">Julio:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="agosto">Agosto:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="septiembre">Septiembre:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="octubre">Octubre:</label>
                    <input type="text">
                </div>
                <div class="celda">
                    <label for="noviembre">Noviembre:</label>
                    <input type="text">
                </div>  
                <div class="celda">
                    <label for="diciembre">Dciembre:</label>
                    <input type="text">
                </div>
            </div>
            <div class="boton formularioEgresos__part5">
                <input type="submit" value="Enviar Datos">
            </div>

        </form>
</main>