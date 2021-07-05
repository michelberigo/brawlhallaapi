<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Brawlhalla API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/welcome.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>

    <body>
        <main role="main" class="container-fluid mb-5">
            <div id="cabecalho" class="text-center mt-5 mb-5">
                <h1>Brawlhalla API - Guide</h1>
                <p class="lead">Current Version: 1.0 | 13/03/2021</p>
                <p class="lead">Unofficial</p>
            </div>

            <div class="row">
                <div class="col-sm-5 offset-sm-1">
                    <div id="changelog">
                        <p class="lead"><strong>API Changelog (v1)</strong></p>
                        
                        <ul>
                            <li>Added Legends endpoint.</li>
                            <li>Added Weapons endpoint.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <br>

            <div id="endpoint-legend">
                <div class="row">
                    <div class="col-sm-6 offset-sm-1">
                        <h3>Get Legend Information</h3>
                        <p>The Card Information endpoint is available at <code id="dominio-atual-legend"></code></p>
                        <p>The following endpoint parameters can be passed:</p>

                        <ul>
                            <li>Name - The <b>exact</b> name of the legend.</li>
                            <li>Gender - Filter legends by gender (you can pass "Male", "Female", "M" or "F").</li>
                            <li>Weapons - Filter legends by weapons (you can pass one or two comma separated weapon names).</li>
                            <li>Strength - Filter legends by strength value.</li>
                            <li>Dexterity - Filter legends by dexterity value.</li>
                            <li>Defense - Filter legends by defense value.</li>
                            <li>Speed - Filter legends by speed value.</li>
                            <li>Price - Filter legends by price value.</li>
                        </ul>

                        <p>
                            You can also use the following prefix for strength, dexterity, defense, speed and price parameters: 
                            "lt" (less than), "gt" (greater than).
                        </p>

                        <p>
                            Examples: ltstrength=5 (strength is less than 5) and gtspeed=6 (speed is greater than 6).
                        </p>

                        <p><strong>Response Information:</strong></p>

                        <ul>
                            <li>id - ID of the legend.</li>
                            <li>name - Name of the legend.</li>
                            <li>gender - Gender of the legend.</li>
                            <li>first_weapon - One of the weapons of the legend.</li>
                            <li>second_weapon - One of the weapons of the legend.</li>
                            <li>strength - Strength of the legend.</li>
                            <li>dexterity - Dexterity of the legend.</li>
                            <li>defense - Defense of the legend.</li>
                            <li>speed - Speed of the legend.</li>
                            <li>price - Current price of the legend.</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 form-group">
                        <textarea id="json-legend" rows="16" class="form-control" readonly></textarea>

                        <div class="text-center">
                            <p class="text-center mt-3"><b>Mirage</b> API response</p>
                            <code id="dominio-atual-legend-json"></code>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row" class="mb-5">
                <div class="col-sm-6 offset-sm-1">
                    <h3>Example Usage</h3>
                    <p>The following is a list of examples you can do using the possible endpoint parameters shown above.</p>

                    <div class="ml-5">
                        <p>Get all legends:</p>
                        <li><code>https://brawlhallaapi.test/api/legends</code></li>
                        <p>Get all female legends:</p>
                        <li><code>https://brawlhallaapi.test/api/legends?gender=female</code></li>
                        <p>Get all legends that use bow weapon:</p>
                        <li><code>https://brawlhallaapi.test/api/legends?weapons=bow</code></li>
                        <p>Get all legends that use bow and spear weapons:</p>
                        <li><code>https://brawlhallaapi.test/api/legends?weapons=bow,spear</code></li>
                        <p>Get all legends that have dexterity 7:</p>
                        <li><code>https://brawlhallaapi.test/api/legends?dexterity=7</code></li>
                        <p>Get all legends that have strength 5 and speed lower than 5:</p>
                        <li><code>https://brawlhallaapi.test/api/legends?strength=5{{ print_r('&', true) }}ltspeed=5</code></li>
                    </div>
                </div>
            </div>

            <br>

            <div class="row" class="mb-5">
                <div class="col-sm-6 offset-sm-1">
                    <h3>Endpoint Information</h3>
                    <p>Parameter "weapons" available values:</p>

                    @php
                        $weapons = App\Models\Weapon::orderBy('name')->get();
                    @endphp

                    <ul>
                        @foreach ($weapons as $weapon)
                            <li>{{ $weapon->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <br>

            <div class="row" class="mb-5">
                <div class="col-sm-6 offset-sm-1">
                    <h3>All Weapons</h3>
                    <p>The Weapons endpoint can be found at <code>https://brawlhallaapi.test/api/weapons</code>.</p>
                    <p>This simply returns all of the current Brawlhalla weapons we have stored in the database.</p>
                    <p>This contains the following response info: ID and Name.</p>
                </div>
            </div>
        </main>

        <footer id="footer">
            <p class="lead">Developed by Michel Berigo</p>
            <p class="lead">Any issue? Let me know:</p>
            
            <div>
                <a href="https://github.com/michelberigo" target="_blank" rel="noopener"><i class="fab fa-github fa-3x fa-fw"></i></a>
            </div>
        </footer>
    </body>
</html>
