<form class="" action="{{ route('profile') }}" name="registration" id="registration" method="post">
    @csrf
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Step 1: Yor details
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="firstname">First Name</label>
                                <input class="form-control" type="text" id="firstname" name="firstname">
                            </div>
                            <div class="col-md-4">
                                <label for="lastname">Last Name</label>
                                <input class="form-control" type="text" id="lastname" name="lastname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">Email Address</label>
                                <input class="form-control" type="text" id="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-info step-one-btn" type="button" name="button">Next ></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed step-two" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Step 2: More comments
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="phone">Phone</label>
                                <input class="form-control" type="text" id="phone" name="phone" placeholder="example: 07 123 456 789">
                            </div>
                            <div class="col-md-4">
                                <label for="gender">Gender</label>
                                <select class="form-control"  id="gender" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Day of birth</label>
                        <div class="row">
                            <div class="col-md-2">
                                <input class="form-control" type="text" id="day" name="day">
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" type="text" id="month" name="month">
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" type="text" id="year" name="year">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-12 text-right">
                              <button class="btn btn-info step-two-btn" type="button" name="button">Next ></button>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed step-three" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Step 3: Final comments
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="comments">Comments</label>
                                <textarea class="form-control" id="comments" name="comments"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-info submit" type="submit" name="button">Next ></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
