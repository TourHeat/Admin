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
										<h2 id="page">用户消息发送方式</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li>
												<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">																																															
										
                                        <div id="myChart" style="width: 49%;height: 500px;display:inline-block;"></div>
                                        <div id="myChart1" style="width: 49%;height: 500px;display:inline-block;"></div>

									</div>
								</div>
                            </div>	
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2 id="page">用户活跃度趋势（月）</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li>
												<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">																																															
										
                                        <div id="myChart2" style="width: 100%;height: 500px;margin: 0 auto;"></div>                                        

									</div>
								</div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2 id="page">模块使用情况</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li>
												<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">																																															
										
                                        <div id="myChart3" style="width: 49%;height: 500px;display:inline-block;"></div> 
                                        <div id="myChart4" style="width: 49%;height: 500px;display:inline-block;"></div>                                       

									</div>
								</div>
                            </div>
							
						</div>
					</div>
                </div>
                
                <?php $this->beginBlock('myJs');?> 
                    <script src="../userapp/js/echarts.min.js"></script>
                    <script>                                           
                        var myChart = echarts.init(document.getElementById('myChart'));
                        var myChart1 = echarts.init(document.getElementById('myChart1'));
                        myChart.setOption({
                            title : {
                                text : '用户消息发送方式',
                                x : 'center'
                            },
                            tooltip : {},
                            legend : {
                                data : ['人数'],
                                left : 'left'
                            },
                            xAxis: {   
                                name : '方式',                 
                                data : ['图像','文字','对讲']
                            },
                            yAxis: {
                                name : '人数'
                            },
                            series: [{
                                name : '人数',
                                type : 'bar',
                                data : ['1024','4096','8192']
                            }]
                        });  
                        myChart1.setOption({
                            title : {
                                text : '用户消息发送方式',                                
                                x:'center'
                            },
                            tooltip : {
                                 trigger: 'item',
                                 formatter: "{a} <br/>{b} : {c} ({d}%)"
                            },
                            legend : {
                                data : ['图像','文字','对讲'],
                                orient : 'vertical',
                                left : 'left'
                            },                            
                            series: [{
                                name : '人数',
                                type : 'pie',
                                radius : '55%',
                                center : ['50%','60%'],
                                data : [
                                    {value : 1024, name : '图像'},
                                    {value : 4096, name : '文字'},
                                    {value : 8192, name : '对讲'} 
                                ],
                                itemStyle: {
                                    emphasis: {
                                        shadowBlur: 10,
                                        shadowOffsetX: 0,
                                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                                    }
                                }                                   
                            }]
                        });                                                	     
                    
                        var myChart2 = echarts.init(document.getElementById('myChart2'));
                        myChart2.setOption({
                            title : {
                                text : '用户活跃度趋势',
                                x : 'center'
                            },
                            tooltip : {
                                trigger: 'axis'                                
                            },
                            legend : {
                                data : ['注册用户人数','活跃用户人数'],
                                left : 'left'                               
                            },
                            xAxis: {   
                                name : '月份',                 
                                data : ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月']
                            },
                            yAxis: {
                                name : '人数'
                            },
                            series: [
                                {
                                    name : '注册用户人数',
                                    type : 'line',
                                    data : ['1000','2590','5680','7780','13090','16900','20300','29000','30219','32176','34167','37908'],
                                    markLine: {
                                        data: [
                                            {type: 'average', name: '平均值'}
                                        ]
                                    }
                                },
                                {
                                    name : '活跃用户人数',
                                    type : 'line',
                                    data : ['988','2190','5080','6780','10090','12900','17300','28000','29219','30176','30167','32908'],
                                    markLine: {
                                        data: [
                                            {type: 'average', name: '平均值'}
                                        ]
                                    }
                                }
                            ]
                        });

                        var myChart3 = echarts.init(document.getElementById('myChart3'));
                        myChart3.setOption({
                            title : {
                                text : '各模块使用情况',
                                x : 'center'
                            },
                            tooltip : {},
                            legend : {
                                data : ['次数'],
                                left : 'left'
                            },
                            xAxis: {   
                                name : '方式',                 
                                data : ['对讲模块','路书模块','发现模块','权限模块','部落模块','分享模块']
                            },
                            yAxis: {
                                name : '次数'
                            },
                            series: [{
                                name : '次数',
                                type : 'bar',
                                data : ['20038','8192','4096','450','5099','1090']
                            }]
                        }); 
                        var myChart4 = echarts.init(document.getElementById('myChart4'));
                        myChart4.setOption({
                            title : {
                                text : '各模块使用情况', 
                                x : 'center'                                                               
                            },
                            tooltip : {
                                 trigger: 'item',
                                 formatter: "{a} <br/>{b} : {c} ({d}%)"
                            },
                            legend : {
                                data : ['对讲模块','路书模块','发现模块','权限模块','部落模块','分享模块'],
                                orient : 'vertical',
                                left : 'left'
                            },                            
                            series: [{
                                name : '次数',
                                type : 'pie',
                                radius : '55%',
                                center : ['50%','60%'],
                                data : [
                                    {value : 20038, name : '对讲模块'},
                                    {value : 8192, name : '路书模块'},
                                    {value : 4096, name : '发现模块'},
                                    {value : 450, name : '权限模块'},
                                    {value : 5099, name : '部落模块'},
                                    {value : 1090, name : '分享模块'} 
                                ],
                                itemStyle: {
                                    emphasis: {
                                        shadowBlur: 10,
                                        shadowOffsetX: 0,
                                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                                    }
                                }                                   
                            }]
                        });
                    </script>
                <?php $this->endBlock();?>