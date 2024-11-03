<x-web-layout>
    <section>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="menunav">
                        <!-- Creating a navigation bar to help customers go the option they are interested in buying making website feasible for the customers-->

                        <ul style="display:flex; list-style-type:none; padding-top:30px;">
                            <!-- listing the options using ul ,li and a tag -->
                            <li><a style="color:black;  font-size:30px; padding-right: 65px; padding-left:180px"
                                    href="#hot">Hot</a></li>
                            <!-- Giving the id so that it can be mentioned to the section later -->
                            <li><a style="color:black;  font-size:30px; padding-right: 65px;" href="#iced">Iced</a>
                            </li>
                            <li><a style="color:black;  font-size:30px; padding-right: 30px;" href="#frappe">Frappe</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hot"> <!-- Placing the id over here to locate the section we need to lead the customer to -->
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-12">
                    <img style="width: 100%; margin-top: 15px;" src="{{ asset('images/Hot.webp') }}">
                    <!-- Inserting an image using img tag -->
                </div>
            </div>
        </div>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Spanishlatte.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Spanish
                            Latte</h2> <!-- Mentioning the product name and price on the card -->
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                        <!-- created an add to cart button on the card -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Tiramisulatte.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Tiramisu
                            Latte</h2> <!-- Mentioning the product name and price on the card -->
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 595</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                        
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Mintlatte.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Mint
                            Latte</h2> <!-- Mentioning the product name and price on the card -->
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/carameldelightlatte.webp') }}">
                        <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Caramel
                            Latte</h2> <!-- Mentioning the product name and price on the card -->
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Cappuccino.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">
                            Cappuccino</h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Americano.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Americano
                        </h2> <!-- Mentioning the product name and price on the card -->
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Cortado.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Cortado
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <!-- Mentioning the product name and price on the card -->
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Standard.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Standard
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <!-- Mentioning the product name and price on the card -->
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Espresso.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Espresso
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <!-- Mentioning the product name and price on the card -->
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Frenchvanilla.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">French
                            Vanilla <!-- Mentioning the product name and price on the card -->
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Mocha.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Mocha
                            Latte
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <!-- Mentioning the product name and price on the card -->
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/belgain.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Belgian
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <!-- Mentioning the product name and price on the card -->
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iced"> <!-- Placing the id over here to locate the section we need to lead the customer to -->
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-12">
                    <img style="width: 100%; margin-top: 15px;" src="{{ asset('images/iced.webp') }}">
                    <!-- inserted the image of the product-->
                </div>
            </div>
        </div>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/frenchiced.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">French
                            Vanilla
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Caramelicedlatte.webp') }}">
                        <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Caramel
                            Latte
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/hazelnuticed.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">HazelNut
                            Latte
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/UnicornLatte.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Unicorn
                            Latte
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Caramelicedlatte.webp') }}">
                        <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Spanish
                            Latte
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/mochaicedmint.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Mocha
                            Mint
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Caramelicedlatte.webp') }}">
                        <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Iced
                            Latte
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/frenchiced.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Americano
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="frappe"> <!-- Placing the id over here to locate the section we need to lead the customer to -->
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-12">
                    <img style="width: 100%; margin-top: 15px;" src="{{ asset('images/FRAPPE.webp') }}">
                    <!-- inserted the image of the product-->
                </div>
            </div>
        </div>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Alaskafrappe.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Alaska
                            Fudge
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Caramelfrappe.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Caramel
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Strawberryfrappe.webp') }}">
                        <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">
                            Strawberry
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/mochafrappe.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Mocha
                            Frappe
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Tiramisufrappe.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Tiramisu
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Mochafrappe1.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Mint
                            Mocha </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Blueberry.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Blueberry
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/vanillabrew.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Vanilla
                            brew
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"> <!-- Using bootstrap classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/Oreo.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">Oreo
                            Frappe
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card"> <!-- Created a card to display our product-->
                        <img src="{{ asset('images/vanillabrew.webp') }}"> <!-- inserted the image of the product-->
                        <h2 style="text-align:center; padding-top:10px; padding-right:20px; padding-left:20px">HazelNut
                            brew
                        </h2>
                        <h4 style="text-align:center; color:#76b9af; padding-top:50px">Rs 580</h4>
                        <a style="text-decoration:none; color:white" class="addtocart" href="{{ route('info') }}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>