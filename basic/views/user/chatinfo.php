<?php
use yii\helpers\Url;
?>

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
										<h2 id="page">在线人数实时统计</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li>
												<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">																																															
										
										<table id="datatable" class="table table-striped table-bordered">
					                      <thead>
					                        <tr>		
                                                <th>发送用户</th>			                          	
												<th>接收用户</th>
												<th>内容</th>
												<th>图像链接</th>
                                                <th>信息类型</th>
                                                <th>发送时间</th>  
                                                <th>操作</th>                                                
					                        </tr>
					                      </thead>					
					
					                      <tbody>
											<?php
												foreach($chat_info as $value){
											?>
													<tr>
														<th><?=$value['from_userid']?></th>
														<th><?=$value['to_userid']?></th>
														<th><?=$value['content']?></th>
                                                        <th><?=$value['imgurl']?></th>
                                                        <th><?=$value['type']?></th>
                                                        <th><?=$value['chatdate']?></th>
														<th style="text-align:center;">
															<a href=<?=Url::to(['user/deletechat','id'=>$value['id']]);?>>删除</a>
															<a href=<?=Url::to(['user/updatechat','id'=>$value['id']]);?>>修改</a>																																
														</th>
													</tr>
											<?php
												}
											?>
					                      </tbody>
					                  </table>

									</div>
								</div>
							</div>							
							
						</div>
					</div>
                </div>
				
				<?php $this->beginBlock('myCss'); ?>
                    <link href="../userapp/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	                <link href="../userapp/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet"> 
                    <style>    
                        tr{
                            cursor: pointer;
						} 
						th a:first-child{
							margin-right: 10px;
						}                                          
                    </style>                    
                <?php $this->endBlock();?>


				<?php $this->beginBlock('myJs');?>
                    <script src="../userapp/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                    <script src="../userapp/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                    <script>
                        $(document).ready(function() {	                                    
                            var datatable = $('#datatable').dataTable();
                        });
                    </script>

                <?php $this->endBlock();?>