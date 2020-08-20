<div class="form-grids row widget-shadow" id="guestInfo" data-example-id="basic-forms">
    <div class="form-title">
        <h4>GUEST INFORMATION </h4>
    </div>
<!-- here STARTS Guest Information -->
    <form action="{{--route('addguestlaptop')--}}" method="post">

        <div class="elements">
        
            <div class="col-sm-4 w3-agileits-crd widgettable" style="margin-top: 0.7%;">

        
                <div class="card card-contact-list" style="margin-right: 2%;margin-bottom:0px">
        
                    <div class="agileinfo-cdr">
        
                        <div class="card-header">
        
                            <h3>NEW GUEST INFO</h3>
        
                        </div>
        
                        <hr class="widget-separator">
        
                        <div class="form-group col-md-3" style="margin-left:-5%">
        
                            <label for="selector1">Title</label>
        
                            <select name="guestTitle" id="selector1" class="form-control1">
        
                                <option value="0">Title</option>
        
                                <option value="Prof.">Prof.</option>
        
                                <option value="Dr.">Dr.</option>
        
                                <option value="Mr.">Mr.</option>
        
                                <option value="Ms.">Ms.</option>
        
                            </select>
        
                        </div>
        
        <div class="form-group col-md-4" style="margin-left: -4%;width: 39%;">
        
            <label for="guestFname">First Name</label>
        
            <input type="text" name="guestFname" class="form-control1" id="guestFname" placeholder="First Name">
        
        </div>
        
        <div class="form-group col-md-4" style="margin-left: -4%; width: 39%;">
        
            <label for="guestLname">Last Name</label>
        
            <input type="text" name="guestLname" class="form-control1" id="guestLname" placeholder="Last Name">
        
        </div>
        <div class="form-group">
        
            <label for="radio" >Gender</label><br>
        
            <div class="radio-inline"><label><input type="radio" name="guestGender" value="male"> Male</label></div>
        
            <div class="radio-inline"><label><input type="radio" name="guestGender" value="female"> Female</label></div>

        </div>

        
    </div>

    </div>

    </div>

    </div>

    
    <div class="col-sm-8 w3-agileits-crd widgettable" style="margin-top: 0.7%;">

        <div class="card card-contact-list" >
    
            <div class="agileinfo-cdr">
    
                <div class="card-header">
    
                    <h3>GUEST LAPTOP INFORMATION</h3>
    
                </div>
    
                <hr class="widget-separator">


                <div class="card-body p-b-20" style="margin-top: -8%;">

                    <div class="form-body">

    
                        <div class="form-body" data-example-id="simple-form-inline" style="    margin-left: -5.5%;">
    
                            <div class="form-inline">
    
                                <div class="form-group">
    
                                    <label for="lapBrand">Brand</label>
    
                                    <select name="guestLapBrand" id="selector1" class="form-control1">
    
                                        <option value="0">Select Brands</option>
    
                                        <option value="1">Apple MacBook</option>
    
                                        <option value="2">Toshiba</option>
    
                                        <option value="3">Dell</option>
    
                                        <option value="4">Lenovo</option>
    
                                        <option value="5">Samsung</option>
    
                                        <option value="6">Fujistu</option>
    
                                        <option value="7">Hewlett-Packard (HP)</option>
    
                                        <option value="8">Think Pad</option>
    
                                        <option value="9">Life is Goog (LG)</option>
    
                                        <option value="10">Sony</option>
    
                                        <option value="11">VIO</option>
    
                                        <option value="12">Microsoft</option>
    
                                        <option value="13">Chrome Book</option>
    
                                    </select>
    
                                </div>
    
                                <div class="form-group" style="width: 42.776%">
    
                                    <label for="lapModel">Model</label>
    
    
                                    <input type="text" name="guestLapModel" class="form-control1" id="lapModel" placeholder="Laptop Model">
    
                                </div>
    
                            </div>
    
                        </div>


    
                        <div class="form-group">
    
                            <label for="lapSerial">Serial Number</label>
    
                            <input type="text" name="guestLapSerial" class="form-control1" id="lapSerial" placeholder="Laptop Serial Number">
    
                        </div>
    
                        <div class="form-group">
    
                            <label for="lapColor">Color</label>
    
                            <select name="guestLapColor" id="lapColor" class="form-control1">
    
                                <option value="0">select color</option>
    
                                <option value="1">Black</option>
    
                                <option value="2">White</option>
    
                                <option value="3">Red</option>
    
                                <option value="4">Blue</option>
    
                                <option value="5">Green</option>
    
                            </select>
    
                        </div>
    
                        <div class="form-group">
    
                            <label for="radio" >Serial Number Location</label><br>
    
                            <div class="radio-inline"><label><input type="radio" name="guestLpSerloc" value="undrLaptop"> Under Laptop</label></div>
    
                            <div class="radio-inline"><label><input type="radio" name="guestLpSerloc" value="undrBattr"> Under Battery</label></div>


        
                        </div>
        
                    </div>



        
                </div>
        
            </div>
        
        </div>

        
    </div>


    <div class="clear-fix"></div>

    <div style="float:right">

        <button type="submit" class="btn btn-success btn-flat btn-pri btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
        <button type="button" class="btn btn-danger btn-flat btn-pri" onclick="location.reload()"><i class="fa fa-minus" aria-hidden="true"></i>Cancel</button>

    </div>

        <!-- Guest Information ends here -->

        <input type="hidden" name="_token" value="{{-- Session::token() --}}">

    </form>

</div>