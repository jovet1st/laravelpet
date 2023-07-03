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
    </div> 
</div>

<!-- sidebar ends -->

<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Pets</h2>
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
                <form action="{{ route('create.pets') }}" method="get">
                    @csrf
                    <button class="mb-3 btn btn-primary fw-bold bg-dark text-warning">ADD PETS</button>
                </form>
            </div>
        </div>

        <!-- Images  -->
        <div class="row petss">
            @foreach($staff as $staffs)
                <div class="col-2 border p-4 info bg-white ms-2 my-2 rounded" >
                    <div>
                        <span><b>Name</b> : {{ $staffs->staffName }} </span><br>
                        <span><b>Address</b> : {{ $staffs->staffAddress }} </span><br>
                        <span><b>Email</b> : {{ $staffs->email }} </span><br>
                        <span><b>Phone Number</b> : {{ $staffs->phoneNumber }} </span><br>
                        <span><b>Gender</b> : {{ $staffs->gender }} </span><br>
                    </div>
                    <div class="mt-3">
                        <form action="{{ Route('delete.staff', ['id' => $staffs->id ]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="del-btn btn btn-danger btn-sm">Delete Pet</button>
                        </form>
                        <form action="{{ Route('edit.staff', ['id' => $staffs->id ]) }}">
                            @csrf
                            <button class="del-btn btn btn-primary btn-sm">Edit Pet</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection('content')