<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update activité</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100vh;
        }

        input,
        select,
        button {
            font-family: 'Poppins';
            background: white;
            border: 2px solid rgba(150, 160, 165, 0.2);
            border-radius: 5px;
        }

        input {
            padding: 10px;
        }

        h1 {
            font-size: 1.8vw;
            padding: 0;
            margin: 0;
        }

        h2 {
            font-size: 1.5vw;
            padding: 0;
            margin: 0 0 10% 0;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        form {
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 3% 5%;
            box-shadow: 5px 5px 10px rgb(211, 211, 211);
            border-radius: 20px;
        }

        form div {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 0%;
        }

        #bouton:hover {
            transition: all 0.2s;
            background-color: rgb(166, 199, 199);
            width: 50%;
        }

        #bouton {
            width: 50%;
        }
    </style>
</head>

<body>
    <main>
        <form action="/clients/
        <?php
        foreach ($clients as $client) {
            echo $client["idClient"];
        } ?>" method="POST">
            <h1>
                Formulaire
            </h1>
            <h2>Actualisation du client</h2>

            <div>
                <input type="text" name="nom" value="" placeholder="<?php
                foreach ($clients as $client) {
                    echo $client["nom"];
                } ?>
                "><br>
                <input type="text" name="prenom" value="" placeholder="<?php
                foreach ($clients as $client) {
                    echo $client["prenom"];
                } ?>
                "><br>
                <input type="text" name="email" value="" placeholder="<?php
                foreach ($clients as $client) {
                    echo $client["email"];
                } ?>
                "><br>
                <input type="text" name="telephone" value="" placeholder="<?php
                foreach ($clients as $client) {
                    echo $client["telephone"];
                } ?>
                "><br>

                <input type='hidden' name='_method' value='PUT'>
                <input type='submit' name='actualiser' id='actualiser' value='Actualiser'>
            </div>
        </form>
    </main>
</body>

</html>