<div class="right_col" role="main">
					<div class="">
						<div class="page-title">
							<div class="title_left">
								<h3> </h3>
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="row">
							
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2 id="page">系统推送</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li>
												<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">																																															
										
										<form class="form-horizontal form-label-left">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">标题</label>
												<div class="col-md-7">
													<input type="text" id="title" maxlength="20" class="form-control" placeholder="标题" />
												</div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">内容</label>
												<div class="col-md-7">
													<textarea id="text" maxlength="255" class="form-control" placeholder="内容" rows="5" cols="20"></textarea>
												</div>
											</div>
											
											<div class="form-group" id="area_div">
                                                <label class="col-md-3 control-label">范围</label>
												<div class="col-md-3">
													<select class="form-control" id="area">
														<option value="clear" selected = "selected"></opyion>
														<option value="all">所有人</option>
														<option value="others">所有领队以及司机</option>
														<option value="others">所有领队</option>
														<option value="point">指定用户</option>
													</select>
												</div>
                                            </div>

                                            <div class="form-group">
												<div class="col-md-4 col-md-offset-6">
													<button type="button" id="pushed" class="btn btn-info">推送</button>													
													<button type="reset" id="reset_form" class="btn btn-dark">重置</button>
												</div>																															
											</div>

                                        </form>

									</div>
								</div>
							</div>							
							
						</div>
					</div>
				</div>
				
				<?php $this->beginBlock('myJs');?>
					<script>
						$(document).ready(function(){
							appendUsername();
						});
						$('#area').change(function(){
							appendUsername();
						});	
						function appendUsername(){
							if($('#area').val() == 'point'){
								$('#area_div').after(`
									<div id="add" class="form-group">
										<label class="col-md-3 control-label">用户名</label>
										<div class="col-md-7">
											<input id="text" maxlength="20" class="form-control" placeholder="用户名">
										</div>
									</div>
								`);
							}else{
								if($('#add')){
									$('#add').remove();
								}
							}
						}			
					</script>
				<?php $this->endBlock();?>