<!DOCTYPE html>
  <html>
      <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="script.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

        <style>
        form {
/* Uniquement centrer le formulaire sur la page */
        margin: 0 auto;
        width: 400px;
/* Encadré pour voir les limites du formulaire */
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
        }
        label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
        display: inline-block;
        width: 90px;
        text-align: right;
        }
        </style>
      </head>

        <body>
            <form id="contact" method="post" action="form.php">
            <p><label for="nom">Nom :</label>
              <input type="text" id="nom" name="nom" tabindex="1" /></p>
            <p><label for="email">Email :</label>
              <input type="text" id="email" name="email" tabindex="2" /></p>
            <p><label for="sujet">Sujet :</label>
              <input type="text" id="sujet" name="sujet" tabindex="3"/></p>
            <p><label for="message">Message :</label>
              <textarea id="message" name="message" tabindex="4" cols="50" rows="8"></textarea></p>

              <div style="text-align:center;">
                <a href="form.php" target="form.php">
                  <input type="submit" name="envoi" value=" Envoyer " /></a></div>
            </form>
        </body>


    </html>
