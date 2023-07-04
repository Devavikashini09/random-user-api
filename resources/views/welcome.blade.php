<!DOCTYPE html>
<html>
<head>
    <title>User Guide</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Random User API</h1>
            <p class="lead">Generate random user data for your applications</p>
            <hr class="my-4">
            <p>With Random User API, you can easily generate random user information such as names, emails, usernames, and more. Use this API to populate your applications with dummy user data for testing and development purposes.</p>
        </div>
        <h1>User Guide</h1>

        <h2>How to use the API</h2>
        <p>
            To use the Random User API, you can make HTTP requests to the appropriate endpoints.
            The base URL for the API is:<code>http://127.0.0.1:8000/api/fakeuser</code>
            For example, to retrieve a single user, you can make a GET request to:
            <code>http://127.0.0.1:8000/api/fakeuser?results=1</code>
        </p>

        <h2>Results</h2>
        <p>
            The API will return JSON data containing the requested user(s) information. Each user object will have properties such as name, email, username, etc.
            You can parse the JSON response in your application to extract the desired user details.
        </p>

        <h2>Requesting Multiple Users</h2>
        <p>
            To request multiple users, you can specify the number of results in the query parameter "results". For example, to get 5 users, make a GET request to:
            <code>http://127.0.0.1:8000  /api/fakeuser?results=100</code>
        </p>

        <h2>Specifying a Gender</h2>
        <p>
            If you want to get users of a specific gender, you can use the query parameter "gender". Valid values are "male" and "female". For example, to get 3 male users, make a GET request to:
            <code>http://127.0.0.1:8000/api/fakeuser?gender=male</code>
        </p>

        <h2>Pagination</h2>
        <p>
            The API supports pagination through the use of the query parameters "page" and "results". The "page" parameter specifies the page number, and the "results" parameter specifies the number of results per page. For example, to retrieve the second page of 10 results per page, make a GET request to:
            <code>http://127.0.0.1:8000/api/fakeuser?page=2&amp;results=20</code>
        </p>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
