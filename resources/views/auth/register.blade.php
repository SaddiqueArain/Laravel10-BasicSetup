<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
.back-color{
background-color: rgb(97, 97, 97);
}
</style>
<body style="background-color: #0F172A">


<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card back-color text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center" style="background-color: #1E293B">

                        <div class=" mt-md-4">

                            <h2 class="fw-bold mb-2 text-uppercase" style="color: #6698B8">Welcome</h2>
                            <form action="{{ route('user.store') }}" method="POST" style="color: #6698B8">
                                @csrf
                                <div class="form-outline form-white mb-4">
                                    <label class=" mb-2" for="name">Name</label>
                                    <input type="text" id="name" class="form-control" style="background-color: #0F172A;color: #6698B8"/>
                                </div>

                            <div class="form-outline form-white mb-4">
                                <label class=" mb-2" for="email">Email</label>
                                <input type="email" id="email" class="form-control" style="background-color: #0F172A;color: #6698B8"/>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label mb-2" for="password">Password</label>
                                <input type="password" id="password" class="form-control " style="background-color: #0F172A;color: #6698B8"/>
                            </div>

                            <button class="btn  btn-sm px-5" type="submit" style="background-color: #38BDF8;color: black">Register</button>


</form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
