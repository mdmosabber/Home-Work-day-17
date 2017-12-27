<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Practice Day17</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php
                    echo '<h2>'.'Full Name Showing'.'</h2>';
                    $result= '';
                if(isset($_POST['btn'])){
                    require_once 'FullName.php';
                    $fullName = new FullName();
                    $result = $fullName->makeFullName($_POST['first_name'], $_POST['last_name']);
                }
                ?>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>First Name</th>
                            <td><input type="text" name="first_name"></td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><input type="text" name="last_name"> </td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td><input type="text" name="full_name" value="<?php echo $result ?>"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="btn" value="Submit"></td>
                        </tr>
                    </table>
                </form>
            </div> <!--COL-4 END HERE-->
            <div class="col-4">
                <?php
                    echo '<h2>'.'Calculator'.'</h2>';
                      $show = '';
                    if(isset($_POST['btn1'])){
                        require_once'FullName.php';

                        $fullName = new FullName();
                       $show = $fullName->myCalculator($_POST);
                    }
                ?>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>First Number</th>
                            <td><input type="text" name="first_number" value="<?php echo $_POST['first_number']?>"></td>
                        </tr>
                        <tr>
                            <th>Last Number</th>
                            <td><input type="text" name="last_number" value="<?php echo $_POST['last_number']?>"> </td>
                        </tr>
                        <tr>
                            <th>Result</th>
                            <td><input type="text" name="result" value="<?php echo $show ?> "></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input type="submit" name="btn1" value="+">
                                <input type="submit" name="btn1" value="-">
                                <input type="submit" name="btn1" value="*">
                                <input type="submit" name="btn1" value="/">
                                <input type="submit" name="btn1" value="%">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-4">
                <?php
                    echo '<h2>'.'Starting minimum value to maximum '.'</h2>';

                   if(isset($_POST['submit_btn'])){
                        require_once 'FullName.php';
                        $fullName = new FullName();
                        $fullName->startingValue($_POST['start_number'],$_POST['end_number']);
                   }
                ?>
                <form action="" method="post">
                <table>
                    <tr>
                        <th>Starting Number</th>
                        <td><input type="text" name="start_number"></td>
                    </tr>
                    <tr>
                        <th>Ending Number</th>
                        <td><input type="text" name="end_number"></td>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <td><input type="text" name="number_show" value="  "></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="submit_btn" value="submit"></td>
                    </tr>
                </table>
            </form>
            </div>
        </div><!--ROW END HERE-->

        <div class="row">
            <div class="col-4">
                <?php
                echo '<h2>'.'Starting maximum value to minimum '.'</h2>';

                if(isset($_POST['submit_btn1'])){
                    require_once 'FullName.php';
                    $fullName = new FullName();
                    $fullName->maximumToMinimum($_POST['start_number'], $_POST['end_number']);
                }
                ?>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>Maximum Number</th>
                            <td><input type="text" name="start_number"></td>
                        </tr>
                        <tr>
                            <th>Minimum Number</th>
                            <td><input type="text" name="end_number"></td>
                        </tr>
                        <tr>
                            <th>Result</th>
                            <td><input type="text" name="number_show" value=""></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="submit_btn1" value="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        <div class="col-4">
            <?php
            echo '<h2>'.'Odd Number '.'</h2>';

            if(isset($_POST['submit_btn2'])){
                require_once 'FullName.php';
                $fullName = new FullName();
                $fullName->oddNumber($_POST['start_number'], $_POST['end_number']);
            }
            ?>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Minimum Number</th>
                        <td><input type="text" name="start_number"></td>
                    </tr>
                    <tr>
                        <th>Maximum Number</th>
                        <td><input type="text" name="end_number"></td>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <td><input type="text" name="number_show" value=""></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="submit_btn2" value="submit"></td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="col-4">
            <?php
            echo '<h2>'.'Even Number '.'</h2>';
            $x = '';
            if(isset($_POST['submit_btn3'])){
                require_once 'FullName.php';
                $fullName = new FullName();
                $fullName->evenNumber($_POST['start_number'],$_POST['end_number']);
            }
            ?>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Minimum Number</th>
                        <td><input type="text" name="start_number"></td>
                    </tr>
                    <tr>
                        <th>Maximum Number</th>
                        <td><input type="text" name="end_number"></td>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <td><input type="text" name="number_show" value=""></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" name="submit_btn3" value="submit"></td>
                    </tr>
                </table>
            </form>


        </div>
    </div>


    </body>
</html>