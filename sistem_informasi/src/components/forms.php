<!-- src/components/forms.php -->

<!-- Formulir Pencarian -->
<form action="search.php" method="GET" class="search-form">
    <input type="text" name="query" placeholder="Search..." required>
    <button type="submit">Search</button>
</form>

<!-- Formulir Login -->
<form action="login.php" method="POST" class="login-form">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form>
