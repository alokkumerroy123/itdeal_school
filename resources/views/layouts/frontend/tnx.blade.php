



<!DOCTYPE html>
<html>
<title>Simple Sign up from</title>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
        html,
        body {
            display: flex;
            justify-content: center;
            font-family: Roboto, Arial, sans-serif;
            font-size: 15px;
        }

        form {
            border: 5px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 16px 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .icon {
            font-size: 110px;
            display: flex;
            justify-content: center;
            color: #4286f4;
        }

        button {
            background-color: #4286f4;
            color: white;
            padding: 14px 0;
            margin: 10px 0;
            border: none;
            cursor: grab;
            width: 48%;
        }

        h1 {
            text-align: center;
            fone-size: 18;
        }

        button:hover {
            opacity: 0.8;
        }

        .formcontainer {
            text-align: center;
            margin: 24px 50px 12px;
        }

        .container {
            padding: 16px 0;
            text-align: left;
        }

        span.psw {
            float: right;
            padding-top: 0;
            padding-right: 15px;
        }

        /* Change styles for span on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }
    </style>
</head>

<body>
        <form action="{{route('transection')}}" method="post"  enctype="multipart/form-data">
            <h1>Registration</h1>
            <div class="icon">
              <i class="fas fa-user-circle"></i>
            </div>
            <div class="formcontainer">
            @csrf
            
            <div class="container">
                {{-- <label><strong>Studen Information</strong></label> --}}
                <input type="hidden"  name="name" value="{{$request->name}}" />
                {{-- <label><strong>Birth Certificate</strong></label> --}}
                <input type="hidden"  name="birth_certificate_no" value="{{$request->birth_certificate_no}}">
                {{-- <label><strong>Email</strong></label> --}}
                <input type="hidden" placeholder="Enter your email" name="email" value="{{$request->email}}">
                {{-- <label><strong>Birthday</strong></label> --}}
                <input type="hidden" name="birth_date" value="{{$request->birth_date}}">
                {{-- <label><strong>Nationality</strong></label> --}}
                <input type="hidden" placeholder="Nationality" name="nationality" value="{{$request->nationality}}" required  >
                {{-- <label><strong>Religion</strong></label> --}}
                <input type="hidden" placeholder="Your Religion" name="religion" value="{{$request->religion}}" required >
               <input value="{{$request->gender}}" type="hidden" name="gender">
            </div>
            <input type="hidden" placeholder="Previous School Name" name="prvSchool" value="{{$request->prvSchool}}">
            {{-- <label><strong>Parents</strong></label> --}}
            <input type="hidden" placeholder="Father's Name" name="fName" value="{{$request->fName}}" required>
            <input type="hidden" placeholder="Nid Number" name="fNid" value="{{$request->fNid}}" required>
            <input type="hidden" placeholder="Occapution" name="fOccupation" value="{{$request->fOccupation}}" required>
            <input type="hidden" placeholder="Annual Income" name="fIncome" value="{{$request->fIncome}}" required>
            <input type="hidden" placeholder="Father's Mail" name="fMail" value="{{$request->fMail}}" >
            <input type="hidden" placeholder="Father's mobile Number" name="fNumber" value="{{$request->fNumber}}" >

            <input type="hidden" placeholder="Mother's Name" name="mName" value="{{$request->mName}}" required>
            <input type="hidden" placeholder="Nid Number" name="mNid" value="{{$request->mNid}}" required>
            <input type="hidden" placeholder="Occapution" name="mOccupation" value="{{$request->mOccupation}}" required>
            <input type="hidden" placeholder="Annual Income" name="mIncome" value="{{$request->mIncome}}" required>
            <input type="hidden" placeholder="Mother's Mail" name="mMail" value="{{$request->mMail}}" >
            <input type="hidden" placeholder="Mother's mobile Number" name="mNumber" value="{{$request->mNumber}}" required>
           
            {{-- <label><strong>Address</strong></label> --}}
            <input type="hidden" placeholder="Present Address" name="present_address" value="{{$request->present_address}}" >
            <input type="hidden" placeholder="Post Code" name="post_code" value="{{$request->post_code}}" required >
            <input type="hidden" placeholder="Thana" name="thana" value="{{$request->thana}}" >
            <input type="hidden" placeholder="District" name="district" value="{{$request->district}}" required>
            {{-- <input type="text" placeholder="Thana" name="thana" value="{{$request->thana}}" > --}}

            {{-- <label><strong>Other's Information</strong></label><br> --}}
            <input type="hidden" placeholder="Admission Class" name="addmission_class" value="{{$request->addmission_class}}" >
            <input type="hidden" placeholder="Payment Method" name="payment_method" value="{{$request->payment_method}}">
            <input type="hidden" placeholder="Admission Lottery ID" name="addmission_lottery_number" value="{{$request->addmission_lottery_number}}">
            <input type="hidden" placeholder="Pay Day" name="pay_date" value="{{$request->pay_date}}">
            <input type="hidden" placeholder="Qouta" name="qouta" value="{{$request->qouta}}">
            {{-- <input type="hidden" placeholder="enter photo" name="{{$request->photo}}"> --}}
          
            
            <label for="amount" class="form-label">Payment 130tk in (017141136510) Number</label><br><br>
            {{-- <input type="number" placeholder="Enter Amount" name="amoutn"><br><br> --}}
            <label for="transaction_id" class="form-label">Transaction id</label>
            <input type="text" placeholder="Enter tnx_id" name="transaction_id">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" placeholder="enter phone number " name="phone">
        
          
          
        <button type="submit"><strong>SIGN UP</strong></button>
        
    </div>
</form>  
</body>
</html>

