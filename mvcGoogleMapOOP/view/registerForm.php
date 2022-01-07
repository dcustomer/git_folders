<section>
    <div class="registDiv" id="registDiv">
        <form action="" method="POST" class="registForm" id="registForm">
            <span><p>first name:</p> <input type="text" name="firstName" class="inputField" id="inputField" required></span>
            <span><p>last name:</p> <input type="text" name="lastName" class="inputField" id="inputField" required></span>
            <span><p>email:</p> <input type="email" name="email" class="inputField" id="inputField" required></span>
            <span><p>login:</p> <input type="text" name="login" class="inputField" id="inputField" required></span>
            <span><p>password:</p> <input type="password" name="pass" class="inputField" id="inputField" required></span>
            <span><p>confirm password:</p> <input type="password" name="confPass" class="inputField" id="inputField" required></span>
            <input type="hidden" name="pagename" value="insertUser">
            <input type="submit" name="send" value="register" class="btn">
        </form>
    </div>
</section>