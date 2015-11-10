<div class="modal fade" id="ModalPagar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa fa-line-chart"></i> Pagar Factura N° 666</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post">
					
					<div class="form-group">
                        <label class="col-md-3 control-label"> Cuenta Bancaria</label>
                        <div class="col-md-6">
                            <select class="form-control">
                                <option>6454 4535 56 6578 75</option>
                                <option>6454 4535 56 6578 75</option>
                                <option>6454 4535 56 6578 75</option>
                                <option>6454 4535 56 6578 75</option>
                                <option>6454 4535 56 6578 75</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Fecha</label>
                        <div class="col-md-6">
                            <div class="input-group date" id="datepicker-disabled-past" data-date-format="dd-mm-yyyy" data-date-start-date="Date.default">
                                <input type="text" class="form-control" placeholder="Select Date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Número de Deposito</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="N°">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Monto Bs</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Tipo Operación</label>
                        <div class="col-md-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="option1" checked="">
                                    Depósito o Transferencia del mismo banco.
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="option2">
                                    Tranferencia desde otros Bancos.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cemail" class="control-label col-md-3">Correo electrónico</label>
                        <div class="col-lg-6">
                            <input class="form-control" type="email" placeholder="ejample@dominio.com"
                                    ng-class="{'error':formulario.i_correo.$invalid && formulario.i_correo.$touched}" name="i_correo" ng-model="formData.i_correo">
                            
                            <div class="col-lg-10" ng-show="formulario.i_correo.$dirty && formulario.i_correo.$invalid">
                                <p class="help-block text-danger" ng-show="formulario.i_correo.$error.email">Verifique el formato del correo: Ejemplo: ejample@dominio.com</p>
                            </div>
                        </div>                                      
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Monto en Letra</label>
                        <div class="col-md-6">
                            <textarea class="form-control" placeholder="Textarea" rows="5"></textarea>
                        </div>
                    </div>

                    <center>
						<button type="submit" class="btn btn-success m-r-5 m-b-5">
							Pagar
						</button>
					</center>

                </form>
			
			</div>
		</div>
	</div>
</div>