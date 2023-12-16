<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register Display</title>
    <style>
        .contact-list {
            margin: 50px;
        }
    </style>
</head>

<body>
    <div class="contact-list">
        <h1>Register List</h1>
        <?php
        include 'connection.php';

        $limit = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        // Retrieve contact data from the database with pagination
        $sql = "SELECT * FROM resister LIMIT $offset, $limit";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<table class="table">';
                echo '  <tr>
                      <th>id</th>  
                      <th>Username</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Confirm_Password</th>
                      <th>Action</th>
                      
                </tr>';
            
            
            
                while ($data= mysqli_fetch_assoc($result)) {
                echo '<tr>';

                   echo '<td>'.$data["id"].  '</td>';
                   echo '<td>' .$data["Username"]. '</td>';
                   echo '<td>' .$data['Email']. '</td>';
                   echo '<td>' .$data['Password']. '</td>';
                   echo '<td>'.$data['Confirm_Password'].  '</td>';
                   
                   
                    echo '<td>';
                        echo '<a href="update.php?name=' .$data['id'] . '" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>';
                        echo ' <a href="delete.php?name=' .$data['id'] . '" class="btn btn-danger" onclick="return checkDelete()"><i class="fa-solid fa-trash-can-arrow-up"></a>';
                    echo '</td>';
                echo '</tr>';
                }
            echo '</table>';



//  Pagination links -->

$total_records = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM resister"));
            $total_pages = ceil($total_records / $limit);

            echo '<nav aria-label="Page navigation">';
            echo '<ul class="pagination">';
            if ($page > 1) {
                echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">Previous</a></li>';
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
            }

            if ($page < $total_pages) {
                echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Next</a></li>';
            }
            echo '</ul>';
            echo '</nav>';
        } else {
            echo "No contact data available.";
        }
        ?>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script>
        function checkDelete() {
            return confirm('Are you sure you want to delete this contact?');
        }
        // swal({
        //   title: "Good job!",
        //   text: "You clicked the button!",
        //   icon: "success",
        //   button: "Aww yiss!",
        // });

        


    </script>
</body>

</html>
