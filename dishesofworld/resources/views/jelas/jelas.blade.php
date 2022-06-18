<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jela Svijeta</title>
</head>
<body>

<h1>Jela Svijeta</h1>

<form action="" method="get">
<label for="perp">Recepata po stranici:</label>
<select id="perp" name="perp" size="1">
  <option value="5">5</option>
  <option value="10">10</option>
  <option value="15">15</option>
  <option value="20">20</option>
</select>
<input type="submit" value="Submit">

</form>
    
@if(count($jelas) > 0)
    @foreach($jelas as $jelo)
    <div>
        <h3>{{$jelo->title}}</h3>
        <h6>{{$jelo->tag}}</h6>
        <p>{{$jelo->desc}}</p>
    </div>
    @endforeach
@else 
    <h2>Nema Jela</h2>
@endif

{{ $jelas->links() }}
    


    
</body>
</html>
