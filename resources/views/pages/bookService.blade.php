<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LSAP')}}</title>

    </head>
    </body>
    <style>
      section {
        text-align: center;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        align: center;
        
      }
  
      textarea {
        height: 7rem;
        margin:10px 10px 10px 10px;
      }

      button {
        text-align: center;
        margin:10px 10px 10px 10px;
        padding: 15px 32px;

      }
    
      .input {
        display: grid;
        grid-template-columns: repeat(auto-fit);
        gap: 10px;
        justify-content: center;
        align-items: center;
      }
      h1 {
        text-align: center;
      }
      
    </style>
    <h1>Please fill the form below</h1>   
    <div class="input">
        <label for="name">fullname:</label>
        <input type="text"><br>
        <label for="services">select service:</label>
        <select name="services" id="book service">
        <option value="select">choose a service</option>
        <option value="oil">Oil Change</option>
        <option value="engine">Engine Diagnosis</option>
        <option value="wheel">Tire Rotation</option>
        <option value="breaks">Break Inspection</option>
        </select><br>  
        <label for= "description">please describe the car's condition:</label> <br>
        <textarea name="description" id="car-details"></textarea>
        <section>
        <button>submit</button>
        </section>
    </div>
    </body>
</html>
