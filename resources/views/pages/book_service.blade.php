<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

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
    
      }

      button {
        text-align: center;
        margin:10px 10px 10px 10px;
        padding: 15px 32px;
        border-radius: 20px;
        background-color: green;

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
      label {
        margin-bottom: 0px;
      }
      
    </style>
    <h1>
      <u>Add Service</u>
    </h1>   
    
      <form method="post" action="{{url('service')}}">
      @csrf
      <div class="input">
        <label for="name">Name:</label>
        <input name="name" type="text"><br>
        <label for="service">Select service:</label>
        <select name="service" id="book_service">
          <option value="select">Choose a service</option>
          <option value="oil">Oil Change</option>
          <option value="engine">Engine Diagnosis</option>
          <option value="wheel">Tire Rotation</option>
          <option value="breaks">Break Inspection</option>
        </select><br> 
        <section>
          <label for= "description">Please describe the car's condition:</label> <br>
          <textarea name="description" id="car_details"></textarea>
        </section> 
        <section>
          <button type="submit">submit</button>
        </section>
        </div>
      </form>
    
    </body>
</html>
