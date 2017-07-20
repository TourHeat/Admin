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
										<h2 id="page">后台数据统计</h2>
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
                                                <label class="col-md-3 control-label">登录次数：18</label>                                                                                            
                                                <label class="col-md-3 control-label">上次登录ip：<?=$ip?></label>    
                                                <label class="col-md-4 control-label">上次登录时间：<?=$last_time?></label>    
                                            </div>
                                        </form>                                        

										<table id="datatable" class="table table-striped table-bordered">
					                      <thead>
					                        <tr>		
                                                <th>统计</th>			                          	
												<th>图片</th>
												<th>对讲</th>
                                                <th>活跃用户</th>
                                                <th>新用户</th>
                                                <th>管理员</th>																																															
					                        </tr>
					                      </thead>					
					
					                      <tbody>
                                            <tr>
                                                <td>总数</td>
                                                <td>1024</td>
                                                <td>4096</td>
                                                <td>512</td>
                                                <td>64</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>今日</td>
                                                <td>44</td>
                                                <td>32</td>
                                                <td>346</td>
                                                <td>13</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>昨日</td>
                                                <td>56</td>
                                                <td>1456</td>
                                                <td>33</td>
                                                <td>12</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>本周</td>
                                                <td>256</td>
                                                <td>2048</td>
                                                <td>256</td>
                                                <td>32</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>本月</td>
                                                <td>1024</td>
                                                <td>4096</td>
                                                <td>512</td>
                                                <td>64</td>
                                                <td>2</td>
                                            </tr>
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
                    </style>                    
                <?php $this->endBlock();?>

                <?php $this->beginBlock('myJs');?>
                    <script src="../userapp/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                    <script src="../userapp/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                    <script>
                        $(document).ready(function() {	                                    
                            var datatable = $('#datatable').dataTable({
                                lengthChange : false,
                                info : false,
                                paging : false,
                                ordering : false,
                                searching : false
                            });
                        });
                    </script>

                <?php $this->endBlock();?>