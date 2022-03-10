@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Address Book</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('contacts.index') }}" title="Go back">
                    Contacts
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $contact->name }}
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                {{ $contact->introduction }}
            </div>
            <div class="form-group">
                <strong>Phone Number:</strong>
                {{ $contact->phoneNumber }}
            </div>
            <div class="form-group">
                <strong>Date of Birth:</strong>
                {{ $contact->dateOfBirth }}
            </div>
            <div class="form-group">
                <strong>Physical Address:</strong>
                {{ $contact->physicalAddress }}
            </div>
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($contact->created_at, 'jS M Y') }}
            </div>

        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                <i class="fas fa-trash fa-lg text-danger"></i>

            </button>
        </form>
    </div>
@endsection