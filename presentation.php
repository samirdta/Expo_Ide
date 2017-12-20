<!DOCTYPE HTML>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="style/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" />

</head>

<body>
    <header>
        <h1>Exposé Brackets vs Codelite</h1>

        <img id="brackets" src="brackets.png" style="border-radius: 15%; align: center; float: left;" />
        <img id="codelite" src="codelite.jpeg" style="border-radius: 15%; align: center; float: right;" />
    </header>
            <p>Dans cet exposé nous allons vous présenter Brackets et Codelite et finir par les comparée <span> Nous sommes le <?php echo date ('d/m/Y') ?> ,  Il est </span>
    <span id="hours">0</span>:<span id="minutes">0</span>:<span id="seconds">0</span></p>
        
    <p>Les IDE ou integrated development environment sont fait pour facilité le travail d'un développeur qui veut développer un programme informatique, il comporte un éditeur de texte que l'on peut parfaire grace a des plugins notamment.Conçernant les IDE il en existe deux type les "lègers" ex: Brackets qui vont prendre en charge des langages tel que Html ou JavaScript et ceux réservé aux langages "lourds" ex: codelite qui vont etre plus configuré pour faire du php c++ java. Dans un premier temps, nous allons parler de Brackets puis Codelite
    en énumérant les fonctionnalités, les avantages et inconvénients et enfin finir par comparer les deux.</p>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(ajaxcall, 1000);
        });

        function ajaxcall() {
            $.ajax({
                url: 'gettime.php',
                success: function(data) {
                    data = data.split(':');
                    $('#hours').html(data[0]);
                    $('#minutes').html(data[1]);
                    $('#seconds').html(data[2]);
                }
            });
        }

    </script>
   
</body>

</html>
