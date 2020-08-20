
<div class="form-grids row widget-shadow" id="studInfo" data-example-id="basic-forms" style="height:155px;width:102%">

    <div class="form-title">

        <h4>SELECT STUDENT </h4>

    </div>


    
    <div class="form-body">
    
        <div class="form-group">
    
            <div class="col-md-5">
    
                <label for="holderStudentID">ENTER STUDENT  ID</label>

                <input type="text" class="form-control" id="holderStudentID" placeholder="STUDENT ID">

            </div>

            <div class="col-md-4" style="margin-top:1.1%">

                <ul class="bt-list">

                    <li style="margin-right: 2%;width:41%"><a href="#" class="hvr-icon-fade col-7" onclick="checkStud()">check</a></li>

                    <li style="width:41%"><a href="#" onclick="location.reload()" class="hvr-icon-sink-away col-5" >Cancel</a></li>

                </ul>

            </div>
    
         </div>
    </div>
 
    <div class="clearfix"></div>

    <div class="col-md-8" id="errdisp" style="margin-top: 2.5%;margin-left: 10%">

        <div class="alert alert-danger" role="alert">

            <strong>ERROR !</strong> No database record found. Please register Student if not registered!

        </div>

    </div>


    
    <div class="col-sm-8 w3-agileits-crd widgettable" style="margin-top: 1.3%;" id="studlapinfo">
        <div class="card card-contact-list" >
            <div class="agileinfo-cdr">
                <div class="card-header">
                    <h3>ADD LAPTOP INFORMATION</h3>
                </div>
    
                <hr class="widget-separator">


            
                <div class="card-body p-b-20" style="margin-top: -8%;">
            
                    <div class="form-body">
                        
        
                        <form action="{{ route('addstudentlaptop'  ) }}" method="post">
                            @csrf
                            <input type="hidden" name="studentID" id="selStudID">
        
                            <div class="form-body" data-example-id="simple-form-inline" style="    margin-left: -5.5%;">
        
                                <div class="form-inline">
        
                                    <div class="form-group">
        
                                        <label for="lapBrand">Brand</label>
        
                                        <select name="labbrand" id="selector1" class="form-control1">
        
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
                
                <input name="lapmodel" type="text" class="form-control1" id="lapModel" placeholder="Laptop Model">
            
            </div>
            
        </div>
    
    </div>


    
    <div class="form-group">
    
        <label for="lapSerial">Serial Number</label>
    
        <input name="lapserial" type="text" class="form-control1" id="lapSerial" placeholder="Laptop Serial Number">
    
    </div>
    
    <div class="form-group">
    
        <label for="lapColor">Color</label>
    
        <select name="lapcolor" id="lapColor" class="form-control1">
    
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
    
        <div class="radio-inline"><label><input type="radio" name="lapserloc" value="undrLaptop"> Under Laptop</label></div>
    
        <div class="radio-inline"><label><input type="radio" name="lapserloc" value="undrBattr"> Under Battery</label></div>


        
    </div>
    
    <div style="float:right;margin-right:-6%">
        
        <button type="submit" class="btn btn-success">Add Laptop</button>
        
    </div>
    
    
</form>

</div>



</div>


</div>

</div>


</div>


<div class="elements">

    <div class="col-sm-4 w3-agileits-crd widgettable" style="margin-top: 1.3%;" id="regstudInfo">


        
        <div class="card card-contact-list" style="margin-left: 2%;">
        
            <div class="agileinfo-cdr">
        
                <div class="card-header">
        
                    <h3>STUDENT INFORMATION</h3>
         
                </div>
         
                <hr class="widget-separator">
         
                <div class="list-group">
         
                    <a class="list-group-item media" href="">
         
                        <div class="pull-left">
         
                            <img class="lg-item-img" src="images/avatar.png" alt="" height="50" width="50">
         
                        </div>
         
                        <div class="media-body">
         
                            <div class="pull-left">
         
                                <div class="lg-item-heading" id="studname">Yohannes Kifle</div>
         
                                <small class="lg-item-text" id="studDept">BSc. Degree in computer Science</small>
         
                            </div>
         
                            <div class="pull-right">
         
                                <div class="lg-item-heading"><span class="fa fa-check-circle" style="color:green"></span></div>
         
                            </div>
         
         
                        </div>
         
                        <div style="margin-left:21%">
         
                            <br>
         
                            <div class="pull-left">
                                <div class="lg-item-heading">Class Year</div>
         
                                <small class="lg-item-text" style="display:block" id="studyr">Third Year</small>
         
                            </div>
         
                            <br><br>
         
                            <div class="pull-left">
         
                                <div class="lg-item-heading">Currently</div>
         
                                <small class="lg-item-text" style="display:block" id="studstat">In Campus</small>
         
                            </div>
         
                            <br><br>
         
                            <div class="pull-left">
         
                                <div class="lg-item-heading">Gender</div>
         
                                <small class="lg-item-text" style="display:block" id="studgen">Male</small>
         
                            </div>

                            
                        </div>


                    
                    </a>
                 
                </div>
            
            </div>
        
        </div>
        
    </div>
    
</div>

</div>