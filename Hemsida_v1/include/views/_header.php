<header>
	<!-- HEADER TITLE -->
	<div id="header-title-container" class="top-menu-click-function">
		<h1>Välkommen till vårdvalet.se!</h1>
		<p class="header-text">Din hjälp till att hitta rätt vård.</p>
	</div>
	
	<!-- HEADER MENU-->
	<div id="header-menu-container" >
		<a href="faq-redirect.php" class="header-text top-menu-click-function">Vanliga frågor</a>
		<a href="faq.php" class="header-text .top-menu-click-function">Vården i Sverige</a>
		<input type="text" class="header-text" placeholder="Hittar du inte det du söker?"/>
		<input type="submit" value="Sök!" class="header-text"/>
	</div>

	<!-- HEADER LOGIN FORM -->
	<div id="header-login-container" class="header-text">
		<form name="topLoginForm" onsubmit="return validate()" method="POST" action="login_process.php">
			<label for="name">Användarnamn:</label>
			<input type="text" name="name" class="header-login-form-input">
			<label for="password">Lösenord:</label>			
			<input type="password" name="password" class="header-login-form-input">
			<input type="submit" value="Logga in" class="header-button"/>

		</form>
		<form name="topRegisterForm" onsubmit="return validate()" method="POST" action="registerForm.php">
			<input type="submit" value="Registrera" class="header-button"/>	
		</form>
	</div>
</header>