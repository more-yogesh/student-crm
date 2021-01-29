extends('layout.app')
<form class="form" id="kt_form_1">
 <div class="form-group row">
  <label class="col-form-label text-right col-lg-3 col-sm-12">Name *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
   <input type="text" class="form-control" name="Name" placeholder="Enter your Name"/>

  </div>
 </div>

 
 <div class="form-group row">
  <label class="col-form-label text-right col-lg-3 col-sm-12">Mobile *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
   <div class="input-group">
    <div class="input-group-prepend">
     <span class="input-group-text"><i class="flaticon2-browser"></i></span>
    </div>
    <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number"/>
   </div>
  </div>
 </div>

 <div class="form-group row">
  <label class="col-form-label text-right col-lg-3 col-sm-12">Email *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
   <input type="text" class="form-control" name="email" placeholder="Enter your email"/>

  </div>
 </div>

 <div class="form-group row">
  <label class="col-form-label text-right col-lg-3 col-sm-12">DOB *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
   <input type="date" class="form-control" name="DOB" />

  </div>
 </div>

 <div class="row">
  <div class="col-lg-9 ml-lg-auto">
   <button type="submit" class="btn btn-primary font-weight-bold mr-2">Validate</button>
   <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
  </div>
 </div>
</form>