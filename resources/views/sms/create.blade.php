
 <form  action="{{ route('sendsms.store') }}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label" for="validationCustom03">Phone</label>
                <input type="text" class="form-control"  name="phone" id="validationCustom03" placeholder="Phone" required>

            </div>
        </div>


    </div>

    <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label" >Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea5" placeholder="Enter  Description" rows="3"></textarea>
            </div>
     </div>

     <!-- code div close  -->
    <div id="otpdiv" style="visibility:hidden;">
        <div class="form-group">
          <label for="emotpail">OTP:</label>
          <input type="text" class="form-control" id="verification_code" placeholder="Enter OTP" name="verification_code">
        </div>
        {{-- <button id="otpSubmit" class="btn btn-primary">Submit</button> --}}
    </div>
      <!-- </form> -->



    <button class="btn btn-primary" type="submit">send sms</button>
</form>
