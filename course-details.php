<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redirecting... | Gauri Creations</title>
</head>
<body>
    <script>
    // Redirect old hash-based URLs to new individual course pages
    var hash = window.location.hash.substring(1);
    var validCourses = ['home-baker','sugar-craft','italian','mughlai','swiss-roll-pastries','brownies','kids-special','subways-sauces','cheesecakes'];
    if (hash && validCourses.indexOf(hash) !== -1) {
        window.location.replace('/courses/' + hash);
    } else {
        window.location.replace('/courses');
    }
    </script>
    <p>Redirecting... <a href="/courses">Click here</a> if not redirected.</p>
</body>
</html>
