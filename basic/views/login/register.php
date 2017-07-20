<!DOCTYPE html>
<html lang="zh-CN" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>途聆对讲移动应用后台管理系统</title>                                
        <link rel="stylesheet" href="../userapp/css/reset.css">
        <link rel="stylesheet" href="../userapp/css/style.css">
		<link rel="stylesheet" href="../userapp/css/supersized.css"> 				  
    </head>

    <body>

        <div class="page-container">
            <h1>途聆对讲移动应用后台管理系统注册</h1>
            <form action="" method="post" id="submit">
                <input type="text" name="user_name" id="username" placeholder="用户名" required>
                <input type="text" name="phone" id="phone" placeholder="电话号码" maxlength="15" required> 
				<input type="password" name="pass_word" id="password" placeholder="密码" maxlength="15" required> 
				<input type="hidden" name="_csrf" id="_csrf" value="<?=$csrfToken?>" />                          
                <button id="submit" type="submit">注册</button>                
            </form>
        </div>

        <!-- Javascript -->
        <script src="../userapp/js/jquery-1.12.4.js"></script>
        <script src="../userapp/js/supersized.3.2.7.min.js"></script>
        <script src="../userapp/js/supersized-init.js"></script>
		<script src="../userapp/js/scripts.js"></script>
		<script src="../userapp/js/md5.min.js"></script>
		<script>
					
					(function(){
						var username;
						var password;
                        var phone;
						$('#submit').submit(function(){															
							// else if(password.value.length > 20){
							// 	alert('密码长度不能超过20');
							// 	return false;
							// }								
							username = document.getElementById('username').value;
                            phone = document.getElementById('phone').value;
							password = md5(document.getElementById('password').value);														
							$.post('http://127.0.0.1/basic/web/index.php?r=login/registercheck',
								{
									_username : username,
									_password : password,
                                    _phone : phone,
									_csrf : document.getElementById('_csrf').value
								},
								function(data){
									data = JSON.parse(data);
									if(data.status == 0){								
                                        alert('注册成功！');									
										location.href = 'http://127.0.0.1/basic/web/index.php?r=login/index';
									}else if(data.status == 1){										
										alert('用户名、电话重复或不符合规范!');
									}
								}
							);
							return false;																																					
						});						
					})();	
					
				</script>
    </body>
</html>

