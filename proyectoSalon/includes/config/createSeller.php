<?php
    include "incluedes/header.php";

    require "/home/parzival/Documentos/proyectoSalon/includes/config/conectandodb.php";

    $db = conectandodb();
    
    var_dump($_POST);

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $querry = "Insert into seller (name, email, phone) values ('$name', '$email', '$phone'):";

    $response = mysqli_query($db, $querry);

    if($response){
        echo "Seller Created!!";
    }else{
        echo"Seller Not Cresated!";
    }
?>


<section>
    <h2>Seller Form</h2>
    <div>
        <form action="createSeller.php" METHOD = "post">
            <fieldset>
                <legend>Fill All Form Fields</legend>
                <div>
                    <label for="id">Seller ID</label>
                    <input type="number" id="id" name="id"> 
                </div>
                <div>
                    <label for="name">Seller Name</label>
                    <input type="text" id="name" name= "name">
                </div>
                <div>
                    <label for="email">Seller Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="phone">Seller Phone</label>
                    <input type="tell" id="phone" name="phone">
                </div>
                <div>
                    <button type="submuit">Create</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>


<?php 
   include "includes/footer.php";
?>




