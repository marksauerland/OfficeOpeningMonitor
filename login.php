<!--triasRtMonitor by Lukas Röther v3.0-->
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Lukas Röther">
    <meta name="description" content="efa-rtMonitor settings">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>triasRtMonitor - Login</title>
</head>

<body>

    <div class="container">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Bitte melden Sie sich an</p>

                                    <!--<div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>-->
                                    <form action="config.php" method="post">
                                        <div class="form-outline form-white mb-4">
                                            <input autofocus type="password" name="auth" id="typePasswordX" class="form-control form-control-lg" />
                                            <label class="form-label" for="typePasswordX">Password</label>
                                        </div>



                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                    </form>


                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    </div>
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">


        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <span id="trias-brand">OfficeOpeningMonitor</span><br \>
            Version 1<br \>
            <b>&copy; <?php echo date("Y"); ?> Lukas Röther</b><br \>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


</body>

</html>