<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="form1" onsubmit="return mySubmit()">
<input type="number" id="a" name="a"> + <input type="number" id="b" name="b"><button>=</button>
<!-- 注意: button預設為submit，而非button -->
<input type="text" id="c" disabled="disabled">
<!-- disabled: 不可輸入 -->
</form>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    // return false: 不能送出
    function mySubmit(){
        // 用serialize()一定要在前面a和b加上name(行10)
        $.post('a0406-03-form-ajax-api.php', $(document.form1).serialize(), function(data){
            console.log(data);
            $('#c').val(data.c); 
        }, 'json');
        return false;
    }

    // function mySubmit(){
    //     $.post('a0406-03-form-ajax-api.php', {
    //         // java script的寫法(行22)，同jQuery(行24)
    //         a:document.querySelector('#a').value,
    //         // jQuery的寫法(行24)，同java script(行22)
    //         b:$('#b').val()
    //         }, function(data){
    //         console.log(data);
    //         $('#c').val(data.c);
    //     }, 'json');
    //     return false;
    // }
</script>
</body>
</html>