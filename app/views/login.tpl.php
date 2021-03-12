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
<div class="container">
    <main>
        <div class="py-5 text-center">
        </div>
        <div class="row g-3">
            <div class="col-md-4" style="margin: 0 auto;">
                <h4 class="mb-3 text-center"><?=$data['title']?></h4>
                <form class="needs-validation" action="user/login" method="post">
                    <div class="row g-3">
                        <div>
                            <label for="login" class="form-label">Email or Phone</label>
                            <input type="text" class="form-control" name="login" required>
                        </div>
                    </div>
                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="auth">Log in</button>
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