<style>
    
    body {
    font-family: sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #23242a;
    }
  .kontainer-input {
    position: relative;
    width: 380px;
    height: 420px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
  }
  .kontainer-input::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380PX;
    height: 420PX;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
  }
  .kontainer-input::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380PX;
    height: 420PX;
    background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
  }
  
@keyframes animate
{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
}
.form{
    position: absolute;
    inset: 2px;
    border-radius: 8px;
    background: #28292d;
    z-index: 10;
    padding: 50px 40px;
    display: flex;
    flex-direction: column;
}
.form h2{
    color: #45f3ff;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
}
.inputBox{
    position: relative;
    width: 300px;
    margin-top: 35px;
}
.inputBox input{
    position: relative;
    width: 100%;
    padding 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: 0.05em;
    z-index: 10;
}
.inputBox span{
    position: absolute;
    left: 0;
    padding: 20px 10px 10px;
    font-size: 1em;
    color: #8f8f8f;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span{
    color: #45f3ff;
    transform: translateX(-10px) translateY(-34px);
    font-size: 0.75em;
}
.inputBox i {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px; /* Ensure this line ends with a semicolon */
    background: #45f3ff;
    border-radius: 4px;
    transition: height 0.5s; /* Specify the property being transitioned */
    pointer-events: none;
    z-index: 9;
}

.inputBox input:valid ~ i,
.inputBox input:focus ~ i {
    height: 44px; /* Increased height on valid or focused input */
}


  /* input[type="text"],
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
  } */
</style>

<div class="kontainer-input">
  <div class="form">
  <h2>Tambah User</h2>


    <form action="<?= base_url() ?>daftar/simpan" method="post">
        <div class="inputBox">
          <input type="text" name="username">
          <span>Username</span>
          <i></i>
        </div>

        <div class="inputBox">
          <input type="password" name="password">
          <span>Password</span>
          <i></i>
        </div>
        <br><br>
        <div class="button">
        <input type="submit" value="Simpan">
        </div>
    </form>
    
  </div>
</div>