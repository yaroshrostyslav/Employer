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
                        <a class="nav-link " href="/employee">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/employee/search">Search Employee</a>
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
                <form class="needs-validation"  >
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                </form>
            </div>
            <hr class="my-5">
            <div class="table-responsive" id="result_search" style="display: none;">
                <p>Found: <b><span id="count"></span></b> users</p>
                <table class="table table-striped table-sm">
                    <thead id="list">
                    <tr>
                        <th>ID</th>
                        <th>fName</th>
                        <th>sName</th>
                        <th>pName</th>
                    </tr>

                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2021 </p>
    </footer>
</div>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/form-validation.js"></script>
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
    $('#name').on('input change', function(){
        if ($(this).val().length >= 2){
            $.ajax({
                url: "/employee/find",
                type: "POST",
                data: ({
                    action: 'search_user',
                    value: $(this).val()
                }),
                dataType: "html",
                success: function(result){
                    console.log(result)
                    result = JSON.parse(result);
                    if (result['data'].length !== 0){
                        $('.new').remove();
                        $('#count').text(result['count']);
                        $('#result_search').show();
                        $.each(result['data'], function(a, b){
                            $('#list').append('<tr class="new"><td>'+b['id']+'</td><td>'+b['fname']+'</td><td>'+b['sname']+'</td><td>'+b['pname']+'</td></tr>');
                        });
                    }
                    console.log(result)
                }
            });
        }else{
            $('#result_search').hide();
        }
    });
</script>
</body>
</html>