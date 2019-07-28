<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
    
        <div class="form-group">
            <label for="sponsor">Sponsor</label>
            <select name="sponsor" id="sponsor">
                @foreach($sponsors as $sponsor )
                    <option>
                         {{ $sponsor[0]->id }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="place">Places</label>
            <select name="place" id="place">
                @foreach($places as $place )
                    <option>
                        {{ $place->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>
</body>
</html>