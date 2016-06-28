<?php
if(filter_input(INPUT_POST, 'rega')){
$_SESSION['login'] = htmlspecialchars($_POST['login']);
$_SESSION['pass'] = htmlspecialchars($_POST['pass']);
$_COOCKIES['about'] = htmlspecialchars($_POST['about']);	
}
		echo '<form action="" method="post">
		<input name="login" type="text" placeholder="Логин" maxlength="10" /><br>
		<input name="pass" type="password" placeholder="Пароль" maxlength="10" /><br>		
		<textarea name="about" type="text" placeholder="О себе" maxlength="100" /></textarea><br>
		<input type="submit" name="rega" value="Регистрация"/>
		</form><br>';
		echo 'Вывод информации:<hr>Логин: <b>'.$_SESSION['login'].'</b><br> Пароль: <b>'.$_SESSION['pass'].'</b><br> О себе:<b>'.$_COOCKIES['about'].'</b>';