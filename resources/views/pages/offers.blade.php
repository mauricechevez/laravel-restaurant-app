@extends('layouts.app')

@section('content')
    <div id="offer-page">

        <div class="content-box">
            <div class="container deal-container">
                <h1>Sign Up for Deal Notifications</h1>
                        <form>
                            <div>
                                <div class="row-1 d-flex justify-content-between">
                                    <div class="firstname-container">
                                        <label class="form-label" for="firstname" class="form-label">First Name</label>
                                        <input type="text" name="firstname" class="form-control" id="firstname-input" placeholder="First">
                                    </div>
                                    <div class="lastname-container">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" name="lastname" class="form-control" id="lastname-input" placeholder="Last">
                                    </div>
                                </div>
                                <div class="row-2 d-flex justify-content-between">
                                    <div class="email-container">
                                        <div class="">
                                            <label for="email-input" class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control" id="email-input" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="phone-container">
                                        <div class="">
                                            <label for="phone-input" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="phone-input" name="phone" placeholder="718-555-9999">
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                            <div class="confirmation">
                                <div class="acknowledgement col-md-6">
                                    <p>In signing up, I acknowledge that I am 18 years of age or older, and want to receive email offers from Food Circle. I also consent to join Dine Rewards program and agree to the terms and conditions of the program</p>
                                </div>
                                <div class="button col-md-6">
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>

                        </form>
            </div>
    </div>
    
@endsection