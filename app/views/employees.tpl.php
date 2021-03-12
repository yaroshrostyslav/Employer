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
                        <a class="nav-link " href="/employee/new">New Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/employee">Employees</a>
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
        <h2><?=$data['title']?></h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>fName</th>
                    <th>sName</th>
                    <th>pName</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($data['employees'] as $key => $user):?>
                    <tr>
                        <td><?=$user['id']?></td>
                        <td><?=$user['fname']?></td>
                        <td><?=$user['sname']?></td>
                        <td><?=$user['pname']?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
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