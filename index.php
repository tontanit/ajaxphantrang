<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type='text/javascript' src='jquery-3.5.1.min.js'></script>
    <script>

        var bientoancuc = 0;
        $(document).ready(function(){
           
            $('#xemthem').click(function(){
                bientoancuc = bientoancuc + 1;

                $.get('phantrang.php',{trang: bientoancuc},function(data){
                $('#danhsach').append(data);


                });

            });

        });
    
    
    </script>
</head>
<body> 
    <div id="danhsach"></div>
    <div style="cursor: pointer" id="xemthem">Xem them</div>
</body>
</html>