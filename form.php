<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    
    
    <form action="thanks.php" method="post">
<div> 
    
    <label for="nom"> Nom : </label>
    <input type="text" id="nom" name="user_lastname" required >

</div>
<div> 
    
    <label for="prenom"> Prénom : </label>
    <input type="text" id="prenom" name="user_name" required >

</div>
<div>

    <label for="courriel"> Courriel :</label>
    <input type="email" id="courriel" name="user_email" required >

</div>
<div>
   
    <label for="phone">Numéro de téléphone</label>
    <input type="tel" name="user_phone" id="phone" required >


</div>
<div>

    <label for="theme">Choisissez un thème : </label>
    <select name="theme" required >
        <option value="jeux vidéos">Jeux vidéos</option> 
        <option value="cinéma">Cinéma</option> 
        <option value="sport">Sports</option> 
        <option value="divers">Divers</option> 
    </select>
    
</div>
<div>

    <label for="message">Message :</label>
    <textarea name="user_message" id="message" required ></textarea>

</div>
<div class="button">

    <button type="submit">Envoyer votre message</button>

</div>

</form>

</body>
</html>
