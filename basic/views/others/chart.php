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
										
										<div id="myChart" style="width: 100%;height: 500px;margin: 0 auto;"></div>

									</div>
								</div>
							</div>							
							
						</div>
					</div>
                </div>
                
                <?php $this->beginBlock('myJs');?> 
                    <script src="../userapp/js/echarts.min.js"></script>
                    <script>                   
                        $(document).ready(function() {	        
                                var datatable;
                                dealData();
                            });	      	     																																																										
                        
                        var fuck = [];
                        for(var i = 0; i < 15; i ++){
                            fuck.push(Math.floor(Math.random()*3000));
                        }			
                        var myDate = [];
                        var myHours = (new Date()).getHours();
                        var myMinutes = (new Date()).getMinutes();
                        var mySeconds = (new Date()).getSeconds();
                        for(var i = 0; i < 15; i ++){
                            var code = 0;
                            var code1 = 0;
                            if(mySeconds < 1){
                                mySeconds = mySeconds + 60 - 2;
                                code = 1;
                            }else{
                                mySeconds -= 2;
                            }
                            if(code == 1){
                                if(myMinutes == 0){
                                    myMinutes = 59;
                                    code1 = 1;
                                }						
                                else
                                    myMinutes -= 1;
                            }
                            if(code1 == 1){
                                if(myHours == 0){
                                    myHours = 23;						
                                }						
                                else
                                    myHours -= 1;
                            }
                            var str = myHours + ':' + myMinutes + ':' + mySeconds;				
                            myDate.unshift(str);
                        }
                        
                        var myChart = echarts.init(document.getElementById('myChart'));
                        myChart.setOption({
                            title : {
                                text : '在线人数实时统计'
                            },
                            tooltip : {},
                            legend : {
                                data : ['在线人数']
                            },
                            xAxis: {   
                                name : '时间',                 
                                data: myDate
                            },
                            yAxis: {
                                name : '在线人数'
                            },
                            series: [{
                                name: '在线人数',
                                type: 'line',
                                data: fuck
                            }]
                        });
                        
                        function dealData(){
                            setInterval(function(){
                                fuck.shift();
                                myHours = (new Date()).getHours();
                                myMinutes = (new Date()).getMinutes();
                                mySeconds = (new Date()).getSeconds();
                                myDate.shift();				
                                var str = myHours + ':' + myMinutes + ':' + mySeconds;	
                                fuck.push(Math.floor(Math.random()*3000));	
                                myDate.push(str)
                                myChart.setOption({
                                    series : [{
                                        name : '库存数',
                                        data : fuck	
                                    }],
                                    xAxis: {   
                                        name : '时间',                 
                                        data: myDate
                                },		               
                                })
                            },2000);
                        }	     
                        </script>               
                <?php $this->endBlock();?>