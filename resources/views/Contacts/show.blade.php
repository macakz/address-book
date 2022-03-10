@extends('layouts.app')


@section('content')

    <nav class="navbar navbar-dark">
        <div>
            <h2 class="text-light">
                {{ $contact->name }}
            </h2>
        </div>
        <span class="navbar-text">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}" title="Go back">
                <i class="fas fa-backward "></i>
            </a>
        </span>
    </nav>  

    <div class="row text-light pt-4">
            <div class="form-group">
                <strong><u>Email:</u></strong>
                <br>
                {{ $contact->email }}
            </div>
            <div class="form-group">
                <strong><u>Phone Number:</u></strong>
                <br>
                {{ $contact->phoneNumber }}
            </div>
            <div class="form-group">
                <strong><u>Date of Birth:</u></strong>
                <br>
                {{ $contact->dateOfBirth }}
            </div>
            <div class="form-group">
                <strong><u>Physical Address:</u></strong>
                <br>
                {{ $contact->physicalAddress }}
            </div>
            <div class="form-group">
                <strong><u>Date Created:</u></strong>
                <br>
                {{ date_format($contact->created_at, 'jS M Y') }}
            </div>

        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="pt-3" type="submit" title="delete" style="border: none; background-color:transparent;">
                <i class="fas fa-trash fa-lg text-danger"></i>
            </button>
        </form>
    </div>
@endsection