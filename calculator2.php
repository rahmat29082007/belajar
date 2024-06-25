<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>

        
    <style>
         body{
            background-color:rgb(163,159,159);
         }

         .maininput{
            font-size:80px;
            color:whitesmoke;
            font-weight:400;
         }

        .calc{

            margin           : auto;
            background-color : black;
            border           : 2px solid whitesmoke;
            width            :25%;
            height           :550px;
            border-radius    :20px;
            box-shadow       :10px 10px 40px;    
        }
        .maininput{
            background-color:black;
            border          :1px solid grey;
            height          : 115px;   
            width           :98.2%;
        }

        .numbtn{
            padding      :30px 35px;
            border-radius:50px;
            font-weight  :600;
            font-size    :X-large;
            background-color:grey;
        }

        .numbtn:hover{
            background-color:rgb(180,178,178);
            color:whitesmoke;
        }

        .calbtn{
            padding      :30px 35px;
            border-radius:50px;
            font-weight  :600;
            font-size    :X-large;
            background-color:orange;
        }

        .calbtn:hover{
            background-color:rgb(211,140,7);
            color:whitesmoke;
        }

        .c{
            padding      :30px 35px;
            border-radius:50px;
            font-weight  :600;
            font-size    :X-large;
            background-color:red;
        }

        .c:hover{
            background-color:rgb(188,16,16); 
            color:whitesmoke;      
        }

        .equal{
            padding      :30px 35px;
            border-radius:50px; 
            font-weight  :600;
            font-size    :X-large;
            background-color:rgb(8,181,8);
        }

        .equal:hover{
            background-color:green;
            color:whitesmoke;
        }


    </style>
    
</head>
<body>
    <!-- html -->
    <div class="calc">
        <form action="" method="post">
            <br>
            
            <input type="text" class="maininput"><br><br>
            <input type="submit" class="numbtn" name="num"value="7">
            <input type="submit" class="numbtn" name="num"value="8">
            <input type="submit" class="numbtn" name="num"value="9">
            <input type="submit" class="calbtn" name="op"value="+"> <br>
            <input type="submit" class="numbtn" name="num"value="4">
            <input type="submit" class="numbtn" name="num"value="5">
            <input type="submit" class="numbtn" name="num"value="6">
            <input type="submit" class="calbtn" name="op"value="-"><br>
            <input type="submit" class="numbtn" name="num"value="1">
            <input type="submit" class="numbtn" name="num"value="2">
            <input type="submit" class="numbtn" name="num"value="3">
            <input type="submit" class="calbtn" name="op"value="*"><br>
            <input type="submit" class="c" name="num"value="c">
            <input type="submit" class="numbtn" name="num"value="0">
            <input type="submit" class="equal" name="equal"value="=">
            <input type="submit" class="calbtn" name="op"value="/">

        </form>
    </div>
</body>
</html>