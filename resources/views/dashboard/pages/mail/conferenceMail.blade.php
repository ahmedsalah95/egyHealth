<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- this is mail design "will be editing by frontend team" -->
    <h1>Conference Registration from mobile</h1>
    
   
        {{$conference->organizationName}} 
        {{$conference->city}}
        {{$conference->country}}
        {{$conference->website}}
        {{$conference->fax }}
        {{$conference->designation }}
        {{$conference->state }}
        {{$conference->email}}
        {{$conference->phone}} 
        {{$conference->mobile }}
        {{$conference->firstName}}
        {{$conference->lastName}}
        {{$conference->addressLine1 }}
        {{$conference->addressLine2 }}
        {{$conference->alternateEmail }}
        {{$conference->conferenceTitle }}
        {{$conference->title }}
        
    
</body>
</html>