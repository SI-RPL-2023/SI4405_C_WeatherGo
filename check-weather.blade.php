<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WeatherGO</title>
    <link rel="shortcut icon" href="{{asset('assets/app_logo.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('styles/style1.css')}}" />
    <script src="{{asset('./script.js')}}" defer></script>
</head>

<body>

  <div class="container">
    <div class="container-header">
      <div class="header">WeatherGO</div>
      <div class="subheader">
          <i>Easiest way to know everything about the climate of a place</i>
      </div>
    </div>
    <div class="container-model">
        <div class="card">
            <div class="search">
                <input type="text" class="search-bar" placeholder="City Name" />
                <button>
            <svg
              fill="#000000"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="24px"
              height="1.2em"
            >
              <path
                d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"
              />
            </svg>
          </button>
            </div>
            <div class="weather loading">
                <h3 class="city"></h3>
                <h1 class="temp">Temperature :</h1>
                <div class="flex">
                    <img src="" alt="" class="icon" />
                    <div class="description">Description :</div>
                </div>

                <div class="humidity">Humidity :</div>
                <div class="wind">Wind Speed:</div>
            </div>
        </div>
    </div>
  </div>

    
</body>

</html>