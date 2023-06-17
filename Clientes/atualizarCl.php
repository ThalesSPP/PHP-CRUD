<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Atualização de Clientes</title>
</head>
<body>

<style>
        body{
            background-color: #545d67;
        }

        .menu2{
            background-color: white;
        }

        .box-formulario{

            width: 100%;
            align-items: center;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            background-color: #545d67;
            padding: 60px 0;

        }

        .formulario{

            width: 700px;
            background: #545d67;
            padding: 60px 5%;
            text-align: center;

        }

        .formulario span{
            position: relative;
            display: flex;
            margin: 50px 10px;

        }

        /*input Animado*/

        .input-balao-up{
            display: inline-block;
            width: 100%;
            padding: 15px 0 10px 50px;
            font-family: "Open Sans", sans;
            font-weight: 400;
            color: #4C4C4C;
            background: #ffffff;
            border: 0;
            border-radius: 50px;
            outline: 0;
            transition: all .3s ease-in-out;
            box-shadow: 0 13px 8px -8px rgba(0, 0, 0, 0.5);
        }

        .input-balao-up::-webkit-input-placeholder{
            color: #7eba00;
            font-weight: 300;
        }

        .input-balao-up+label{
            display: inline-block;
            position: absolute;
            top: 8px;
            left: 0;
            bottom: 8px;
            padding: 0px 20px;
            color: #7eba00;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(19, 74, 70, 0);
            transition: all .3s ease-in-out;
            border-radius: 30px;
            background: rgba(122, 184, 147, 0);
            height: 33px;
            line-height: 36px;
        }

        .input-balao-up+label:after{
            position: absolute;
            content: "";
            width: 0;
            height: 0;
            top: 100%;
            left: 50%;
            margin-left: -2px;
            border-left: 10px solid transparent;
            border-right: 0px solid transparent;
            border-top: 0px solid rgba(122, 184, 147, 0);
            transition: all .3s ease-in-out;
        }

        .input-balao-up:focus,
        .input-balao-up:active{
            color: #ffffff;
            padding: 15px 0 10px 25px;
            background: #7eba00;
        }

        .input-balao-up:focus::-webkit-input-placeholder,
        .input-balao-up:active::-webkit-input-placeholder{
            color: #ffffff;
        }

        .input-balao-up:focus+label,
        .input-balao-up:active+label{
            color: #fff;
            background: #7eba00;
            left: -32px;
            transform: translateY(-52px);
        }

        .input-balao-up:focus+label:after,
        .input-balao-up:active+label:after{
            border-top: 6px solid #7eba00;
        }

        /*TextArea*/

        .textarea-balao-up{
            display: inline-block;
            width: 100%;
            height: 80px;
            resize: none;
            padding: 15px 0 10px 50px;
            font-family: "Open Sans", sans;
            font-weight: 400;
            color: #4C4C4C;
            background: #ffffff;
            border: 0;
            border-radius: 50px;
            outline: 0;
            transition: all .3s ease-in-out;
            box-shadow: 0 13px 8px -8px rgba(0, 0, 0, 0.5);
        }

        .textarea-balao-up::-webkit-input-placeholder{
            color: #7eba00;
            font-weight: 300;
        }

        .textarea-balao-up+label{
            display: inline-block;
            position: absolute;
            top: 8px;
            left: 0;
            bottom: 8px;
            padding: 0px 20px;
            color: #7eba00;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(19, 74, 70, 0);
            transition: all .3s ease-in-out;
            border-radius: 30px;
            background: rgba(122, 184, 147, 0);
            height: 33px;
            line-height: 36px;
        }

        .textarea-balao-up+label:after{
            position: absolute;
            content: "";
            width: 0;
            height: 0;
            top: 100%;
            left: 50%;
            margin-left: -2px;
            border-left: 10px solid transparent;
            border-right: 0px solid transparent;
            border-top: 0px solid rgba(122, 184, 147, 0);
            transition: all .3s ease-in-out;
        }

        .textarea-balao-up:focus,
        .textarea-balao-up:active{
            color: #ffffff;
            padding: 15px 0 10px 25px;
            background: #7eba00;
        }

        .textarea-balao-up:focus::-webkit-input-placeholder,
        .textarea-balao-up:active::-webkit-input-placeholder{
            color: #ffffff;
        }

        .textarea-balao-up:focus+label,
        .textarea-balao-up:active+label{
            color: #fff;
            background: #7eba00;
            left: -32px;
            transform: translateY(-52px);
        }

        .textarea-balao-up:focus+label:after,
        .textarea-balao-up:active+label:after{
            border-top: 6px solid #7eba00;
        }

        /*Botão*/
        .box-btn{
            width: 100%;
            padding: 0 10px;
            float: left;
        }

        .btn-envia{
            padding: 0.7em 2em;
            cursor: pointer;
            border: none;
            background: #7eba00;
            box-shadow: 0 10px 8px -8px rgba(0, 0, 0, 0.5) !important;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1em;
            color: #fff;
            border-radius: 50px;
        }

        .zoom-shadow{
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shadow, transform;
            transition-property: box-shadow, transform;
        }

        .zoom-shadow:hover,
        .zoom-shadow:focus,
        .zoom-shadow:active{
            box-shadow: 0 13px 8px -8px rgba(0, 0, 0, 0.5);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        a{
            text-decoration: none;
            color: #fff;
        }

    </style>

    <div class="menu2 px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Formulário para Atualização de Clientes</h1>
    </div>

    <div class="box-formulario">
        <div class="formulario">

            <form action="#" method="post">
                <span>
                    <input type="text" class="input-balao-up" id="ID do Cliente" name="ID do Cliente" placeholder="ID do Cliente" autocomplete="off" required="" />
                    <label for="ID do Cliente"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input type="text" class="input-balao-up" id="Nome" name="Nome" placeholder="Nome" autocomplete="off" required="" />
                    <label for="Nome"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <input type="text" class="input-balao-up" id="CPF" name="CPF" placeholder="CPF" autocomplete="off" required="" />
                    <label for="CPF"> <i class="icon icon-info"></i> </label>
                </span>
                <div class="box-btn">

                    <button type="submit" class="btn-envia zoom-shadow">
                        <i class="icon icon-forward-1"> Atualizar Cliente</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>

            <button type="submit" class="btn-envia zoom-shadow">
                <a class="icon icon-forward-1" href="../index.php"> <i>Voltar para a Home Page</i></a>
            </button>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>