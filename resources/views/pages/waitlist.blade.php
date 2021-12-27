@extends('layouts.app')

@section('content')
    <div id="waitlist-page">

        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get on the List</h1>
                    <form>
                        <div class="form-group">
                            <div class="mb-3 d-flex justify-content-between">
                                <div class="firstname-container">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" name="firstname" class="form-control" id="firstname-input" placeholder="First">
                                </div>
                                <div class="lastname-container">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" id="lastname-input" placeholder="Last">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email-input" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email-input" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="phone-input" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone-input" name="phone" placeholder="718-555-9999">
                            </div>
                            <div class="mb-3">
                                <label for="guest-amount">How Many Guests?</label>
                                <select class="form-select" aria-label="Default select example" id="guest-input" name="guest">
                                    <option>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">More than 10</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="time-amount">Reservation Time</label>
                                <select class="form-select" aria-label="time" id="timet-input" name="time">
                                    <option>Select a Time</option>
                                    <option value="4">4pm</option>
                                    <option value="5">5pm</option>
                                    <option value="6">6pm</option>
                                    <option value="7">7pm</option>
                                    <option value="8">8pm</option>
                                    <option value="9">9pm</option>
                                    <option value="10">10pm</option>
                                    <option value="11">11pm</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </form>

                </div>
                <div class="col-md-6">
                    <p>
                        Please note: This is not a reservation. You will be added to the current wait list. You may have a short wait once you arrive while we prepare your table.
                    </p>
                </div>

            
        </div>
    </div>
    
@endsection