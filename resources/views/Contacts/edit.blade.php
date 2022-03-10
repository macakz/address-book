@extends('layouts.app')

@section('content')

    <nav class="navbar navbar-dark">
        <div>
            <h2 class="text-light">Edit {{ $contact->name }}</h2>
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

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row text-light">
            
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $contact->name }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <textarea class="form-control" style="height:50px" name="email"
                        placeholder="email">{{ $contact->email }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" name="phoneNumber" class="form-control" placeholder="{{ $contact->phoneNumber }}"
                        value="{{ $contact->phoneNumber }}">
                </div>
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="text" name="dateOfBirth" class="form-control" placeholder="{{ $contact->dateOfBirth }}"
                        value="{{ $contact->dateOfBirth }}">
                </div>
                <div class="form-group">
                    <strong>Physical Address:</strong>
                    <input type="text" name="physicalAddress" class="form-control" placeholder="{{ $contact->physicalAddress }}"
                        value="{{ $contact->physicalAddress }}">
                </div>
            <div class="text-center p-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection