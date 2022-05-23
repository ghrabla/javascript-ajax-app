<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD_Ajax</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <div class="container mt-5" id="cont">
        <h1 class="alert-info text-center mb-5 p-3">CRUD Using Ajax</h1>
        <div class="row">
            <form class="col-sm-5" id="myForm">
                <h3 class="alert-warning text-center p-2">Add/Update</h3>
                <div>
                    <input type="text" class="form-control" style="display: none" id="stuId">
                    <label for="nameId" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameId">
                </div>
                <div>
                    <label for="emailId" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailId">
                </div>
                <div>
                    <label for="passwordId" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordId">
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary" id="btnAdd">Save</button>
                </div>
                <div id="msg"></div>
            </form>

            <div class="col-sm-7 text">
                <h3 class="alert-warning p-2 text-center">Show Student Information</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
    <script src="js/ajax.js"></script>
</body>

</html>