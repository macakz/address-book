@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Address Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}" title="Create a contact"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>View / Edit</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Date of Birth</th>
            <th>Physical Address</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td >
                    <button onclick="window.location='{{ route('contacts.show', $contact->id) }}'" title="show" style="border: none; background-color:transparent;">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </button>
                    <button  onclick="window.location='{{ route('contacts.edit', $contact->id) }}'" style="border: none; background-color:transparent;">
                        <i class="fas fa-edit  fa-lg"></i>
                    </button>
                </td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phoneNumber }}</td>
                <td>{{ $contact->dateOfBirth }}</td>
                <td>{{ $contact->physicalAddress }}</td>
                <td>
                    
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $contacts->links() !!}

@endsection