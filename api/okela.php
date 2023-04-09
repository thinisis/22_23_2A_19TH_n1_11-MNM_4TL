Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp



















Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp




Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp



Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp

Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp
Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp


Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp


Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp


Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp


Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp


Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp

Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@PhatTran79 
makalele5108
/
Websitephp
Public
Fork your own copy of makalele5108/Websitephp
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Websitephp/public/index.php /

ibrahim demirkiran jezusjes
Latest commit f452cee on Feb 29, 2016
 History
 0 contributors
51 lines (47 sloc)  1.28 KB
 

<?php
/**
 * Created by PhpStorm.
 * User: Ibrahim
 * Date: 2/18/2016
 * Time: 12:58 PM
 */
if (isset($_POST['submit'])){
    if(isset($_POST['startQuantity'])&& isset($_POST['interest'])&& isset($_POST['years'])){
        $start_quantity = $_POST['startQuantity'];
        $interest = $_POST['interest'];
        $years = $_POST['years'];

        $money = $start_quantity;
        $calInt = 100 + $interest;

        for($x=0; $x<$years; $x++){
            $money = $money/100 * $calInt;
            $money = round($money,2 );
            echo "<ul><li>$money</li></ul>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div id="hola"   class="col-lg-6">
<h1>Compound interest calculator</h1>
    <h2>Welkom</h2>
</div>
<div class ="col-lg-12">
<form action="index.php" method="POST">
    <input type="text" name="startQuantity" placeholder="fill in quantity">
    <br /> <br />
    <input type="text" name="interest" placeholder="fill in interest">
    <br /> <br />
    <input type="text" name="years" placeholder="fill in years of saving">
    <br /> <br />
    <input type="submit" name="submit" value="Check">
</form>
</div>
</body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Websitephp/index.php at master · makalele5108/Websitephp