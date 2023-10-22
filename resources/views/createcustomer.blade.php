<!DOCTYPE html>
<html lang="en">
   @include('layouts.header')
<body>
<div class="container">
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="mt-5 text-primary">Create Customer </h1>
        </div><!-- End Page Title -->

        <!-- General Form Elements -->
        <section class="section mt-5">
            {{-- <div class="row"> --}}
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">

                        <h3 class=" card-title">Create Customer </h2>

                            {{-- required alert --}}
                            
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></li>
                                            
                                        @endforeach

                                    </ul>
                                </div>
                            @endif

                            {{-- alert message --}}



                            <!-- General Form Elements -->
                            <form action="{{ url('create-user-role') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email ID</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option selected> select role</option>
                                            <option>Developer</option>
                                            <option>Manager</option>
                                            <option>HR</option>
                                            <option>Web Designer</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">create Customer</button>
                                        <a href="{{url('goback-listpage')}}" class="btn btn-secondary">Go Back</a>
                                    </div>
                                   
                                </div>

                            </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

            {{-- </div> --}}
        </section>





    </main><!-- End #main -->

   



</div>
</body>
</html>