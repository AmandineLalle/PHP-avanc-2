<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="thanks.php"  method="post">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name" required="required">
        </div>
        <div>
            <label  for="prenom">Prénom :</label>
            <input  type="text"  id="prenom"  name="user_prenom" required="required">
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email" required="required">
        </div>
        <div>
            <select name="user_topic" required="required">
                <option value="">Que concerne votre problème ?</option>
                <option value="abonnement">Mon abonnement</option>
                <option value="factures">Mes factures</option>
                <option value="autres">Autres</option>
            </select>
        </div>
        <div>
            <label  for='number'> Téléphone :</label>
            <input  type='telephone' id='phone=' name='user_phone' required="required">
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message" required="required"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>
