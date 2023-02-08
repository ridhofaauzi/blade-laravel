<!DOCTYPE html>
<html>
<body>

    <p>
        @if (count($hobbies) == 1)
            I have one hobbies
        @elseif(count($hobbies) > 1)
            I have multiple hobbies
        @else
            I don't have hobbies
        @endif
    </p>
    
</body>
</html>