<?php 
    include 'includes/header.php'; 
    require "/home/parzival/Documentos/proyectoSalon/includes/config/conectandodb.php";

    $db = conectandodb();

    $querry_sellers = "Select id, name from seller;"; 

    $sellers = mysqli($db, $querry_sellers);

    var_dump($sellers);

    echo $sellers;

    var_dump($_POST);

    $id = $_POST["id"];
    $title = $_POST["title"];
    $price = $_POST["priece"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $rooms = $_POST["rooms"];
    $wc = $_POST["wc"];
    $garage = $_POST["garage"];
    $timestamp = $_POST["timestamp"];
    $seller = $_POST["seller"];
?>

    <section>
        <h2>Propierties Form</h2>
        <div>
            <form action="crearPropiedades.php" method="post" enctype= "multipart/form-data">
                <fieldset>
                    <legend>Fill All Form FIelds</legend>
                    <div>
                        <label for="id">ID</label>
                        <input type="number" name="id" id="id">
                    </div>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Propierty Title">
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price">
                    </div>
                    <div>
                        <label for="image">Image</label>
                        <input type="image" src="" alt="" id="image" name="image">
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div>
                        <label for="wc">WC</label>
                        <input type="number" name="wc" id="wc">
                    </div>
                    <div>
                        <label for="garage">Garage</label>
                        <input type="date" name="garage" id="garage">
                    </div>
                    <div>
                        <label for="timestamp">TimeStamp</label>
                        <input type="date" name="timestamp" id="timestamp">
                    </div>
                    <div>
                        <label for="id_seller">Seller</label>
                        <select type="id_seller" id="id_seller">
                            <?php while($sellers = mysqli_fecth_assoc ($sellers)) : ?>
                                <option value="<?php echo $seller['id'];?>" <?php echo $sellers['name'];?></option>
                            <?php endwhile;?>
                        </select>    
                    </div>
                    <div>
                        <button type="submit">Create a New Propierty</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>

<?php
    include 'includes/footer.php';
?>


















