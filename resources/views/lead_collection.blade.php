@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center col-lg-8">

            <h2 class="col-lg-8">Contact Us</h2>

                <form action="/lead_collection" class="col-lg-8" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input required pattern=".{3,}" type="text" class="form-control" id="lead_full_name"
                               name="lead_full_name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input required type="email" class="form-control" id="lead_email_address"
                               name="lead_email_address">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Phone:</label>
                        <input required pattern="[0-9 ()-.]{10,}" type="text" class="form-control"
                               id="lead_telephone_number" name="lead_telephone_number">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Postal Code:</label>
                        <input min="00000" max="99999" required pattern="[0-9]{5}" type="number" class="form-control"
                               id="lead_postal_code" name="lead_postal_code">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit_lead">Submit</button>
                </form>
        </div>
    </div>
@endsection
