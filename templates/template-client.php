<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Une activité</title>
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

        /* form {
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 3% 5%;
            box-shadow: 5px 5px 10px rgb(211, 211, 211);
            border-radius: 20px;
        } */

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
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Téléphone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($clients as $client) {
                echo "<tr>
                    <td>" . $client["idClient"] . "</td>
                    <td>" . strtoupper($client["nom"]) . "</td>
                    <td>" . ucfirst($client["prenom"]) . "</td>
                    <td>" . $client["email"] . "</td>
                    <td>" . wordwrap($client["telephone"],2," ",1) . "</td>
            ";
            }
            ?>
        </tbody>
    </table>
    <?php
    // echo "<table>";
    // echo
    // "<tr>
    // <th>#</th>
    // <th>Nom</th>
    // <th>Prénom</th>
    // <th>Email</th>
    // <th>Tel</th>


    // </tr>";
    // foreach ($clients as $client) {
    //     echo "
    //     <tr>
    //     <td>" . $client["idClient"] . "</td>
    //     <td>" . $client["nom"] ."</td>
    //     <td>" . $client["prenom"] . "</td>
    //     <td>" . $client["email"] . "</td>
    //     <td>" . $client["telephone"] . "</td>
    //     </tr>";
    // }
    // echo "</table>";
    ?>
</body>

</html>