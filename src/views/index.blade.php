<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">
  <h2>Feel Free To Contact Us Any Time!</h2>
  @if(Session::has('msg')){{ Session::get('msg') }}@endif
  <hr/>
  <div class="row">
    <form name="contactUs" id="contactUs" action="{{ route('contactus.save') }}" method="POST">
    {{ csrf_field() }}
        <div class="col-md-6">
            <div class="form-group">
                <label>Your Name:</label>
                <input type="text" name="full_name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Email-id:</label>
                <input type="email" name="email_id" class="form-control" placeholder="Email-id">
            </div>
            <div class="form-group">
                <label>Contact No:</label>
                <input type="text" name="contact_no" class="form-control" placeholder="Contact No">
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea name="message" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="submit-btn" value="Send">
            </div>
        </div>
    </form>
  </div>
</div>

</body>
</html>
