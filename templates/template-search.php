<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Recherche client</title>
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

        a {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <main>
        <form action="/clients/recherche" method="POST">
            <h1>
                <b>
                Formulaire
                </b>
            </h1>
            <h2>Recherche d'un client</h2>

            <div>
                <input type="text" name="nom" value="" placeholder="Entrer le nom">
                <br>

                <input type='submit' name='actualiser' id='actualiser' value='Recherche'>
            </div>
        </form>

        <a href="/clients">Retourner à la liste</a>
    </main>
</body>

</html>