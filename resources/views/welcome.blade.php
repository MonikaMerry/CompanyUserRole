<!DOCTYPE html>
<html lang="en">
  @include('layouts.header')
<body>
   
    <div class="container mt-5">
         <h1 class="mt-5 mb-5">Company Role</h1>
        <section class="section">
            <div class="row justify-content-md-center">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Customer Lists</h5>

                            {{-- delete lead --}}
                            @if (Session::has('danger'))
                                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                    {{ Session::get('danger') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            {{-- updated lead --}}

                            @if (Session::has('info'))
                                <div class="alert alert-info alert-dismissible fade show mt-2" role="alert">
                                    {{ Session::get('info') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            {{-- created lead --}}

                            @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                    {{ Session::get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ url('/create-user-page') }}">
                                    <button type="button" class="btn btn-success me-md-3">Create Customer</button>
                                </a>

                                <form action="search" method="get">
                                    <input type="text" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </form>
                            </div>
                              
                            

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                              
                                <thead>
                                  
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email Id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($datas as $item)
                                       
                                       <tr>
                                            <td scope="row">{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                        </tr>
                                     @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>


</body>

</html>
