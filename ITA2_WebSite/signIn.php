<div class="loginMain">
    <div class="login-form">
        <h1>Login</h1>
        <div class="head">
            <img alt="" src="images/index/user.png">
        </div>
        <form>
            <input type="text" onblur="if (this.value == '') {this.value = 'Email';}" onfocus="this.value = '';" value="Email" class="text">
            <input type="password" onblur="if (this.value == '') {this.value = 'Password';}" onfocus="this.value = '';" value="Password">
            <div class="submit">
            <input id="btnLoginSubmit" type="submit" value="LOGIN" onclick="return login();">
        </div>	
            <p><a href="#">Forgot Password ?</a></p>
        </form>
    </div>
</div>