<x-web-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <label for="options" style="padding-top: 70px; padding-right:38px"><b>Title:</b></label>
                <label for="funame" style="padding-left:110px"><b>Full Name:</b></label>
                <br>
                <select id="options">
                    <option value="option1">Mr</option>
                    <option value="option2">Ms</option>
                    <option value="option3">Mrs</option>
                </select>
                <input style="margin-left: 136px;"  type="text" id="funame" name="funame" placeholder="Full Name" required><br>
                <br>
                <label for="pno" style="padding-right: 100px;"><b>Mobile No:</b></label>
                <label for="apno" style="padding-right:20px;"><b>Alternative Mobile No:</b></label><br>
                <input type="text" id="pno" name="pno" placeholder="03XX-XXXXXXX" required>
                <input type="text" id="apno" name="apno" placeholder="03XX-XXXXXXX">
                <br>
                <br>
                <label for="email"><b>Email:</b></label><br>
                <input type="text" id="email" name="email" placeholder="Enter your email"><br>
                <br>
                <label for="pn"><b>PickUp Notes:</b></label><br>
                <input type="text" id="pn" name="pn"><br>
                <br>
                <h4>Payment Information:</h4>
                <div class="cashborder">
                <img src="{{ asset('images/Cash.webp') }}">
                <p>Cash On delivery </p>
                </div>
            </div>
        </div>
    </div>

</x-web-layout>