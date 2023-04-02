<?php 
    include_once 'header.php';
    ?>
<link rel="stylesheet" href="/css/styles-login.css">

<div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="{% url 'loginsystem' %}">
        <div class="user-box">
          <input type="text" name="username" required="">
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required="">
          <label>Password</label>
        </div>
          <div class="incorrect-password">
          </div>
        <button class="submit-btn" type="submit">Login</button>
    </form>
</div>

</body>
</html>

<?php 
    include_once 'footer.php';
    ?>

