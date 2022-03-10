@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-dark">
            <div>
                <h2  class="text-light">Laravel Address Book</h2>
            </div>
            <span class="navbar-text">
                <a class="btn btn-success" href="{{ route('contacts.create') }}" title="Create a contact">
                    <i class="fas fa-plus-circle"></i>
                </a>
            </span>
    </nav>
            
            


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped">
        <thead>
        <tr class="text-light">
            <th>View</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Date of Birth</th>
            <th>Physical Address</th>
            <th>Edit</th>
        </tr>
    </thead>
        @foreach ($contacts as $contact)
            <tr>
                <td >
                    <button onclick="window.location='{{ route('contacts.show', $contact->id) }}'" title="show" style="border: none; background-color:transparent;">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </button>
                   
                </td>
                <td class="text-light">{{ $contact->name }}</td>
                <td class="text-light">{{ $contact->email }}</td>
                <td class="text-light">{{ $contact->phoneNumber }}</td>
                <td class="text-light">{{ $contact->dateOfBirth }}</td>
                <td class="text-light">{{ $contact->physicalAddress }}</td>
                <td>
                    <button  onclick="window.location='{{ route('contacts.edit', $contact->id) }}'" style="border: none; background-color:transparent;">
                        <i class="fas fa-edit text-primary  fa-lg"></i>
                    </button>
                </td>
            
            </tr>
        @endforeach
    </table>

    {!! $contacts->links() !!}

@endsection