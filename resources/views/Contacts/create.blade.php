@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-dark">
        <div>
            <h2 class="text-light">Add New Contact</h2>
        </div>
        <span class="navbar-text">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}" title="Go back">
                <i class="fas fa-backward "></i>
            </a>
        </span>
    </nav>  

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contacts.store') }}" method="POST" >
        @csrf

        <div class="row text-light">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Phillip Sherman">
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input class="form-control" style="height:50px" name="email"
                        placeholder="psherman42@gmail.com"></input>
                </div>
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" name="phoneNumber" class="form-control" placeholder="020 111 4242">
                </div>
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="text" name="dateOfBirth" class="form-control" placeholder="12-12-1990">
                </div>
                <div class="form-group">
                    <strong>Physical Address:</strong>
                    <input type="text" name="physicalAddress" class="form-control" placeholder="P. Sherman 42 Wallaby Way">
                </div>
            <div class="text-center p-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection