<?php
include_once 'cabecera.html';
include 'ver.php';
echo "<h1>Administrar alumnos</h1>";
echo "<td><a type='button' class='btn btn-success'href='insertar_formulario.php'>Crear</a></td>";
echo "<table class='table table-light'>";
echo "<tr>";
echo "<th>Email</th>";
echo "<th>nombre</th>";
echo "<th>Apellido</th>";
echo "<th>edad</th>";
echo "<th>Actualizar</th>";
echo "<th>Borrar</th>";
echo "</tr>";

foreach ($listaPersonas as $persona) {

    echo "<tr>";
    echo "<td>{$persona['email']}</td>";
    echo "<td>{$persona['name']}</td>";
    echo "<td>{$persona['apellido']}</td>";
    echo "<td>{$persona['age']}</td>";

    echo "<td><a type='button' class='btn btn-primary' href='modificar_formulario.php?id={$persona['id']}' onclick=\"return confirm('¿Estás seguro de actualizar?')\">Actualizar</a></td>";

    echo "<td><a type='button' class='btn btn-danger' href='eliminar.php?id={$persona['id']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">borrar</a></td>";

    echo '</tr>';
}

echo "</table>";
echo "</html>";
