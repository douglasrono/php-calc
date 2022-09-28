
<?php 

$result = "";

class calculator

{

    var $a;

    var $b;

    function checkopration($operator)

    {

        switch($operator)

        {

            case '+':

            return $this->a + $this->b;

            break;

            case '-':

            return $this->a - $this->b;

            break;

            case '*':

            return $this->a * $this->b;

            break;

            case '/':

            return $this->a / $this->b;

            break;

            default:

            return "Invalid Operation";

        }   

    }

    function getresult($a, $b, $c)

    {

        $this->a = $a;

        $this->b = $b;

        return $this->checkoperation($c);

    }

}

$cal = new calculator();

if(isset($_POST['submit']))

{   

    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);

}

?>

<form method="post">

<table align="center">

    <tr>

        <td><strong><?php echo $result; ?><strong></td>

    </tr>

    <tr>

        <td>Enter 1st Number</td>

        <td><input type="text" name="n1"></td>

    </tr>

    <tr>

        <td>Enter 2nd Number</td>

        <td><input type="text" name="n2"></td>

    </tr>

    <tr>

        <td>Select Operator</td>

        <td><select name="op">

            <option value="+">+</option>

            <option value="-">-</option>

            <option value="*">*</option>

            <option value="/">/</option>

        </select></td>

    </tr>

    <tr>

        <td></td>

        <td><input type="submit" name="submit" value="                =                "></td>

    </tr>

</table>

</form>
