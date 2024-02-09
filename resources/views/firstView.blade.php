<!DOCTYPE html>

    <head>
      
    </head>
    <body >
        @if ($value > 20 )
        <dev style="background-color: brown">
            <h2>brown </h2>
        </dev>
        @else 
     
            <h2 style="background-color: darkorange">orange </h2>
      
        @endif
        <p><h1> hellow  {{$renderdName}} </h1></p>
    </body>
</html>
