<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$data['title']?></title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/employee/new">New Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/employee">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/employee/search">Search Employee</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <main>
        <div class="py-5 text-center">
        </div>
        <div class="row g-3">
            <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                <h4 class="mb-3"><?=$data['title']?></h4>
                <form class="needs-validation" action="/employee/add" method="post">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="fName" class="form-label">fName</label>
                            <input type="text" class="form-control" id="fName" name="fName" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="sName" class="form-label">sName</label>
                            <input type="text" class="form-control" id="sName" name="sName" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="pName" class="form-label">pName</label>
                            <input type="text" class="form-control" id="pName" name="pName" required>
                        </div>
                    </div>
                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="newUser">Create</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2021 </p>
    </footer>
</div>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/form-validation.js"></script>
</body>
</html>
