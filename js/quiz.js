function showQuiz() {
	$("#content").html(`
				<div class="col-md-12">
					<div class="form-group">
						<div class="container-fluid">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h3><span class="label label-warning" id="qid">1</span> Колко искаш да ти е заплатата?</h3>
									</div>
									<div class="modal-body">
										<div class="quiz" id="quiz" data-toggle="buttons">
											
											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="1" value="1" type="radio"> Под 2000 лева
											</label>

											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="1" value="2" type="radio">над 2000 лева
											</label>

										</div>
									</div>
								</div>
							</div>
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h3><span class="label label-warning" id="qid">2</span> Колко добре знаеш математеика?</h3>
									</div>
									<div class="modal-body">
										<div class="quiz" id="quiz" data-toggle="buttons">
											
											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="2" value="1" type="radio"> По-зле от второкласник
											</label>

											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="2" value="2" type="radio">Знам добре материала до 7<sup>-ми</sup> клас
											</label>


											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="2" value="2" type="radio">Знам перфектно материала до 7<sup>-ми</sup> клас
											</label>


											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="2" value="2" type="radio">Знам добре материала до 12<sup>-ти</sup> клас
											</label>


											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="2" value="2" type="radio">Знам перфектно материала до 12<sup>-ти</sup> клас
											</label>


											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="2" value="2" type="radio">Знам добре материала от университета
											</label>


											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="2" value="2" type="radio">Знам перфектно материала от университета
											</label>

										</div>
									</div>
								</div>
							</div>
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h3><span class="label label-warning" id="qid">3</span> Имащ ли интерес към компютрите?</h3>
									</div>
									<div class="modal-body">
										<div class="quiz" id="quiz" data-toggle="buttons">
											
											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="3" value="1" type="radio"> Да
											</label>

											<label class="element-animation1 btn btn-lg btn-primary btn-block">
												<span class="btn-label">
													<i class="fa fa-caret-right" aria-hidden="true"></i>
												</span>
												<input name="3" value="2" type="radio"> Не
											</label>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<button class="btn btn-raised btn-success">Виж резултата</button>
				</div>
	`);	
}
