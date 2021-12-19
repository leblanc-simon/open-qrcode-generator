<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Générateur de QRCode</title>
        <meta name="description" content="Générer le QR-Code correspondant à votre texte">
        <link rel="shortcut icon" href="./favicon.png">
        <style>
            html, body {
                display: flex;
                flex-direction: column;
                height: 100vh;
                margin: 0;
                padding: 0;
                font-family: Verdana;
                background: #202124;
                color: #e8eaed;
            }
            * {
                box-sizing: border-box;
            }
            h1 {
                text-align: center
            }
            article {
                display: flex;
                flex: 1;
                width: 80rem;
                max-width: 90%;
                flex-direction: column;
                margin: 0 auto 5rem;
                text-align: center;
            }
            p {
                width: 100%;
                height: 100%;
                text-align: center;
                margin: 0 0 1rem 0;
                padding: 0;
            }
            img {
                height: 100%;
                width: 100%;
                max-width: 30rem;
            }
            a {
                color: inherit;
            }
            form {
                display: flex;
                flex-direction: column;
                flex: 1;
                position: relative;
            }
            label {
                position: absolute;
                top: 2.2rem;
                left: 0.7rem;
                color: #202124;
            }
            textarea {
                flex: 1;
                margin: 1.5rem 0;
                border: 1px solid #8ab4f8;
                border-radius: 0.5rem;
                padding: 0.5rem
            }
            textarea:not(:placeholder-shown) + label, textarea:focus + label  {
                top: 0;
                color: #e8eaed;
            }
            button {
                padding: 0.5rem;
                border: 0;
                border-radius: 0.5rem;
                background: #8ab4f8;
                cursor: pointer;
            }
            footer {
                padding: 0.5rem;
                width: 80rem;
                max-width: 90%;
                margin: 0 auto;
                text-align: center;
                font-size: 0.8rem;
            }
            .error {
                color: #d84039;
            }
        </style>
    </head>

    <body>
        <header>
            <h1>Générateur de QRCode</h1>
        </header>
