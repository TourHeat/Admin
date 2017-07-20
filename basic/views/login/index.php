<!DOCTYPE html>
<html lang="zh-CN" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>途聆对讲移动应用后台管理系统</title>                                
        <link rel="stylesheet" href="../userapp/css/reset.css">
        <link rel="stylesheet" href="../userapp/css/style.css">
		<link rel="stylesheet" href="../userapp/css/supersized.css"> 
		<style>
			a{
				display : inline-block;
				text-decoration : none;
				margin-top : 10px;
			}
		</style>				  
    </head>

    <body>

        <div class="page-container">
            <h1>途聆对讲移动应用后台管理系统</h1>
            <form action="" method="post" id="submit">
                <input type="text" name="user_name" id="username" placeholder="用户名" required>
				<input type="password" name="pass_word" id="password" placeholder="密码" maxlength="20" required> 
				<input type="hidden" name="_csrf" id="_csrf" value="<?=$csrfToken?>" />                          
                <button id="submit" type="submit">登录</button>                
			</form>
			<a href="http://127.0.0.1/basic/web/index.php?r=login/register">注册</a>
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
						$('#submit').submit(function(){															
							// else if(password.value.length > 20){
							// 	alert('密码长度不能超过20');
							// 	return false;
							// }								
							username = document.getElementById('username').value;
							password = md5(document.getElementById('password').value);														
							$.post('http://127.0.0.1/basic/web/index.php?r=login/check',
								{
									_username : username,
									_password : password,
									_csrf : document.getElementById('_csrf').value
								},
								function(data){
									data = JSON.parse(data);
									if(data.status == 0){
										localStorage.setItem('username',username);							
										location.href = 'http://127.0.0.1/basic/web/index.php?r=home/index';
									}else if(data.status == 1){										
										alert('用户名或密码错误!');
									}
								}
							);
							return false;																																					
						});						
					})();	
					
				</script>
    </body>
</html>

