<style>
    body {
    font-family: sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('https://codetheworld.io/wp-content/uploads/2024/09/bg-1.jpeg') no-repeat center center fixed;
  }
  
  .kontainer-input {
    background: rgba(255, 255, 255, 0.38);
    padding: 50px;
    width: 400px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    text-align: center;
  }
  
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    background: rgba(50, 50, 50, 1);
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }

  input[type="text"]:hover,
  input[type="password"]:hover {
    background-color: rgb(119,136,153);
  }
  
  input[type="submit"] {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  
  input[type="submit"]:hover {
    background-color: rgb(119,136,153);
  }
  
  p {
    margin-top: 15px;
  }
  
  a {
    color:  rgb(138,43,226);
    text-decoration: none;
  }
  
  a:hover {
    text-decoration: underline;
    color: rgb(0,255,255)
    ;
  }
</style>

<div class="kontainer-input">

<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>

<h1><i class="bi bi-person-circle"></i>Halaman Login</h1>

<form action="<?= base_url() ?>login/verifikasi" method="POST">
    
    <input type="text" placeholder="masukkan username" name="username" >
    <br><br>
    
    <input type="password" placeholder="masukkan password" name="password">
    <br><br>
    
    <input type="submit" value="LOGIN">
    
</form>


<p>Belum punya akun ? <a href="<?= base_url() ?>daftar">Daftar</a></p>
</div>