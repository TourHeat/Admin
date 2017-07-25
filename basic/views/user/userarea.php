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
										<h2 id="page">当前活跃用户全国分布</h2>
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
                    <script src="../userapp/js/china.js"></script>
                    <script>                                           
                        var myChart = echarts.init(document.getElementById('myChart'));                                                  
                        
                        myChart.showLoading();

                        $.get('../userapp/users.json', function (weiboData) {
                            myChart.hideLoading();

                            weiboData = weiboData.map(function (serieData, idx) {
                                var px = serieData[0] / 1000;
                                var py = serieData[1] / 1000;
                                var res = [[px, py]];

                                for (var i = 2; i < serieData.length; i += 2) {
                                    var dx = serieData[i] / 1000;
                                    var dy = serieData[i + 1] / 1000;
                                    var x = px + dx;
                                    var y = py + dy;
                                    res.push([x.toFixed(2), y.toFixed(2), 1]);

                                    px = x;
                                    py = y;
                                }
                                return res;
                            });
                            myChart.setOption(option = {
                                backgroundColor: '#404a59',
                                title : {
                                    text: '途聆对讲数据点亮中国',
                                    subtext: 'From ThinkGIS',
                                    sublink: 'http://www.thinkgis.cn/public/sina',
                                    left: 'center',
                                    top: 'top',
                                    textStyle: {
                                        color: '#fff'
                                    }
                                },
                                tooltip: {},
                                legend: {
                                    left: 'left',
                                    data: ['强', '中', '弱'],
                                    textStyle: {
                                        color: '#ccc'
                                    }
                                },
                                geo: {
                                    map: 'china',
                                    label: {
                                        emphasis: {
                                            show: false
                                        }
                                    },
                                    itemStyle: {
                                        normal: {
                                            areaColor: '#323c48',
                                            borderColor: '#111'
                                        },
                                        emphasis: {
                                            areaColor: '#2a333d'
                                        }
                                    }
                                },
                                series: [{
                                    name: '弱',
                                    type: 'scatter',
                                    coordinateSystem: 'geo',
                                    symbolSize: 1,
                                    large: true,
                                    itemStyle: {
                                        normal: {
                                            shadowBlur: 2,
                                            shadowColor: 'rgba(37, 140, 249, 0.8)',
                                            color: 'rgba(37, 140, 249, 0.8)'
                                        }
                                    },
                                    data: weiboData[0]
                                }, {
                                    name: '中',
                                    type: 'scatter',
                                    coordinateSystem: 'geo',
                                    symbolSize: 1,
                                    large: true,
                                    itemStyle: {
                                        normal: {
                                            shadowBlur: 2,
                                            shadowColor: 'rgba(14, 241, 242, 0.8)',
                                            color: 'rgba(14, 241, 242, 0.8)'
                                        }
                                    },
                                    data: weiboData[1]
                                }, {
                                    name: '强',
                                    type: 'scatter',
                                    coordinateSystem: 'geo',
                                    symbolSize: 1,
                                    large: true,
                                    itemStyle: {
                                        normal: {
                                            shadowBlur: 2,
                                            shadowColor: 'rgba(255, 255, 255, 0.8)',
                                            color: 'rgba(255, 255, 255, 0.8)'
                                        }
                                    },
                                    data: weiboData[2]
                                }]
                            });
                        });
                                              
                    </script>
                <?php $this->endBlock();?>