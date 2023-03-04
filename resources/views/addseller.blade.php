<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!--<title>Registration Form in HTML CSS</title>-->
  <!---Custom CSS File--->
  <link rel="stylesheet" href="{{asset('Css/checkout.css')}}" />
</head>

<body>
  <section class="container">
    <header>Registration Form</header>
    <form action="#" class="form">
      <div class="input-box">
        <label>Store Name</label>
        <input type="text" placeholder="Enter full name" required />
      </div>

      <div class="container">
        <figure class="image-container">
          <img id="chosen-image">
          <figcaption id="file-name"></figcaption>
        </figure>

        <input type="file" id="upload-button" accept="image/*">
        <label for="upload-button">
          <i class="fas fa-upload"></i> &nbsp; Choose A Photo
        </label>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input type="text" placeholder="Enter street address" required />
        <div class="column">
          <input type="text" placeholder="Enter your region" required />
        </div>
      </div>

      <button>Submit</button>
    </form>
  </section>
</body>

</html>