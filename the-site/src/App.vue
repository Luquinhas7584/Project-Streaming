<template>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <title>Login</title>

    <div class="main-login">
        <div class="left-login">
            <h1>Seus dados estão seguros<br>Confia</h1>
            <img src="./assets/securityn.svg" class="left-login-image" alt="security">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Insira seu usuario">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Insira sua Senha">
                </div>
                <button class="btn-login">Login</button>
                <div class="links">
                    <a href=""><p>Esqueceu a senha?</p></a>
                    <a href=""><p>Ainda nao sou cadastrado</p></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


export default {
name: "App",
components: {

},
data: () => ({
  drawer:false,
  items: [
    { title: "Filmes",
  }
  ]
})
}
</script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Exo:wght@100&display=swap');
body{
    margin: 0;
    font-family: 'Noto Sans' , sans-serif;
    overflow-y: hidden;
    overflow-x: hidden;
}
body *{
    box-sizing: border-box;
}

/*Security*/
.main-login{
    background-image: url(./assets/hacks.png);
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.left-login{
    width: 50vw;
    height:100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
/* Inscreva se*/
.left-login > h1{
    margin-bottom: -60px;
    font-size: 3vw;
    color: white;
    border-color: green solid;
}

.left-login-image{
    width: 35vw;
}

.right-login{
    width: 50vw;
    height:100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-login{
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 35px;
    background: transparent;
    border-radius: 20px;
    box-shadow: 0px 10px 40px rgb(57, 159, 177);

}
/*Login*/
.card-login > h1{
    color: rgb(255, 255, 255);
    border-radius: 20px;
    font-weight: 800;
    margin: 0;
}

.textfield{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px 0px;
}
/*Nome dos input*/
.textfield > input{
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 15px;
    background: transparent;
    color: #fff;
    font-size: 12pt;
    box-shadow: 0px 10px 40px rgb(12, 12, 12);
    outline: none;
    box-sizing: border-box;
}

.textfield > label{
    color: #fff;
    margin-bottom: 10px;
}

.textfield > input::placeholder{
    color: #34808dd8;
}

.btn-login{
    width: 100%;
    padding: 16px 0px;
    margin: 25px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 3px;
    color: #fff;
    background: transparent;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px rgb(57, 159, 177);
}
.btn-login:hover{
    color: aqua;
}

a{
    text-decoration: none;
    color: #fff;
    transition: .25s ease-in-out;
}

a:hover{
    color: #34808dd8;
}

@media only screen and (max-width: 850px){
    .card-login{
        width: 95%;
    }
}

@media only screen and (max-width: 600px){
    .main-login{
        flex-direction: column;
    }
    .left-login > h1{
        display: none;
    }
    .left-login{
        width: 100%;
        height: auto;
    }
    .right-login{
        width: 100%;
        height: auto;
    }
    .left-login-image{
        width: 50vw;
    }
    .card-login{
        width: 90%;

    }
}

</style>
