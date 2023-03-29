<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>automat</title>
    <link rel="stylesheet" type="text/css" href="styl.css" />
    
</head>
<body>
    <h4> maszyna przyjmuje banknoty tylko 10,20,50 zł <h4>
    <main>
    
    <div id="baton1">
        
        <h1>baton1</h1>
        <h3>id:1<br>cena: 2zł<br>ilość:5</h3>
        <form method="post" action="#">
        <label>kup</label><input type="radio" name="kup"/>
        
        
    </div>
    <div id="baton2">
        <h1>baton2</h1>
        <h3>id:2<br>cena: 2zł<br>ilość:5</h3>
        <form method="post" action="#">
        <label>kup</label><input type="radio" name="kup"/>
        
    </div>
    <div id="baton3">
        <h1>baton3</h1>
        <h3>id:3<br>cena: 2zł<br>ilość:5</h3>
        <form method="post" action="#">
        <label>kup</label><input type="radio" name="kup"/>
        
    </div>
    <div id="baton4">
        <h1>baton4</h1>
        <h3>id:4<br>cena: 2zł<br>ilość:5</h3>
        <form method="post" action="#">
        <label>kup</label><input type="radio" name="kup"/>
        
    </div>
    <div id="baton5">
        <h1>baton5</h1>
        <h3>id:5<br>cena: 2zł<br>ilość:5</h3>
        <form method="post" action="#">
        <label>kup</label><input type="radio" name="kup"/>
        
    </div>
    <div id="baton6">
        <h1>baton6</h1>
        <h3>id:6<br>cena: 2zł<br>ilość:5</h3>
        <form method="post" action="#">
        <label>kup</label><input type="radio" name="kup"/>
    
</form>
    </div>
    </main>
    <div id="serwis"><br>
    <button>serwis</button>

    <?php
        $connect = mysqli_connect('localhost','root','','automat');
        $zapytanie = mysqli_query($connect ,"SELECT * FROM 4gd_automat");
        mysqli_close($connect);
    ?>
    </div>
    <div id="form">
    <form method="post" action="#">
        <h3>ile dano kasy</h3>

    <label>10 zł</label><input type="radio" name="ile dano"/>
    <button onClick="reszta1()">reszta</button>
    <script>
        function reszta1()
        {
            alert("reszta 8zł smacznego! zostały 4 batony");
        }
            
    </script>
    <label>20 zł</label><input type="radio" name="ile dano"/>
    <button onClick="reszta2()">reszta</button>
    <script>
        function reszta2()
        {
            alert("reszta 18zł smacznego! zostały 4 batony");
        }
    </script>
    <label>50 zł</label><input type="radio" name="ile dano"/>
    <button onClick="reszta3()">reszta</button>
    <script>
        function reszta3()
        {
            alert("reszta 48zł smacznego! zostały 4 batony");
        }
    </script>
</form>
    </div>
    
</body>
</html>