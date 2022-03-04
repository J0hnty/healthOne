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


switch ($params[1]) {

    case 'admin':
        if ($_SESSION['user']->role == 'admin') {
            $titleSuffix = ' | Admin';
            //var_dump($_POST);
            if (isset($_POST['submit'])) {
                switch ($_POST['operation']) {
                    case 'edit':
                        //$titleSuffix = ' | Editproduct';
                        //header('Location: /editProduct');
                        //include_once '../Templates/editProduct.php';
                        break;
                    case 'delete':
                        $delete = deleteProduct($_POST['submit']);
                        include_once '../Templates/admin.php';
                        break;
                    default:
                        if ($_POST['submit'] == 'add') {
                            $titleSuffix = ' | newProduct';
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
        } else {
            echo 'je bent een member';
        }


        break;

    case 'addProduct':
        if (isset($_POST['addProduct'])) {
            $name = $_POST['name'];
            $serialNumber = $_POST['serialnumber'];
            $description = $_POST['description'];
            $color = $_POST['color'];
            $brand = $_POST['brand'];
            $categoryNumber = $_POST['category'];
            $picture = $_FILES['picture'];
            $pictureName = $_FILES['picture']['name'];
            $pictureTempName = $_FILES['picture']['tmp_name'];
            //var_dump($_POST);
            $newProduct = createProduct($name, $serialNumber, $description, $color, $pictureName, $pictureTempName, $brand, $categoryNumber);
            //dit upload de file naar mijn project img folder
            //move_uploaded_file($pictureTempName, 'img/'.$pictureName);
            echo $pictureName;
            echo $pictureTempName;
        }
            include_once '../Templates/addProduct.php';
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
                    //echo $message;
                    include_once '../Templates/login.php';
                    break;
                case 'FAILT!':
                    $message = 'je hebt foute informatie ingevult.';
                    //echo $message;
                    include_once '../Templates/login.php';
                    break;
                case 'GEACHCEPTEERD':
                    $message = 'je hebt je informatie goed ingevult.';
                    if ($_SESSION['user']->role == 'admin') {
                        header('Location: /home');
                    }else {
                        header('Location: /home');
                    }
                    break;
            }
        }else {
            include_once '../Templates/login.php';
        }

        if (isset($_POST['verzend'])) {

            $newUser = makeUser($_POST['username'], $_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_POST['pass']);

        }

        break;

    case 'memberProfile':
        $titleSuffix=' | Profile';
        if(isset($_POST['editInfo'])) {
            include_once '../Templates/editInfo.php';
        }else {
            include_once '../Templates/memberProfile.php';
        }
        if(isset($_POST['updateInfo'])) {
            if(!empty($_POST['old-password1']) && !empty($_POST['old-password2']) && !empty($_POST['new-password']) && $_POST['old-password1'] == $_POST['old-password2']) {
                //var_dump($_POST);
                if ($_SESSION['user']->password == $_POST['old-password1']){
                    changePass($_POST['new-password'], $_SESSION['user']->id);
                    $message = 'uw wachtwoord is geupdated';
                }else {
                    $message = 'oops er is iets fout gegaan';
                }
            }
        }
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
        $reviews=getReviews();

        if (isset($_POST['verzenden'])) {
           // var_dump($_POST);
            saveReview($_POST['userName'], $_POST['title'], $_POST['review']);
            header("Location: /product/$product->id");
        } else {
            $titleSuffix = ' | Review';
            include_once "../Templates/review.php";
        }

        break;

    case 'home':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    default:
        $titleSuffix = ' | Fout';
        include_once "../Templates/fout.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
