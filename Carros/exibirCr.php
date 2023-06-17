<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Exibição de Carros</title>
</head>
<body>

    <style>
        body{
            background-color: #545d67;
        }

        .menu2{
            background-color: white;
        }

        a{
            text-decoration: none;
            color: #fff;
        }

    </style>

    <div class="menu2 px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Lista para Exibição de Carros</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <fieldset>

        <?php 
            include "../database.php";

            $sql = "SELECT ID, modelo, ano FROM carro";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "ID: " . $row["ID"]. " Modelo: " . $row["modelo"]. " Ano: " . $row["ano"] . "<br>";
                }
            }

            else{
                echo "Nenhum resultado encontrado!";
            }

            $conn->close();
        ?>
    
    </fieldset>

    

</body>
</html>