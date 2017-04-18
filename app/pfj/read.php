<?php
 
require 'lib.php';
 
$object = new CRUD();
 
// Design initial table header
$data = '<table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Atualizar</th>
                            <th>Apagar</th>
                        </tr>';
 
 
$users = $object->Read();
 
if (count($users) > 0) {
    $number = 1;
    foreach ($users as $user) {
        $data .= '<tr>
                <td>' . $number . '</td>
                <td>' . $user['NOMECLIE'] . '</td>
                <td>' . $user['APELIDO'] . '</td>
                <td>
                    <button onclick="GetUserDetails(' . $user['CHAVPFJ'] . ')" class="btn btn-warning">Atualizar</button>
                </td>
                <td>
                    <button onclick="DeleteUser(' . $user['CHAVPFJ'] . ')" class="btn btn-danger">Apagar</button>
                </td>
            </tr>';
        $number++;
    }
} else {
    // records not found
    $data .= '<tr><td colspan="6">Sem Registro</td></tr>';
}
 
$data .= '</table>';
 
echo $data;
 
?>