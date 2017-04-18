<?php
 
require 'lib.php';
 
$object = new CRUD();
 
// Design initial table header
$data = '<table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Tipos de atividades</th>
                            <th>ID</th>
                            <th>Apagar</th>
                        </tr>';
 
 
$users = $object->Read();
 
if (count($users) > 0) {
    $number = 1;
    foreach ($users as $user) {
        $data .= '<tr>
                <td>' . $number . '</td>
                <td>' . $user['DESCRI'] . '</td>
                <td>
                    <button onclick="GetUserDetails(' . $user['CHVAUX'] . ')" class="btn btn-warning">Atualizar</button>
                </td>
                <td>
                    <button onclick="DeleteUser(' . $user['CHVAUX'] . ')" class="btn btn-danger">Apagar</button>
                </td>
            </tr>';
        $number++;
    }
} else {
    // records not found
    $data .= '<tr><td colspan="6">Sem registros</td></tr>';
}
 
$data .= '</table>';
 
echo $data;
 
?>