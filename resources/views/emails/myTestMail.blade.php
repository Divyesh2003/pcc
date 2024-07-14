
<html lang="en">
  <head>
    <!--  HEAD    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enquiry Form</title>
    <style>
body {
  font-family: Poppins, sans-serif;
  padding:20px;
  background: #f1f1f1;
}

.container {
  background-color: #000000;
  width:95%;
  max-width:600px;
  margin-left:auto;
  margin-right:auto;
}

.inner_container {
  background-color:#ffffff;
  padding:50px;
}

header, footer {
  text-align:center;
}

.email_inner_section {
  padding:20px 0 50px 0;
}

hr {
  height:5px;
  background-color: brown;
  border-color: brown;
}

h1 {
  color:brown;
}

.enquiry_submission table {
  text-align:left;
  margin-top:50px;
}

.enquiry_submission table tbody tr th {
  width: 30%;
  vertical-align:top;
}

.enquiry_submission th, .enquiry_submission td {
  padding: 10px;
  margin:0;
}

.enquiry_submission th {
  color: brown;
  font-weight:900;
}

.enquiry_submission td {
  font-weight:100;
}

.email_footer {
  font-size:10px;
  color: #ffffff;
  padding:20px 0;
}

.email_footer a {
  color: #ffffff;
  text-decoration:none;
}

@media only screen and (max-width:500px){
  .enquiry_submission th, .enquiry_submission td {
    display: block;
    width: 100% !important;
}
}
    </style>
  </head>
  <!-- BODY   -->
  <body>
    <div class="container">
      <div class="inner_container">
        <header>
        <h1>New Enquiry Submission</h1>
      </header>
        <hr>
        <div class="email_content">
        <div class="email_inner_section">
          <section>
        </section>
          <section class="enquiry_submission">
          <table>
            <tbody>
              <tr>
                <th>Inquiry Id</th>
                <td>{{ $details->id }}</td>
              </tr>
              <tr>
                <th>Client Name</th>
                <td>{{ $details->name }}</td>
              </tr>
              <tr>
                <th>Client's Email Address</th>
                <td>{{ $details->email }}</td>
              </tr>
              <tr>
                <th>Client's Services</th>
                <td>{{ $details->services }}</td>
              </tr>
              <tr>
                <th>Client's Contact Number</th>
                <td>{{ $details->phone }}</td>
              </tr>
              <tr>
                <th>Client's Message</th>
                <td>{{ $details->message }}</td>
              </tr>
            </tbody>
          </table>
        </section>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>