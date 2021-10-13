<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bonjour</p>
<div class="formulaire">


    <div class="form__group field" >
        <form action="secret.php" method='post'>
        <input type="password" class="form__field" placeholder="Name" name="mot_de_passe" id='name' required />
        <label for="name" class="form__label">Password</label>
    </form>
      </div>

</div>
    <div class="top"></div>
    <div class="gif"></div>
</body>
</html>



<style>
body {
    background-color: black;
}
.formulaire {
    position: absolute;
     margin: auto;
     top: 0;
     right: 0;
     bottom: 0;
     left: 0;
     width: 300px;
     height: 300px;
}
.top {
    height: 281px;
    width: 350px;
    position: absolute;
    right: 0px;
    top: 0px;
    background-image: url('./OPDX.gif');
    background-repeat:no-repeat;
  background-position:center;
  background-size:contain;
}

.gif {
    height: 150px;
    width: 300px;
    position: absolute;
    left: 0px;
    bottom: 0;
    background-image: url('./Dvergr-rotate.gif');
    background-repeat:no-repeat;
  background-position:center;
  background-size:contain;
}


.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 50%;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 1.3rem;
  color: #fff;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
.form__field::placeholder {
  color: transparent;
}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #9b9b9b;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #0abfec, #3606e0);
  border-image-slice: 1;
}
.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #3506dd;
  font-weight: 700;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}


</style>