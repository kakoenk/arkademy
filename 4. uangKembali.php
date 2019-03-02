<!Doctype html>
<html lang="en">
    <head>
        <title>Hitung jumlah kembalian uang</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    td{
        text-align:center;
    }
    </style>
    </head>

    <body>
        <div class="jumbotron">
            <center><h1>Menghitung jumlah kembalian</h1></center>
        </div>
        <div class="container">
             <center>
            <div class="row">
                <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
                </div>
                <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
                    <form method="POST" action="" role="form">
                    <div class="form-group">
                    
                        <label>Masukan jumlah bayar : </label>
                        <input type="text" name="bayar" class="form-control"><br><br>
                    
                        <label>Masukan total belanja : </label>
                        <input type="text" name="total" class="form-control"><br>
                    
                         <br>
                        <label>Total kembalian : </label>
                        <?php 
                        $jumlah=$_POST['bayar'] - $_POST['total'];
                        echo "<br><input type=text value='$jumlah' name=uang>";
                        ?><br>

                        
                
                    </div>
                      
                </div>
                <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
                </div>
            </div>
            </center>
            

            <center>
            <div class="row">
                <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
                </div>
                <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
                    <?php
                    if (!isset($_POST['uang'])){
                         $uang = 0;    
                    }else{
                        $uang = $_POST["uang"];
                    }
                    
                    if ($uang < 100){
                        echo "klink 'inputkan' 2 kali";
                    }else {
                         echo "
                             <p>
                         <table class = 'table' border=0>
                         <tr>
                             <th>
                                 Lembar
                             </th>
                             <th>
                                 Pecahan
                             </th>
                         </tr>

                     ";

                        
                        if ( $uang >= 50000){
                        $nilai_uang = floor(($uang / 50000));
                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td><img src='https://upload.wikimedia.org/wikipedia/id/c/c6/50.000Rp-front.jpg' class='img-rounded' width='100' height='50'></td>
                             </tr>
                         
                        ";
                        }
                        $uang = $uang % 50000;
                        if ( $uang >= 20000 && $uang < 500000){
                        $nilai_uang = floor(($uang / 20000));
                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td><img src='http://4.bp.blogspot.com/-nKor_m6NxA0/USPRPjXUiNI/AAAAAAAAARE/X9m5V31P4yo/s1600/20rb.png.jpg' class='img-rounded' width='100' height='50'></td>
                             </tr>
                         
                        ";
                        }
                        $uang = $uang % 20000;
                        if ( $uang >= 10000 && $uang < 20000){
                        $nilai_uang = floor(($uang / 10000));
                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td><img src='https://lh5.googleusercontent.com/_kvgc2tcTPRQ/TWo2kl30iLI/AAAAAAAACQg/plnJcEzVDZM/10000_old.jpg' class='img-rounded' width='100' height='50'></td>
                             </tr>
                         
                        ";
                        }
                        $uang = $uang % 10000;
                        if ( $uang >= 5000 && $uang < 10000){
                        $nilai_uang = floor(($uang / 5000));
                        echo "
                         <tr>
                             <td>$nilai_uang</td>
                             <td><img src='https://i.colnect.net/f/280/108/5000-Rupiah-back.jpg' class='img-rounded' width='100' height='50'></td>
                             </tr>
                         
                        ";
                        }
                        $uang = $uang % 5000;
                        if ( $uang >= 2000 && $uang < 5000){
                            $nilai_uang = floor(($uang / 2000));
                            echo "
                             <tr>
                                 <td>$nilai_uang</td>
                                 <td><img src='http://4.bp.blogspot.com/-_GkTfxC0ObM/TaZ6svvIffI/AAAAAAAAADI/s4bhAtUuWMA/s1600/2+rb+333333.jpg' class='img-rounded' width='100' height='50'></td>
                             </tr>
                             ";
                        }
                        $uang = $uang % 2000;
                        if ( $uang >= 1000 && $uang < 2000){
                            $nilai_uang = floor(($uang / 1000));
                            echo "
                             <tr>
                                 <td>$nilai_uang</td>
                                 <td><img src='https://assets-a1.kompasiana.com/statics/files/14095041891468062752.jpg' class='img-rounded' width='100' height='50'></td>
                             </tr>
                             ";
                        }
                        $uang = $uang % 1000;
                        if ( $uang >= 500 && $uang < 1000){
                            $nilai_uang = floor(($uang / 500));
                            echo "
                             <tr>
                                 <td>$nilai_uang</td>
                                 <td><img src='https://ecs7.tokopedia.net/img/cache/700/product-1/2016/3/7/7835941/7835941_39a9b1af-264a-40a2-a036-454937fcbf0a.jpg' class='img-rounded' width='100' height='50'></td>
                             </tr>
                             ";
                        }
        
                        echo "</table>";
                    }
                    
                    ?><input type="submit" value="inputkan" class="btn btn-default">
                </div><br>
                 
                <div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
                </div>
            </div>
        </div>
        </center>
 </form>
    </div>
</html>