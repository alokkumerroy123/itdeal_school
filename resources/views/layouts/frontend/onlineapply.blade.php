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


    <form action="{{ route('onlineapply') }}" method="post"  enctype="multipart/form-data">
        @csrf

        <h1>Registration</h1>
        <div class="icon">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="formcontainer">

            <div class="container">
                {{-- <label><strong>Studen Information</strong></label><br> --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" placeholder="Enter your name" name="name" required>
                </div>
                {{-- <label><strong>Birth Certificate</strong></label> --}}
                <div class="mb-3">
                    <label for="birth_certificate_no" class="form-label">Enter Birth Certificate</label><br><br>
                    <input type="number" placeholder="Enter Birth Certificate" name="birth_certificate_no" required>
                </div><br>
                {{-- <label><strong>Email</strong></label> --}}
                <div class="mb-3">
                    {{-- <label for="email" class="form-label">Email</label> --}}
                    <label for="exampleInputEmail1" class="form-label">Email address</label><br><br>
                    <input type="email" placeholder="Enter your email" name="email">
                </div><br>

                {{-- <label><strong>Birthday</strong></label> --}}
                <div class="mb-3">
                    <label for="birth_date" class="form-label">Enter Birthday</label><br><br>
                    <input type="date" name="birth_date" placeholder="Enter your birthday">
                </div><br>

                {{-- <label><strong>Nationality</strong></label> --}}
                <div class="mb-3">
                    <label for="nationality" class="form-label">Enter Nationality</label>
                    <input type="text" placeholder="Nationality" name="nationality" required>
                </div><br>

                {{-- <label><strong>Religion</strong></label> --}}
                <div class="mb-3">
                    <label for="religion" class="form-label">Enter Your Religion</label>
                    <input type="text" placeholder="Your Religion" name="religion" required><br><br>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Enter Your Gender</label><br><br>
                        <select name="gender" id="gender">
                            <option>Gender</option>
                            <option value="male">male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div><br>

                    <div class="mb-3">
                        <label for="prvSchool" class="form-label">Enter Previous School Name</label>
                        <input type="text" placeholder="Previous School Name" name="prvSchool">
                    </div><br>

                    {{-- <label><strong>Parents</strong></label> --}}
                    <div class="mb-3">
                        <label for="fName" class="form-label">Enter Father's Name</label>
                        <input type="text" placeholder="Father's Name" name="fName" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="fNid" class="form-label">Enter Father Nid Number</label><br>
                        <input type="number" placeholder="Nid Number" name="fNid" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="fOccupation" class="form-label">Father Occapution</label>
                        <input type="text" placeholder="Occapution" name="fOccupation" required>
                    </div><br><br>

                    <div class="mb-3">
                        <label for="fIncome" class="form-label">Father Annual Income</label><br>
                        <input type="number" placeholder="Annual Income" name="fIncome" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="fMail" class="form-label">Father Email</label><br>
                        <input type="email" placeholder="Father's Mail" name="fMail">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="fNumber" class="form-label">Father mobile Number</label><br>
                        <input type="number" placeholder="Father's mobile Number" name="fNumber">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="fNumber" class="form-label">Mother Name</label><br>
                        <input type="text" placeholder="Mother's Name" name="mName" required>
                    </div><br><br>

                    <div class="mb-3">
                        <label for="mNid" class="form-label">Mother Nid Number</label><br>
                        <input type="number" placeholder="Nid Number" name="mNid" required>
                    </div><br><br>

                    <div class="mb-3">
                        <label for="mOccupation" class="form-label">Mother Occapution</label><br>
                        <input type="text" placeholder="Occapution" name="mOccupation" required>
                    </div><br><br>

                    <div class="mb-3">
                        <label for="mIncome" class="form-label">Mother Annual Income</label><br>
                        <input type="number" placeholder="Annual Income" name="mIncome" required>
                    </div><br><br>

                    <div class="mb-3">
                        <label for="mMail" class="form-label">Mother Email</label><br>
                        <input type="email" placeholder="Mother's Mail" name="mMail">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="mNumber" class="form-label">Mother Mobile Number</label><br>
                        <input type="number" placeholder="Mother's mobile Number" name="mNumber" required>
                    </div><br><br>

                    {{-- <label><strong>Address</strong></label> --}}
                    <div class="mb-3">
                        <label for="present_address" class="form-label">Presenr Address</label><br>
                        <input type="text" placeholder="Present Address" name="present_address">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="post_code" class="form-label">Post Code</label><br>
                        <input type="number" placeholder="Post Code" name="post_code" required>
                    </div><br><br>

                    <div class="mb-3">
                        <label for="thana" class="form-label">Thana</label><br>
                        <input type="text" placeholder="Thana" name="thana">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="district" class="form-label">District</label><br>
                        <input type="text" placeholder="District" name="district" required>
                    </div><br><br>

                    {{-- <input type="text" placeholder="Thana" name="thana" > --}}

                    {{-- <label><strong>Other's Information</strong></label><br> --}}
                    <div class="mb-3">
                        <label for="ddmission_class" class="form-label">Admission Class</label><br>
                        <input type="number" placeholder="Admission Class" name="addmission_class">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Payment Method</label><br>
                        <input type="text" placeholder="Payment Method" name="payment_method">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="addmission_lottery_number" class="form-label">Admission Lottery ID</label><br>
                        <input type="number" placeholder="Admission Lottery ID" name="addmission_lottery_number">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="apay_date" class="form-label">Pay Day</label><br>
                        <input type="date" placeholder="Pay Day" name="pay_date">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="qouta" class="form-label">Qouta</label><br>
                        <input type="text" placeholder="Qouta" name="qouta">
                    </div><br><br>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" name="photo" id="photo">
                      </div>
                    <button type="submit"><strong>SIGN UP</strong></button>
                </div>
    </form>
</body>

</html>
