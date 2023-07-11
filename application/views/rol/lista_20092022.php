<section class="content-header">
	<form id="exp_excel" style="float:right;padding:0px;margin: 0px;" method="post" action="<?php echo base_url();?>rol/excel/<?php echo $permisos->opc_id?>" onsubmit="return exportar_excel()"  >
        	<input type="submit" value="EXCEL" class="btn btn-success" />
        	<input type="hidden" id="datatodisplay" name="datatodisplay">
       	</form>
      <h1>
        Roles
      </h1>
</section>
<section class="content">
	<div class="box box-solid">
		<div class="box box-body">
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo base_url();?>rol/nuevo" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Nuevo</a>
				</div>	
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<table id="tbl_list" class="table table-bordered table-list table-hover">
						<thead>
							<th>No</th>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Estado</th>
							<th>Acciones</th>
						</thead>
						<tbody>
						<?php 
						$n=0;
						if(!empty($roles)){
							foreach ($roles as $rol) {
								$n++;
								if ($usu_sesion == 1) {
						?>
							<tr>
								<td><?php echo $n?></td>
								<td><?php echo $rol->rol_nombre?></td>
								<td><?php echo $rol->rol_descripcion?></td>
								<td><?php echo $rol->est_descripcion?></td>
								<td align="center">
									<div class="btn-group">
										<?php 
										if($permisos->rop_actualizar){
										?>
										<a href="<?php echo base_url();?>rol/asignar/<?php echo $rol->rol_id?>" class="btn btn-warning"> <span class="fa fa-gear"></span></a>
										<?php
							        	}
										if($permisos->rop_reporte){
										?>
										<button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo base_url();?>rol/visualizar/<?php echo $rol->rol_id?>"><span class="fa fa-eye"></span>
							            </button>
							            <?php 
										}
										if($permisos->rop_actualizar){
										?>
										<a href="<?php echo base_url();?>rol/editar/<?php echo $rol->rol_id?>" class="btn btn-primary"> <span class="fa fa-edit"></span></a>
										<?php 
										}
										if($permisos->rop_eliminar){
										?>
										<a href="<?php echo base_url();?>rol/eliminar/<?php echo $rol->rol_id?>/<?php echo $rol->rol_nombre?>" class="btn btn-danger btn-remove"><span class="fa fa-trash"></span></a>
										<?php 
										}
										?>
									</div>
								</td>
							</tr>
						<?php
							}
						
						if ($usu_sesion != 1 && $rol->rol_id != 1 ) {
						?>
							<tr>
								<td><?php echo $n?></td>
								<td><?php echo $rol->rol_nombre?></td>
								<td><?php echo $rol->rol_descripcion?></td>
								<td><?php echo $rol->est_descripcion?></td>
								<td align="center">
									<div class="btn-group">
										<?php 
										if($permisos->rop_actualizar){
										?>
										<a href="<?php echo base_url();?>rol/asignar/<?php echo $rol->rol_id?>" class="btn btn-warning"> <span class="fa fa-gear"></span></a>
										<?php
							        	}
										if($permisos->rop_reporte){
										?>
										<button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo base_url();?>rol/visualizar/<?php echo $rol->rol_id?>"><span class="fa fa-eye"></span>
							            </button>
							            <?php 
										}
										if($permisos->rop_actualizar){
										?>
										<a href="<?php echo base_url();?>rol/editar/<?php echo $rol->rol_id?>" class="btn btn-primary"> <span class="fa fa-edit"></span></a>
										<?php 
										}
										if($permisos->rop_eliminar){
										?>
										<a href="<?php echo base_url();?>rol/eliminar/<?php echo $rol->rol_id?>/<?php echo $rol->rol_nombre?>" class="btn btn-danger btn-remove"><span class="fa fa-trash"></span></a>
										<?php 
										}
										?>
									</div>
								</td>
							</tr>
						<?php
							}
						}
					}

						
						?>
						</tbody>
					</table>
				</div>	
			</div>
		</div>
	</div>


</section>

<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Rol</h4>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
</div>