<?php 
require "../../inc/topo.php";
?>
 
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tipos de Atividades</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Novo tipos de Atividades</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <br /> 
            <div class="records_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->
 <!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Novo Tipo de Atividade</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="descri">Descrição</label>
                    <input type="text" id="descri" class="form-control"/>
                </div>
  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Adicionar Tipos de Atividades</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->
<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Atualizar</h4>
            </div>
            <div class="modal-body">
 
                <div class="form-group">
                    <label for="update_descri">Descrição</label>
                    <input type="text" id="update_descri" class="form-control" />
                </div>
 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Atualizar</button>
                <input type="hidden" id="chvaux" >
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->
<!-- Jquery JS file -->
<script type="text/javascript" src="../../lib/jquery-3.2.0.min.js"></script>
 
<!-- Bootstrap JS file -->
<script type="text/javascript" src="../../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 
<!-- Custom JS file -->
<script type="text/javascript" src="script.js"></script>
 
</body>
</html>