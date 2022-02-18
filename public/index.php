<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Contact.php';
require '../Modules/Review.php';
require '../Modules/Login.php';
require '../Modules/Database.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

session_start();
//var_dump($_SESSION);


switch ($params[1]) {
    case 'admin':
        if ($_SESSION['user']->role == 'admin') {
            $titleSuffix=' | Admin';
            var_dump($_POST);
            if (isset($_POST['submit'])) {
                //je kan producten verwijderen!!! :D:
                //ben nu bezig met producten te maken. lukt niet 14-1-2022
                switch ($_POST['operation']) {
                    case 'edit':
                        $titleSuffix=' | Editproduct';
                        var_dump($_POST['operation']);
                        include_once '../Templates/editProduct.php';
                        break;
                    case 'delete':
                        $titleSuffix=' | Deleteproduct';
                        var_dump($_POST['operation']);
                        include_once '../Templates/deleteProduct.php';
                        break;
                    default:
                        if($_POST['submit'] == 'add') {
                            //het leid hier naar toe maar doet niet
                            var_dump($_POST['submit']);
                            $titleSuffix=' | newProduct';
                            include_once '../Templates/addProduct.php';
                            header("Location: addProduct");
                        } else {
                            include_once '../Templates/admin.php';
                        }
                        break;
                }
            } else {
                include_once '../Templates/admin.php';
            }
        }else {
            echo 'je bent een member';
        }


        break;

    case 'addProduct':
        if (isset($_POST['addProduct'])) { 
            var_dump($_POST);
        }
        break;

    case 'login':
        $titleSuffix=' | Login';
        if (isset($_POST['submit'])) {
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $result = checkLogin($mail, $pass);
            //var_dump($result);
            switch ($result) {
                case 'EMAIL_WRONG':
                    $message = 'Je jebt geen email ingevult probeer het opnieuw.';
                    echo $message;
                    include_once '../Templates/login.php';
                    break;
                case 'FAILT!':
                    $message = 'je hebt foute informatie ingevult.';
                    echo $message;
                    include_once '../Templates/login.php';
                    break;
                case 'GEACHCEPTEERD':
                    $message = 'je hebt je informatie goed ingevult.';
                    if ($_SESSION['user']->role == 'admin') {
                        header('Location: /admin');
                    }else {
                        echo 'jappie daapie';
                        header('Location: /memberProfile');
                    }
                    break;
            }
        }else {
            include_once '../Templates/login.php';
        }

        if (isset($_POST['verzend'])) {
            $newUser = makeUser();

        }

        break;

    case 'memberProfile':
        $titleSuffix=' | Profile';
        include_once "../Templates/memberProfile.php";
        break;

    case 'logout':
        $titleSuffix=' | Logout';
        include_once "../Templates/logout.php";
        break;

    case 'contact':
        $titleSuffix=' | Contact';
        $contacts = getOpeningsTijden();
        include_once "../Templates/contact.php";
        break;

    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;

    case 'category':
        $titleSuffix = ' | Category';
        if (isset($_GET['id'])) {
            $categoryId = $_GET['id'];
            $products = getProducts($categoryId);
            $join = getAllProducts();
            include_once "../Templates/products.php";
        } else {
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }
        break;

    case 'product':
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $titleSuffix = ' | ' . $product->name;
            $reviews=getReviews($productId);
            include_once "../Templates/product.php";
        } else {
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }

        break;

    case 'edit':
        include_once 'Templates/editProduct.php';
        echo 'hoi';

        break;

    case 'review':
        $id=$_GET['id'];
        $product=getProduct($id);
        $name=getCategoryName($id);
        $reviews=getReviews();

        if (isset($_POST['verzenden'])) {
           // var_dump($_POST);
            saveReview($_POST['userName'], $_POST['title'], $_POST['review']);
            include_once "../Templates/product.php";
        } else {
            $titleSuffix = ' | Review';
            include_once "../Templates/review.php";
        }

        break;

    default:
        $titleSuffix = ' | Fout';
        include_once "../Templates/fout.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
