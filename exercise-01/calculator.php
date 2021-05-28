<?php

    $data = [
        'yearlySalary' => 0,
        'monthlySalary' => 0,
        'yearlyTax' => 0,
        'monthlyTax' => 0,
    ];

    if(isset($_POST['submit'])) {
        if ($_POST['type'] == 'yearly') {
            $data['yearlySalary'] = $_POST['salary'];
            $data['monthlySalary'] = $_POST['salary'] / 12;
        } else {
            $data['yearlySalary'] = $_POST['salary'] * 12;
            $data['monthlySalary'] = $_POST['salary'];
        }

        if($data['yearlySalary'] < 10000){
            $data['yearlyTax'] = 0;
            $data['monthlyTax'] = 0;
            $data['yearlySS'] = 0;
            $data['yearlyAfterTax'] = $data['yearlySalary'];

        } elseif ($data['yearlySalary'] >= 10000 &&
            $data['yearlySalary'] < 25000) {

            $data['yearlyTax'] = $data['yearlySalary']*0.11;
            $data['yearlySS'] = $data['yearlySalary']*0.04;

            $data['yearlyAfterTax'] = $data['yearlySalary'] - $data['yearlyTax']
            - $data['yearlySS'] + $_POST['taxFreeAllowance'];

        } elseif ($data['yearlySalary'] >= 25000 &&
            $data['yearlySalary'] < 50000) {

            $data['yearlyTax'] = $data['yearlySalary']*0.3;
            $data['yearlySS'] = $data['yearlySalary']*0.04;

            $data['yearlyAfterTax'] = $data['yearlySalary'] - $data['yearlyTax']
                - $data['yearlySS'] + $_POST['taxFreeAllowance'];

        } else {
            $data['yearlyTax'] = $data['yearlySalary']*0.45;
            $data['yearlySS'] = $data['yearlySalary']*0.04;

            $data['yearlyAfterTax'] = $data['yearlySalary'] - $data['yearlyTax']
                - $data['yearlySS'] + $_POST['taxFreeAllowance'];
        }

        $data['monthlyTax'] = $data['yearlyTax']/12;
        $data['monthlySS'] = $data['yearlySS']/12;
        $data['monthlyAfterTax'] = $data['yearlyAfterTax']/12;

    }

?>

<form method="post" action="calculator.php">
    <label>Salary</label>
    <input name="salary"><br/>

    <label>Type</label><br/>
    <input type="radio" name="type" value="yearly" checked>
    <label>Yearly</label><br/>
    <input type="radio" name="type" value="monthly">
    <label>Monthly</label><br/>

    <label>Tax Free Allowance</label>
    <input name="taxFreeAllowance"><br/>

    <input type="submit" name="submit">
</form>

<br/>
<br/>
<br/>

<table>
    <thead>
    <tr>
        <th style="border: 1px solid black"></th>
        <th style="border: 1px solid black">Yearly</th>
        <th style="border: 1px solid black">Monthly</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="border: 1px solid black">Total Salary</td>
        <td style="border: 1px solid black">
            <?php if(isset($data['yearlySalary'])){
                echo $data['yearlySalary'];
            } ?>
        </td>
        <td style="border: 1px solid black">
            <?php if(isset($data['monthlySalary'])){
                echo $data['monthlySalary'];
            } ?>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black">Tax Amount</td>
        <td style="border: 1px solid black">
            <?php if(isset($data['yearlyTax'])){
                echo $data['yearlyTax'];
            } ?>
        </td>
        <td style="border: 1px solid black">
            <?php if(isset($data['monthlyTax'])){
                echo $data['monthlyTax'];
            } ?>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black">Social security fee</td>
        <td style="border: 1px solid black">
            <?php if(isset($data['yearlySS'])){
                echo $data['yearlySS'];
            } ?>
        </td>
        <td style="border: 1px solid black"><?php if(isset($data['monthlySS'])){
                echo $data['monthlySS'];
            } ?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black">Salary after tax</td>
        <td style="border: 1px solid black">
            <?php if(isset($data['yearlyAfterTax'])){
                echo $data['yearlyAfterTax'];
            } ?>
        </td>
        <td style="border: 1px solid black">
            <?php if(isset($data['monthlyAfterTax'])){
                echo $data['monthlyAfterTax'];
            } ?>
        </td>
    </tr>

    <tr></tr>
    </tbody>
</table>