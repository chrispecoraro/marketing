@extends('layouts.app')

@section('content')
    <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <td>Full Name</td>
                    <td>Telephone Number</td>
                    <td>Email Address</td>
                    <td>Postal Code</td>
                    <td>Delete Lead</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($leads as $lead)
                    <tr class="lead">
                        <td>{{ $lead->full_name }}</td>
                        <td>{{ $lead->telephone_number->telephone_number }}</td>
                        <td>{{ $lead->email_address }}</td>
                        <td>{{ $lead->postal_code }}</td>
                        <td><a href="#" class="delete-lead" data-id="{{ $lead->id  }}">X</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
