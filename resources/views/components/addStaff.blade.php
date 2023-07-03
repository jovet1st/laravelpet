@extends('layout.dashboard')
@section('content')
<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
        <i class="fas fa-user-secret me-2"></i>PetAdopt
    </div>
    <div class="list-group list-group-flush my-3">
        <a href="{{ Route('pets.index') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-gauge me-2"></i>Pets
        </a>
        <a href="{{ Route('staff.index') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-gauge me-2"></i>Staff
        </a>
    </div> 
</div>

<!-- sidebar ends -->

<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Staff</h2>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>Obito Kei
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="#" class="dropdown-item">Profile</a></li>
                        <li><a href="#" class="dropdown-item">Settings</a></li>
                        <hr class="divider">
                        <li><a href="../logout.php" class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    

    <div class="container-fluid mx-2">
        <div class="row mt-4">
            <div>
                <button class="mb-3 btn btn-primary fw-bold bg-dark text-warning" data-bs-toggle="modal" data-bs-target="#add">ADD PETS</button>
            </div>
        </div>

        <!-- Images  -->
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-3 border p-4 info bg-white ms-2 my-2 rounded" >
                @if(Session::has('success'))
                    <div class="alert alert-info">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ Route('store.staff') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control visually-hidden" name="user_id" value="{{ Auth::user()->id }}" placholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="">Fullname of the Staff</label>
                        <input type="text" class="form-control" name="staffName" placeholder="Enter Name">
                    </div><br>
                    <div class="form-group">
                        <label for="">Address of this Staff</label>
                        <input type="number" class="form-control" name="staffAddress" placeholder="Enter Address">
                    </div><br>
                    <div class="form-group">
                        <label for="">Email of this Staff</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email">
                    </div><br>
                    <div class="form-group">
                        <label for="">Phone Number of this Staff</label>
                        <input type="text" class="form-control" name="phoneNumber" placeholder="Enter Phone Number">
                    </div><br>
                    <div class="form-group">
                        <label for="">Gender of this Staff</label>
                        <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                    </div><br>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')