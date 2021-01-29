extends('layout.app')
<form class="form" id="kt_form_1">
 <div class="form-group row">
  <label class="col-form-label text-right col-lg-3 col-sm-12">Description *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
   <input type="text" class="form-control" name="Description" placeholder="Enter your Description"/>

  </div>
 </div>

 <div class="form-group row">
  <label class="col-form-label text-right col-lg-3 col-sm-12">Time-Duration *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
   <input type="text" class="form-control" name="time-duration" />

  </div>
 </div>

 <div class="form-group row">
  <label class="col-form-label text-right col-lg-3 col-sm-12">Options *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
   <select class="form-control" name="options" multiple size="3">
    <option>planned</option>
    <option>held</option>
    <option>cancel</option>
   </select>
  </div>
 </div>

 <div class="row">
  <div class="col-lg-9 ml-lg-auto">
   <button type="submit" class="btn btn-primary font-weight-bold mr-2">Validate</button>
   <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
  </div>
 </div>
</form>