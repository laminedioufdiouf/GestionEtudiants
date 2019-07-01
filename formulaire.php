

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reservation.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
		<center>
		<h1>Ajouter des etudiants</h1>
<form>
	<fieldset>
		
		<div class="double-input">
        <div class="form-input-container">
				<label for="fname">Matricule:</label>
				<input type="text" name="firstname" id="fname" placeholder="" minlength="3" required/>
			</div><br>
			<div class="form-input-container">
				<label for="fname">Nom:</label>
				<input type="text" name="firstname" id="name" placeholder="" minlength="3" required/>
			</div><br>
			<div class="form-input-container">
				<label for="fname">Prenom:</label>
				<input type="text" name="lastname" id="lname" placeholder="" required/>
		</div>
		<div class="double-input">
			<div class="form-input-container">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required placeholder="" required/>
			</div><br>
			<div class="form-input-container">
				<label for="phone">Tel:</label>
				<input type="Tel" name="phone" id="phone" placeholder="" required/>
            </div><br>
            <div class="form-input-container">
				<label for="phone">Naiss:</label>
				<input type="date" name="phone" id="date" placeholder="" required/>
			</div>
		</div>
	</fieldset>
		<fieldset>
	<p>
        <input type="radio" id="input-type-f" name="type" value="B">
        <label for="input-type-f">Boursier:</label>

        <input type="radio" id="input-type-m" name="type" value="NB">
        <label for="input-type-m">NomBoursier</label>
	</p>
	<p>
        <label for="input-pensin">type</label>
					<select id="input-pension" name="pension">
						<optgroup label="Boursier">
							<option value="fr">demi_bourse:</option>
							<option value="de">boure_entière:</option>
						</optgroup>
					
					</select>
    </p>
	<p>
	<input type="radio" id="input-type-l" name="type1" value="">  
		<label for="input-type-l">Logers:</label>
		<input type="radio" id="input-type-nl" name="type1" value="">  
		<label for="input-type-nl">NomLoger:</label>
		<p>
        <label for="input-adresse">Adresse</label>
		<input type="text" id="input-adresse-a" name="adresse" value="">       
	</p>
		<p>
			<label for="input-batiment">Batiment</label>
			<input type="text" id="input-type-b" name="type" value="">
                
		</p>
	<p>
        <label for="input-chambre">Chambre</label>
		<input type="number" id="input-type-c" name="type" value="">       
	</p>
    </p>
	</fieldset>
	<button type="submit">AJOUTER</button>
			</form>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
  <script src="form.js">
  </script> 
  		</center>   
</body>
</html>
