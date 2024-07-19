<style>
    .resultbox{
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 90px;
        transform: translate(-50%, -50%);
        font-weight: bolder;
    }
</style>
<div class="resultbox">
<?php
function operations(){
    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];
    switch ($_POST['dropdown']){
        case "Addition":
            $sum = $input1 + $input2;
            return $sum;
            break;

        case "Subtraction":
            $sub = $input1 - $input2;
            return $sub;
            break;

        case "Multiplication":
            $mul = $input1 * $input2;
            return $mul;
            break;

        case "Division":
            $div = $input1 / $input2;
            return $div;
            break;
        case "Modulos":
            $mod = $input1 % $input2;
            return $mod;
            break;
        case "Square":
            $sqrt = $input1 ** $input2;
            return $sqrt;
            break;
    }

}
echo round(operations());
?>
<br> <button><a href="http://localhost/phpcourse/calc/calculator.html" style="font-size: 30px;">BACK</a></button>

</div>